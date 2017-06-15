<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prioridades Controller
 *
 * @property \App\Model\Table\PrioridadesTable $Prioridades
 *
 * @method \App\Model\Entity\Prioridade[] paginate($object = null, array $settings = [])
 */
class PrioridadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $prioridades = $this->paginate($this->Prioridades);

        $this->set(compact('prioridades'));
        $this->set('_serialize', ['prioridades']);
        $this->set('modelo', "prioridades");
    }

    /**
     * View method
     *
     * @param string|null $id Prioridade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prioridade = $this->Prioridades->get($id, [
            'contain' => ['Ordens', 'PedidosProductosDetalle']
        ]);
        $this->paginate =[
            'Ordens' => ['scope' => 'mis_Ordens']
            ,'PedidosProductosDetalle' => ['scope' => 'mis_PedidosProductosDetalle']
        ];

        $this->loadModel('Ordens');
        $query=$this->Ordens->find('all')
                                        ->where(['prioridade_id' => $id])
                                        ->contain(['Estados', 'Centros', 'Proceso', 'Prioridades']);

        $ordens=$this->paginate($query,['scope'=>'mis_Ordens']);
        $this->set(compact('ordens'));

        $this->loadModel('PedidosProductosDetalle');
        $query=$this->PedidosProductosDetalle->find('all')
                                        ->where(['prioridade_id' => $id])
                                        ->contain(['PedidosEmpresas', 'Producto', 'Prioridades']);

        $pedidosProductosDetalle=$this->paginate($query,['scope'=>'mis_PedidosProductosDetalle']);
        $this->set(compact('pedidosProductosDetalle'));

                                         
        $this->set('prioridade', $prioridade);
        $this->set('_serialize', ['prioridade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $prioridade = $this->Prioridades->newEntity();
        if($external_name!=null){
            $prioridade->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $prioridade = $this->Prioridades->patchEntity($prioridade, $this->request->getData());
            if ($this->Prioridades->save($prioridade)) {
                $this->Flash->success(__('The prioridade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prioridade could not be saved. Please, try again.'));
        }
        $this->set(compact('prioridade'));
        $this->set('_serialize', ['prioridade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prioridade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prioridade = $this->Prioridades->get($id, [
            'contain' => ['Ordens', 'PedidosProductosDetalle']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prioridade = $this->Prioridades->patchEntity($prioridade, $this->request->getData());
            if ($this->Prioridades->save($prioridade)) {
                $this->Flash->success(__('The prioridade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prioridade could not be saved. Please, try again.'));
        }
        $this->set(compact('prioridade'));
        $this->set('_serialize', ['prioridade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prioridade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prioridade = $this->Prioridades->get($id);
        if ($this->Prioridades->delete($prioridade)) {
            $this->Flash->success(__('The prioridade has been deleted.'));
        } else {
            $this->Flash->error(__('The prioridade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
