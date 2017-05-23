<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProcesoProductoSalida Controller
 *
 * @property \App\Model\Table\ProcesoProductoSalidaTable $ProcesoProductoSalida
 *
 * @method \App\Model\Entity\ProcesoProductoSalida[] paginate($object = null, array $settings = [])
 */
class ProcesoProductoSalidaController extends AppController
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
        $procesoProductoSalida = $this->paginate($this->ProcesoProductoSalida);

        $this->set(compact('procesoProductoSalida'));
        $this->set('_serialize', ['procesoProductoSalida']);
    }

    /**
     * View method
     *
     * @param string|null $id Proceso Producto Salida id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $procesoProductoSalida = $this->ProcesoProductoSalida->get($id, [
            'contain' => ['Proceso', 'Producto']
        ]);

        $this->set('procesoProductoSalida', $procesoProductoSalida);
        $this->set('_serialize', ['procesoProductoSalida']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $procesoProductoSalida = $this->ProcesoProductoSalida->newEntity();
        if ($this->request->is('post')) {
            $procesoProductoSalida = $this->ProcesoProductoSalida->patchEntity($procesoProductoSalida, $this->request->getData());
            if ($this->ProcesoProductoSalida->save($procesoProductoSalida)) {
                $this->Flash->success(__('The proceso producto salida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso producto salida could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoProductoSalida->Proceso->find('list', ['limit' => 200]);
        $producto = $this->ProcesoProductoSalida->Producto->find('list', ['limit' => 200]);
        $this->set(compact('procesoProductoSalida', 'proceso', 'producto'));
        $this->set('_serialize', ['procesoProductoSalida']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso Producto Salida id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $procesoProductoSalida = $this->ProcesoProductoSalida->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $procesoProductoSalida = $this->ProcesoProductoSalida->patchEntity($procesoProductoSalida, $this->request->getData());
            if ($this->ProcesoProductoSalida->save($procesoProductoSalida)) {
                $this->Flash->success(__('The proceso producto salida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso producto salida could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoProductoSalida->Proceso->find('list', ['limit' => 200]);
        $producto = $this->ProcesoProductoSalida->Producto->find('list', ['limit' => 200]);
        $this->set(compact('procesoProductoSalida', 'proceso', 'producto'));
        $this->set('_serialize', ['procesoProductoSalida']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso Producto Salida id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $procesoProductoSalida = $this->ProcesoProductoSalida->get($id);
        if ($this->ProcesoProductoSalida->delete($procesoProductoSalida)) {
            $this->Flash->success(__('The proceso producto salida has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso producto salida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
