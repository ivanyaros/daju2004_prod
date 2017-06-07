<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProcesoProductoEntrada Controller
 *
 * @property \App\Model\Table\ProcesoProductoEntradaTable $ProcesoProductoEntrada
 *
 * @method \App\Model\Entity\ProcesoProductoEntrada[] paginate($object = null, array $settings = [])
 */
class ProcesoProductoEntradaController extends AppController
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
        $procesoProductoEntrada = $this->paginate($this->ProcesoProductoEntrada);

        $this->set(compact('procesoProductoEntrada'));
        $this->set('_serialize', ['procesoProductoEntrada']);
        $this->set('modelo', "procesoProductoEntrada");
    }

    /**
     * View method
     *
     * @param string|null $id Proceso Producto Entrada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $procesoProductoEntrada = $this->ProcesoProductoEntrada->get($id, [
            'contain' => ['Proceso', 'Producto']
        ]);

                                         
        $this->set('procesoProductoEntrada', $procesoProductoEntrada);
        $this->set('_serialize', ['procesoProductoEntrada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $procesoProductoEntrada = $this->ProcesoProductoEntrada->newEntity();
        if($external_name!=null){
            $procesoProductoEntrada->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $procesoProductoEntrada = $this->ProcesoProductoEntrada->patchEntity($procesoProductoEntrada, $this->request->getData());
            if ($this->ProcesoProductoEntrada->save($procesoProductoEntrada)) {
                $this->Flash->success(__('The proceso producto entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso producto entrada could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoProductoEntrada->Proceso->find('list', ['limit' => 200]);
        $producto = $this->ProcesoProductoEntrada->Producto->find('list', ['limit' => 200]);
        $this->set(compact('procesoProductoEntrada', 'proceso', 'producto'));
        $this->set('_serialize', ['procesoProductoEntrada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso Producto Entrada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $procesoProductoEntrada = $this->ProcesoProductoEntrada->get($id, [
            'contain' => ['Proceso', 'Producto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $procesoProductoEntrada = $this->ProcesoProductoEntrada->patchEntity($procesoProductoEntrada, $this->request->getData());
            if ($this->ProcesoProductoEntrada->save($procesoProductoEntrada)) {
                $this->Flash->success(__('The proceso producto entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso producto entrada could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoProductoEntrada->Proceso->find('list', ['limit' => 200]);
        $producto = $this->ProcesoProductoEntrada->Producto->find('list', ['limit' => 200]);
        $this->set(compact('procesoProductoEntrada', 'proceso', 'producto'));
        $this->set('_serialize', ['procesoProductoEntrada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso Producto Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $procesoProductoEntrada = $this->ProcesoProductoEntrada->get($id);
        if ($this->ProcesoProductoEntrada->delete($procesoProductoEntrada)) {
            $this->Flash->success(__('The proceso producto entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso producto entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
