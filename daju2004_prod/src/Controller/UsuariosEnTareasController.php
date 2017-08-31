<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuariosEnTareas Controller
 *
 * @property \App\Model\Table\UsuariosEnTareasTable $UsuariosEnTareas
 *
 * @method \App\Model\Entity\UsuariosEnTarea[] paginate($object = null, array $settings = [])
 */
class UsuariosEnTareasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tareas', 'Users']
        ];
        $usuariosEnTareas = $this->paginate($this->UsuariosEnTareas);

        $this->set(compact('usuariosEnTareas'));
        $this->set('_serialize', ['usuariosEnTareas']);
        $this->set('modelo', "usuariosEnTareas");
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios En Tarea id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosEnTarea = $this->UsuariosEnTareas->get($id, [
            'contain' => ['Tareas', 'Users']
        ]);

                                         
        $this->set('usuariosEnTarea', $usuariosEnTarea);
        $this->set('_serialize', ['usuariosEnTarea']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $usuariosEnTarea = $this->UsuariosEnTareas->newEntity();
        if($external_name!=null){
            $usuariosEnTarea->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $usuariosEnTarea = $this->UsuariosEnTareas->patchEntity($usuariosEnTarea, $this->request->getData());
            if ($this->UsuariosEnTareas->save($usuariosEnTarea)) {
                $this->Flash->success(__('The usuarios en tarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios en tarea could not be saved. Please, try again.'));
        }
        $tareas = $this->UsuariosEnTareas->Tareas->find('list', ['limit' => 200]);
        $users = $this->UsuariosEnTareas->Users->find('list', ['limit' => 200]);
        $this->set(compact('usuariosEnTarea', 'tareas', 'users'));
        $this->set('_serialize', ['usuariosEnTarea']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios En Tarea id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosEnTarea = $this->UsuariosEnTareas->get($id, [
            'contain' => ['Tareas', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosEnTarea = $this->UsuariosEnTareas->patchEntity($usuariosEnTarea, $this->request->getData());
            if ($this->UsuariosEnTareas->save($usuariosEnTarea)) {
                $this->Flash->success(__('The usuarios en tarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios en tarea could not be saved. Please, try again.'));
        }
        $tareas = $this->UsuariosEnTareas->Tareas->find('list', ['limit' => 200]);
        $users = $this->UsuariosEnTareas->Users->find('list', ['limit' => 200]);
        $this->set(compact('usuariosEnTarea', 'tareas', 'users'));
        $this->set('_serialize', ['usuariosEnTarea']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios En Tarea id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosEnTarea = $this->UsuariosEnTareas->get($id);
        if ($this->UsuariosEnTareas->delete($usuariosEnTarea)) {
            $this->Flash->success(__('The usuarios en tarea has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios en tarea could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
