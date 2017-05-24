<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuariosEnEstadosOrden Controller
 *
 * @property \App\Model\Table\UsuariosEnEstadosOrdenTable $UsuariosEnEstadosOrden
 *
 * @method \App\Model\Entity\UsuariosEnEstadosOrden[] paginate($object = null, array $settings = [])
 */
class UsuariosEnEstadosOrdenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EstadosDeOrdens', 'Usuarios']
        ];
        $usuariosEnEstadosOrden = $this->paginate($this->UsuariosEnEstadosOrden);

        $this->set(compact('usuariosEnEstadosOrden'));
        $this->set('_serialize', ['usuariosEnEstadosOrden']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios En Estados Orden id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosEnEstadosOrden = $this->UsuariosEnEstadosOrden->get($id, [
            'contain' => ['EstadosDeOrdens', 'Usuarios']
        ]);

        $this->set('usuariosEnEstadosOrden', $usuariosEnEstadosOrden);
        $this->set('_serialize', ['usuariosEnEstadosOrden']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariosEnEstadosOrden = $this->UsuariosEnEstadosOrden->newEntity();
        if ($this->request->is('post')) {
            $usuariosEnEstadosOrden = $this->UsuariosEnEstadosOrden->patchEntity($usuariosEnEstadosOrden, $this->request->getData());
            if ($this->UsuariosEnEstadosOrden->save($usuariosEnEstadosOrden)) {
                $this->Flash->success(__('The usuarios en estados orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios en estados orden could not be saved. Please, try again.'));
        }
        $estadosDeOrdens = $this->UsuariosEnEstadosOrden->EstadosDeOrdens->find('list', ['limit' => 200]);
        $usuarios = $this->UsuariosEnEstadosOrden->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('usuariosEnEstadosOrden', 'estadosDeOrdens', 'usuarios'));
        $this->set('_serialize', ['usuariosEnEstadosOrden']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios En Estados Orden id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosEnEstadosOrden = $this->UsuariosEnEstadosOrden->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosEnEstadosOrden = $this->UsuariosEnEstadosOrden->patchEntity($usuariosEnEstadosOrden, $this->request->getData());
            if ($this->UsuariosEnEstadosOrden->save($usuariosEnEstadosOrden)) {
                $this->Flash->success(__('The usuarios en estados orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios en estados orden could not be saved. Please, try again.'));
        }
        $estadosDeOrdens = $this->UsuariosEnEstadosOrden->EstadosDeOrdens->find('list', ['limit' => 200]);
        $usuarios = $this->UsuariosEnEstadosOrden->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('usuariosEnEstadosOrden', 'estadosDeOrdens', 'usuarios'));
        $this->set('_serialize', ['usuariosEnEstadosOrden']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios En Estados Orden id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosEnEstadosOrden = $this->UsuariosEnEstadosOrden->get($id);
        if ($this->UsuariosEnEstadosOrden->delete($usuariosEnEstadosOrden)) {
            $this->Flash->success(__('The usuarios en estados orden has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios en estados orden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
