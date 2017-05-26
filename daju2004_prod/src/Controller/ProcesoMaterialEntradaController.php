<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProcesoMaterialEntrada Controller
 *
 * @property \App\Model\Table\ProcesoMaterialEntradaTable $ProcesoMaterialEntrada
 *
 * @method \App\Model\Entity\ProcesoMaterialEntrada[] paginate($object = null, array $settings = [])
 */
class ProcesoMaterialEntradaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proceso', 'Material']
        ];
        $procesoMaterialEntrada = $this->paginate($this->ProcesoMaterialEntrada);

        $this->set(compact('procesoMaterialEntrada'));
        $this->set('_serialize', ['procesoMaterialEntrada']);
    }

    /**
     * View method
     *
     * @param string|null $id Proceso Material Entrada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $procesoMaterialEntrada = $this->ProcesoMaterialEntrada->get($id, [
            'contain' => ['Proceso', 'Material']
        ]);

        $this->set('procesoMaterialEntrada', $procesoMaterialEntrada);
        $this->set('_serialize', ['procesoMaterialEntrada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null)
    {
        $procesoMaterialEntrada = $this->ProcesoMaterialEntrada->newEntity();
        if ($this->request->is('post')) {
            $procesoMaterialEntrada = $this->ProcesoMaterialEntrada->patchEntity($procesoMaterialEntrada, $this->request->getData());
            if ($this->ProcesoMaterialEntrada->save($procesoMaterialEntrada)) {
                $this->Flash->success(__('The proceso material entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso material entrada could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoMaterialEntrada->Proceso->find('list', ['limit' => 200]);
        $material = $this->ProcesoMaterialEntrada->Material->find('list', ['limit' => 200]);
        $this->set(compact('procesoMaterialEntrada', 'proceso', 'material'));
        $this->set('_serialize', ['procesoMaterialEntrada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso Material Entrada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $procesoMaterialEntrada = $this->ProcesoMaterialEntrada->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $procesoMaterialEntrada = $this->ProcesoMaterialEntrada->patchEntity($procesoMaterialEntrada, $this->request->getData());
            if ($this->ProcesoMaterialEntrada->save($procesoMaterialEntrada)) {
                $this->Flash->success(__('The proceso material entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso material entrada could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoMaterialEntrada->Proceso->find('list', ['limit' => 200]);
        $material = $this->ProcesoMaterialEntrada->Material->find('list', ['limit' => 200]);
        $this->set(compact('procesoMaterialEntrada', 'proceso', 'material'));
        $this->set('_serialize', ['procesoMaterialEntrada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso Material Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $procesoMaterialEntrada = $this->ProcesoMaterialEntrada->get($id);
        if ($this->ProcesoMaterialEntrada->delete($procesoMaterialEntrada)) {
            $this->Flash->success(__('The proceso material entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso material entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
