<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tareas Controller
 *
 * @property \App\Model\Table\TareasTable $Tareas
 *
 * @method \App\Model\Entity\Tarea[] paginate($object = null, array $settings = [])
 */
class TareasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subproceso', 'Ordens']
        ];
        $tareas = $this->paginate($this->Tareas);

        $this->set(compact('tareas'));
        $this->set('_serialize', ['tareas']);
        $this->set('modelo', "tareas");
    }

    /**
     * View method
     *
     * @param string|null $id Tarea id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tarea = $this->Tareas->get($id, [
            'contain' => ['Subproceso', 'Ordens']
        ]);

                                         
        $this->set('tarea', $tarea);
        $this->set('_serialize', ['tarea']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $tarea = $this->Tareas->newEntity();
        if($external_name!=null){
            $tarea->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $tarea = $this->Tareas->patchEntity($tarea, $this->request->getData());
            if ($this->Tareas->save($tarea)) {
                $this->Flash->success(__('The tarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tarea could not be saved. Please, try again.'));
        }
        $subproceso = $this->Tareas->Subproceso->find('list', ['limit' => 200]);
        $ordens = $this->Tareas->Ordens->find('list', ['limit' => 200]);
        $this->set(compact('tarea', 'subproceso', 'ordens'));
        $this->set('_serialize', ['tarea']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarea id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tarea = $this->Tareas->get($id, [
            'contain' => ['Subproceso', 'Ordens']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tarea = $this->Tareas->patchEntity($tarea, $this->request->getData());
            if ($this->Tareas->save($tarea)) {
                $this->Flash->success(__('The tarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tarea could not be saved. Please, try again.'));
        }
        $subproceso = $this->Tareas->Subproceso->find('list', ['limit' => 200]);
        $ordens = $this->Tareas->Ordens->find('list', ['limit' => 200]);
        $this->set(compact('tarea', 'subproceso', 'ordens'));
        $this->set('_serialize', ['tarea']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarea id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tarea = $this->Tareas->get($id);
        if ($this->Tareas->delete($tarea)) {
            $this->Flash->success(__('The tarea has been deleted.'));
        } else {
            $this->Flash->error(__('The tarea could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
