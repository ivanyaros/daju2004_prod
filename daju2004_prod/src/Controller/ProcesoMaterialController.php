<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProcesoMaterial Controller
 *
 * @property \App\Model\Table\ProcesoMaterialTable $ProcesoMaterial
 *
 * @method \App\Model\Entity\ProcesoMaterial[] paginate($object = null, array $settings = [])
 */
class ProcesoMaterialController extends AppController
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
        $procesoMaterial = $this->paginate($this->ProcesoMaterial);

        $this->set(compact('procesoMaterial'));
        $this->set('_serialize', ['procesoMaterial']);
    }

    /**
     * View method
     *
     * @param string|null $id Proceso Material id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $procesoMaterial = $this->ProcesoMaterial->get($id, [
            'contain' => ['Proceso', 'Material']
        ]);

        $this->set('procesoMaterial', $procesoMaterial);
        $this->set('_serialize', ['procesoMaterial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $procesoMaterial = $this->ProcesoMaterial->newEntity();
        if ($this->request->is('post')) {
            $procesoMaterial = $this->ProcesoMaterial->patchEntity($procesoMaterial, $this->request->getData());
            if ($this->ProcesoMaterial->save($procesoMaterial)) {
                $this->Flash->success(__('The proceso material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso material could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoMaterial->Proceso->find('list', ['limit' => 200]);
        $material = $this->ProcesoMaterial->Material->find('list', ['limit' => 200]);
        $this->set(compact('procesoMaterial', 'proceso', 'material'));
        $this->set('_serialize', ['procesoMaterial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso Material id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $procesoMaterial = $this->ProcesoMaterial->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $procesoMaterial = $this->ProcesoMaterial->patchEntity($procesoMaterial, $this->request->getData());
            if ($this->ProcesoMaterial->save($procesoMaterial)) {
                $this->Flash->success(__('The proceso material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso material could not be saved. Please, try again.'));
        }
        $proceso = $this->ProcesoMaterial->Proceso->find('list', ['limit' => 200]);
        $material = $this->ProcesoMaterial->Material->find('list', ['limit' => 200]);
        $this->set(compact('procesoMaterial', 'proceso', 'material'));
        $this->set('_serialize', ['procesoMaterial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso Material id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $procesoMaterial = $this->ProcesoMaterial->get($id);
        if ($this->ProcesoMaterial->delete($procesoMaterial)) {
            $this->Flash->success(__('The proceso material has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
