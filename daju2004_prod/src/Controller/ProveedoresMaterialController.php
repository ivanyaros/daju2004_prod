<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProveedoresMaterial Controller
 *
 * @property \App\Model\Table\ProveedoresMaterialTable $ProveedoresMaterial
 *
 * @method \App\Model\Entity\ProveedoresMaterial[] paginate($object = null, array $settings = [])
 */
class ProveedoresMaterialController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes', 'Material']
        ];
        $proveedoresMaterial = $this->paginate($this->ProveedoresMaterial);

        $this->set(compact('proveedoresMaterial'));
        $this->set('_serialize', ['proveedoresMaterial']);
    }

    /**
     * View method
     *
     * @param string|null $id Proveedores Material id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedoresMaterial = $this->ProveedoresMaterial->get($id, [
            'contain' => ['ProveedoresClientes', 'Material']
        ]);

        $this->set('proveedoresMaterial', $proveedoresMaterial);
        $this->set('_serialize', ['proveedoresMaterial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $proveedoresMaterial = $this->ProveedoresMaterial->newEntity();
        if($external_name!=null){
            $proveedoresMaterial->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $proveedoresMaterial = $this->ProveedoresMaterial->patchEntity($proveedoresMaterial, $this->request->getData());
            if ($this->ProveedoresMaterial->save($proveedoresMaterial)) {
                $this->Flash->success(__('The proveedores material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores material could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->ProveedoresMaterial->ProveedoresClientes->find('list', ['limit' => 200]);
        $material = $this->ProveedoresMaterial->Material->find('list', ['limit' => 200]);
        $this->set(compact('proveedoresMaterial', 'proveedoresClientes', 'material'));
        $this->set('_serialize', ['proveedoresMaterial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedores Material id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedoresMaterial = $this->ProveedoresMaterial->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedoresMaterial = $this->ProveedoresMaterial->patchEntity($proveedoresMaterial, $this->request->getData());
            if ($this->ProveedoresMaterial->save($proveedoresMaterial)) {
                $this->Flash->success(__('The proveedores material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores material could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->ProveedoresMaterial->ProveedoresClientes->find('list', ['limit' => 200]);
        $material = $this->ProveedoresMaterial->Material->find('list', ['limit' => 200]);
        $this->set(compact('proveedoresMaterial', 'proveedoresClientes', 'material'));
        $this->set('_serialize', ['proveedoresMaterial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedores Material id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedoresMaterial = $this->ProveedoresMaterial->get($id);
        if ($this->ProveedoresMaterial->delete($proveedoresMaterial)) {
            $this->Flash->success(__('The proveedores material has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedores material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
