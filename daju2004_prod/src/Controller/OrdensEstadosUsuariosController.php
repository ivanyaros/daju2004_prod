<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdensEstadosUsuarios Controller
 *
 * @property \App\Model\Table\OrdensEstadosUsuariosTable $OrdensEstadosUsuarios
 *
 * @method \App\Model\Entity\OrdensEstadosUsuario[] paginate($object = null, array $settings = [])
 */
class OrdensEstadosUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrdensEstados', 'Usuarios']
        ];
        $ordensEstadosUsuarios = $this->paginate($this->OrdensEstadosUsuarios);

        $this->set(compact('ordensEstadosUsuarios'));
        $this->set('_serialize', ['ordensEstadosUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Ordens Estados Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordensEstadosUsuario = $this->OrdensEstadosUsuarios->get($id, [
            'contain' => ['OrdensEstados', 'Usuarios']
        ]);

        $this->set('ordensEstadosUsuario', $ordensEstadosUsuario);
        $this->set('_serialize', ['ordensEstadosUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordensEstadosUsuario = $this->OrdensEstadosUsuarios->newEntity();
        if ($this->request->is('post')) {
            $ordensEstadosUsuario = $this->OrdensEstadosUsuarios->patchEntity($ordensEstadosUsuario, $this->request->getData());
            if ($this->OrdensEstadosUsuarios->save($ordensEstadosUsuario)) {
                $this->Flash->success(__('The ordens estados usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estados usuario could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->OrdensEstadosUsuarios->OrdensEstados->find('list', ['limit' => 200]);
        $usuarios = $this->OrdensEstadosUsuarios->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstadosUsuario', 'ordensEstados', 'usuarios'));
        $this->set('_serialize', ['ordensEstadosUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordens Estados Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordensEstadosUsuario = $this->OrdensEstadosUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordensEstadosUsuario = $this->OrdensEstadosUsuarios->patchEntity($ordensEstadosUsuario, $this->request->getData());
            if ($this->OrdensEstadosUsuarios->save($ordensEstadosUsuario)) {
                $this->Flash->success(__('The ordens estados usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estados usuario could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->OrdensEstadosUsuarios->OrdensEstados->find('list', ['limit' => 200]);
        $usuarios = $this->OrdensEstadosUsuarios->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstadosUsuario', 'ordensEstados', 'usuarios'));
        $this->set('_serialize', ['ordensEstadosUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordens Estados Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordensEstadosUsuario = $this->OrdensEstadosUsuarios->get($id);
        if ($this->OrdensEstadosUsuarios->delete($ordensEstadosUsuario)) {
            $this->Flash->success(__('The ordens estados usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The ordens estados usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
