<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subproceso Controller
 *
 * @property \App\Model\Table\SubprocesoTable $Subproceso
 *
 * @method \App\Model\Entity\Subproceso[] paginate($object = null, array $settings = [])
 */
class SubprocesoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proceso']
        ];
        $subproceso = $this->paginate($this->Subproceso);

        $this->set(compact('subproceso'));
        $this->set('_serialize', ['subproceso']);
        $this->set('modelo', "subproceso");
    }

    /**
     * View method
     *
     * @param string|null $id Subproceso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subproceso = $this->Subproceso->get($id, [
            'contain' => ['Proceso', 'Tareas']
        ]);
        $this->paginate =[
            'Tareas' => ['scope' => 'mis_Tareas']
        ];

        $this->loadModel('Tareas');
        $query=$this->Tareas->find('all')
                                        ->where(['subproceso_id' => $id])
                                        ->contain(['Subproceso', 'Ordens']);

        $tareas=$this->paginate($query,['scope'=>'mis_Tareas']);
        $this->set(compact('tareas'));

                                         
        $this->set('subproceso', $subproceso);
        $this->set('_serialize', ['subproceso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $subproceso = $this->Subproceso->newEntity();
        if($external_name!=null){
            $subproceso->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $subproceso = $this->Subproceso->patchEntity($subproceso, $this->request->getData());
            if ($this->Subproceso->save($subproceso)) {
                $this->Flash->success(__('The subproceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subproceso could not be saved. Please, try again.'));
        }
        $proceso = $this->Subproceso->Proceso->find('list', ['limit' => 200]);
        $this->set(compact('subproceso', 'proceso'));
        $this->set('_serialize', ['subproceso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subproceso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subproceso = $this->Subproceso->get($id, [
            'contain' => ['Proceso', 'Tareas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subproceso = $this->Subproceso->patchEntity($subproceso, $this->request->getData());
            if ($this->Subproceso->save($subproceso)) {
                $this->Flash->success(__('The subproceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subproceso could not be saved. Please, try again.'));
        }
        $proceso = $this->Subproceso->Proceso->find('list', ['limit' => 200]);
        $this->set(compact('subproceso', 'proceso'));
        $this->set('_serialize', ['subproceso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subproceso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subproceso = $this->Subproceso->get($id);
        if ($this->Subproceso->delete($subproceso)) {
            $this->Flash->success(__('The subproceso has been deleted.'));
        } else {
            $this->Flash->error(__('The subproceso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
