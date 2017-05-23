<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProcesoProducto Controller
 *
 * @property \App\Model\Table\ProcesoProductoTable $ProcesoProducto
 *
 * @method \App\Model\Entity\ProcesoProducto[] paginate($object = null, array $settings = [])
 */
class ProcesoProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proceso', 'Producto']
        ];
        $procesoProducto = $this->paginate($this->ProcesoProducto);

        $this->set(compact('procesoProducto'));
        $this->set('_serialize', ['procesoProducto']);
    }

    /**
     * View method
     *
     * @param string|null $id Proceso Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $procesoProducto = $this->ProcesoProducto->get($id, [
            'contain' => ['Proceso', 'Producto']
        ]);

        $this->set('procesoProducto', $procesoProducto);
        $this->set('_serialize', ['procesoProducto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $procesoProducto = $this->ProcesoProducto->newEntity();
        if ($this->request->is('post')) {
            $procesoProducto = $this->ProcesoProducto->patchEntity($procesoProducto, $this->request->getData());
            if ($this->ProcesoProducto->save($procesoProducto)) {
                $this->Flash->success(__('The proceso producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso producto could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoProducto->Proceso->find('list', ['limit' => 200]);
        $producto = $this->ProcesoProducto->Producto->find('list', ['limit' => 200]);
        $this->set(compact('procesoProducto', 'proceso', 'producto'));
        $this->set('_serialize', ['procesoProducto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $procesoProducto = $this->ProcesoProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $procesoProducto = $this->ProcesoProducto->patchEntity($procesoProducto, $this->request->getData());
            if ($this->ProcesoProducto->save($procesoProducto)) {
                $this->Flash->success(__('The proceso producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso producto could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoProducto->Proceso->find('list', ['limit' => 200]);
        $producto = $this->ProcesoProducto->Producto->find('list', ['limit' => 200]);
        $this->set(compact('procesoProducto', 'proceso', 'producto'));
        $this->set('_serialize', ['procesoProducto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $procesoProducto = $this->ProcesoProducto->get($id);
        if ($this->ProcesoProducto->delete($procesoProducto)) {
            $this->Flash->success(__('The proceso producto has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
