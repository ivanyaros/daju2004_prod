<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ordens Controller
 *
 * @property \App\Model\Table\OrdensTable $Ordens
 *
 * @method \App\Model\Entity\Orden[] paginate($object = null, array $settings = [])
 */
class OrdensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estados', 'Centros', 'Proceso', 'Prioridades']
        ];
        $ordens = $this->paginate($this->Ordens);

        $this->set(compact('ordens'));
        $this->set('_serialize', ['ordens']);
        $this->set('modelo', "ordens");
    }

    /**
     * View method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orden = $this->Ordens->get($id, [
            'contain' => ['Estados', 'Centros', 'Proceso', 'Prioridades', 'EstadosDeOrdens', 'Objetos']
        ]);
        $this->paginate =[
            'Estados' => ['scope' => 'mis_Estados']
            ,'Centros' => ['scope' => 'mis_Centros']
            ,'Proceso' => ['scope' => 'mis_Proceso']
            ,'Prioridades' => ['scope' => 'mis_Prioridades']
            ,'EstadosDeOrdens' => ['scope' => 'mis_EstadosDeOrdens']
            ,'Objetos' => ['scope' => 'mis_Objetos']
        ];

        $this->loadModel('Estados');
        $query=$this->Estados->find('all')
                                        ->where(['orden_id' => $id]);
        $estados=$this->paginate($query,['scope'=>'mis_Estados']);
        $this->set(compact('estados'));

        $this->loadModel('Centros');
        $query=$this->Centros->find('all')
                                        ->where(['orden_id' => $id]);
        $centros=$this->paginate($query,['scope'=>'mis_Centros']);
        $this->set(compact('centros'));

        $this->loadModel('Proceso');
        $query=$this->Proceso->find('all')
                                        ->where(['orden_id' => $id]);
        $proceso=$this->paginate($query,['scope'=>'mis_Proceso']);
        $this->set(compact('proceso'));

        $this->loadModel('Prioridades');
        $query=$this->Prioridades->find('all')
                                        ->where(['orden_id' => $id]);
        $prioridades=$this->paginate($query,['scope'=>'mis_Prioridades']);
        $this->set(compact('prioridades'));

        $this->loadModel('EstadosDeOrdens');
        $query=$this->EstadosDeOrdens->find('all')
                                        ->where(['orden_id' => $id]);
        $estadosDeOrdens=$this->paginate($query,['scope'=>'mis_EstadosDeOrdens']);
        $this->set(compact('estadosDeOrdens'));

        $this->loadModel('Objetos');
        $query=$this->Objetos->find('all')
                                        ->where(['orden_id' => $id]);
        $objetos=$this->paginate($query,['scope'=>'mis_Objetos']);
        $this->set(compact('objetos'));

                                         
        $this->set('orden', $orden);
        $this->set('_serialize', ['orden']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $orden = $this->Ordens->newEntity();
        if($external_name!=null){
            $orden->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $orden = $this->Ordens->patchEntity($orden, $this->request->getData());
            if ($this->Ordens->save($orden)) {
                $this->Flash->success(__('The orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orden could not be saved. Please, try again.'));
        }
        $estados = $this->Ordens->Estados->find('list', ['limit' => 200]);
        $centros = $this->Ordens->Centros->find('list', ['limit' => 200]);
        $proceso = $this->Ordens->Proceso->find('list', ['limit' => 200]);
        $prioridades = $this->Ordens->Prioridades->find('list', ['limit' => 200]);
        $this->set(compact('orden', 'estados', 'centros', 'proceso', 'prioridades'));
        $this->set('_serialize', ['orden']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orden = $this->Ordens->get($id, [
            'contain' => ['Estados', 'Centros', 'Proceso', 'Prioridades', 'EstadosDeOrdens', 'Objetos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orden = $this->Ordens->patchEntity($orden, $this->request->getData());
            if ($this->Ordens->save($orden)) {
                $this->Flash->success(__('The orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orden could not be saved. Please, try again.'));
        }
        $estados = $this->Ordens->Estados->find('list', ['limit' => 200]);
        $centros = $this->Ordens->Centros->find('list', ['limit' => 200]);
        $proceso = $this->Ordens->Proceso->find('list', ['limit' => 200]);
        $prioridades = $this->Ordens->Prioridades->find('list', ['limit' => 200]);
        $this->set(compact('orden', 'estados', 'centros', 'proceso', 'prioridades'));
        $this->set('_serialize', ['orden']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orden = $this->Ordens->get($id);
        if ($this->Ordens->delete($orden)) {
            $this->Flash->success(__('The orden has been deleted.'));
        } else {
            $this->Flash->error(__('The orden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
