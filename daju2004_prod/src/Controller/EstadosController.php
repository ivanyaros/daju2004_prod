<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estados Controller
 *
 * @property \App\Model\Table\EstadosTable $Estados
 *
 * @method \App\Model\Entity\Estado[] paginate($object = null, array $settings = [])
 */
class EstadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $estados = $this->paginate($this->Estados);

        $this->set(compact('estados'));
        $this->set('_serialize', ['estados']);
        $this->set('modelo', "estados");
    }

    /**
     * View method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estado = $this->Estados->get($id, [
            'contain' => ['Ordens']
        ]);
        $this->paginate =[
            'Ordens' => ['scope' => 'mis_Ordens']
        ];

        $this->loadModel('Ordens');
        $query=$this->Ordens->find('all')
                                        ->where(['estado_id' => $id])
                                        ->contain(['Estados', 'Centros', 'Proceso', 'Prioridades', 'Categorias']);

        $ordens=$this->paginate($query,['scope'=>'mis_Ordens']);
        $this->set(compact('ordens'));

                                         
        $this->set('estado', $estado);
        $this->set('_serialize', ['estado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $estado = $this->Estados->newEntity();
        if($external_name!=null){
            $estado->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $estado = $this->Estados->patchEntity($estado, $this->request->getData());
            if ($this->Estados->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $this->set(compact('estado'));
        $this->set('_serialize', ['estado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estado = $this->Estados->get($id, [
            'contain' => ['Ordens']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estado = $this->Estados->patchEntity($estado, $this->request->getData());
            if ($this->Estados->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $this->set(compact('estado'));
        $this->set('_serialize', ['estado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estado = $this->Estados->get($id);
        if ($this->Estados->delete($estado)) {
            $this->Flash->success(__('The estado has been deleted.'));
        } else {
            $this->Flash->error(__('The estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
