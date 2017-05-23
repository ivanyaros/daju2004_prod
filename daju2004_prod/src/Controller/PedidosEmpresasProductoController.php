<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PedidosEmpresasProducto Controller
 *
 * @property \App\Model\Table\PedidosEmpresasProductoTable $PedidosEmpresasProducto
 *
 * @method \App\Model\Entity\PedidosEmpresasProducto[] paginate($object = null, array $settings = [])
 */
class PedidosEmpresasProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PedidosEmpresas', 'Producto']
        ];
        $pedidosEmpresasProducto = $this->paginate($this->PedidosEmpresasProducto);

        $this->set(compact('pedidosEmpresasProducto'));
        $this->set('_serialize', ['pedidosEmpresasProducto']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedidos Empresas Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidosEmpresasProducto = $this->PedidosEmpresasProducto->get($id, [
            'contain' => ['PedidosEmpresas', 'Producto']
        ]);

        $this->set('pedidosEmpresasProducto', $pedidosEmpresasProducto);
        $this->set('_serialize', ['pedidosEmpresasProducto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedidosEmpresasProducto = $this->PedidosEmpresasProducto->newEntity();
        if ($this->request->is('post')) {
            $pedidosEmpresasProducto = $this->PedidosEmpresasProducto->patchEntity($pedidosEmpresasProducto, $this->request->getData());
            if ($this->PedidosEmpresasProducto->save($pedidosEmpresasProducto)) {
                $this->Flash->success(__('The pedidos empresas producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos empresas producto could not be saved. Please, try again.'));
        }
        $pedidosEmpresas = $this->PedidosEmpresasProducto->PedidosEmpresas->find('list', ['limit' => 200]);
        $producto = $this->PedidosEmpresasProducto->Producto->find('list', ['limit' => 200]);
        $this->set(compact('pedidosEmpresasProducto', 'pedidosEmpresas', 'producto'));
        $this->set('_serialize', ['pedidosEmpresasProducto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidos Empresas Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidosEmpresasProducto = $this->PedidosEmpresasProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidosEmpresasProducto = $this->PedidosEmpresasProducto->patchEntity($pedidosEmpresasProducto, $this->request->getData());
            if ($this->PedidosEmpresasProducto->save($pedidosEmpresasProducto)) {
                $this->Flash->success(__('The pedidos empresas producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos empresas producto could not be saved. Please, try again.'));
        }
        $pedidosEmpresas = $this->PedidosEmpresasProducto->PedidosEmpresas->find('list', ['limit' => 200]);
        $producto = $this->PedidosEmpresasProducto->Producto->find('list', ['limit' => 200]);
        $this->set(compact('pedidosEmpresasProducto', 'pedidosEmpresas', 'producto'));
        $this->set('_serialize', ['pedidosEmpresasProducto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidos Empresas Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidosEmpresasProducto = $this->PedidosEmpresasProducto->get($id);
        if ($this->PedidosEmpresasProducto->delete($pedidosEmpresasProducto)) {
            $this->Flash->success(__('The pedidos empresas producto has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidos empresas producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
