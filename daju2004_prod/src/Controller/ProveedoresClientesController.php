<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProveedoresClientes Controller
 *
 * @property \App\Model\Table\ProveedoresClientesTable $ProveedoresClientes
 *
 * @method \App\Model\Entity\ProveedoresCliente[] paginate($object = null, array $settings = [])
 */
class ProveedoresClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $proveedoresClientes = $this->paginate($this->ProveedoresClientes);

        $this->set(compact('proveedoresClientes'));
        $this->set('_serialize', ['proveedoresClientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Proveedores Cliente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedoresCliente = $this->ProveedoresClientes->get($id, [
            'contain' => ['Material', 'Direcciones', 'EntradasMaterial', 'PedidosEmpresas', 'SalidasObjetos']
        ]);

        $this->set('proveedoresCliente', $proveedoresCliente);
        $this->set('_serialize', ['proveedoresCliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedoresCliente = $this->ProveedoresClientes->newEntity();
        if ($this->request->is('post')) {
            $proveedoresCliente = $this->ProveedoresClientes->patchEntity($proveedoresCliente, $this->request->getData());
            if ($this->ProveedoresClientes->save($proveedoresCliente)) {
                $this->Flash->success(__('The proveedores cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores cliente could not be saved. Please, try again.'));
        }
        $material = $this->ProveedoresClientes->Material->find('list', ['limit' => 200]);
        $this->set(compact('proveedoresCliente', 'material'));
        $this->set('_serialize', ['proveedoresCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedores Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedoresCliente = $this->ProveedoresClientes->get($id, [
            'contain' => ['Material']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedoresCliente = $this->ProveedoresClientes->patchEntity($proveedoresCliente, $this->request->getData());
            if ($this->ProveedoresClientes->save($proveedoresCliente)) {
                $this->Flash->success(__('The proveedores cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores cliente could not be saved. Please, try again.'));
        }
        $material = $this->ProveedoresClientes->Material->find('list', ['limit' => 200]);
        $this->set(compact('proveedoresCliente', 'material'));
        $this->set('_serialize', ['proveedoresCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedores Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedoresCliente = $this->ProveedoresClientes->get($id);
        if ($this->ProveedoresClientes->delete($proveedoresCliente)) {
            $this->Flash->success(__('The proveedores cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedores cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
