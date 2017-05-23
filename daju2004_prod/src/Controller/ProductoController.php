<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Producto Controller
 *
 * @property \App\Model\Table\ProductoTable $Producto
 *
 * @method \App\Model\Entity\Producto[] paginate($object = null, array $settings = [])
 */
class ProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Familias', 'Monedas', 'Ivas']
        ];
        $producto = $this->paginate($this->Producto);

        $this->set(compact('producto'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'PedidosEmpresas', 'Proceso', 'Objetos']
        ]);

        $this->set('producto', $producto);
        $this->set('_serialize', ['producto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producto = $this->Producto->newEntity();
        if ($this->request->is('post')) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto could not be saved. Please, try again.'));
        }
        $familias = $this->Producto->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Producto->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Producto->Ivas->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->Producto->PedidosEmpresas->find('list', ['limit' => 200]);
        $proceso = $this->Producto->Proceso->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'familias', 'monedas', 'ivas', 'pedidosEmpresas', 'proceso'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => ['PedidosEmpresas', 'Proceso']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto could not be saved. Please, try again.'));
        }
        $familias = $this->Producto->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Producto->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Producto->Ivas->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->Producto->PedidosEmpresas->find('list', ['limit' => 200]);
        $proceso = $this->Producto->Proceso->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'familias', 'monedas', 'ivas', 'pedidosEmpresas', 'proceso'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Producto->get($id);
        if ($this->Producto->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
