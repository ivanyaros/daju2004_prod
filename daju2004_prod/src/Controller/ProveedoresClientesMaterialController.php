<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProveedoresClientesMaterial Controller
 *
 * @property \App\Model\Table\ProveedoresClientesMaterialTable $ProveedoresClientesMaterial
 *
 * @method \App\Model\Entity\ProveedoresClientesMaterial[] paginate($object = null, array $settings = [])
 */
class ProveedoresClientesMaterialController extends AppController
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
        $proveedoresClientesMaterial = $this->paginate($this->ProveedoresClientesMaterial);

        $this->set(compact('proveedoresClientesMaterial'));
        $this->set('_serialize', ['proveedoresClientesMaterial']);
    }

    /**
     * View method
     *
     * @param string|null $id Proveedores Clientes Material id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedoresClientesMaterial = $this->ProveedoresClientesMaterial->get($id, [
            'contain' => ['ProveedoresClientes', 'Material']
        ]);

        $this->set('proveedoresClientesMaterial', $proveedoresClientesMaterial);
        $this->set('_serialize', ['proveedoresClientesMaterial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedoresClientesMaterial = $this->ProveedoresClientesMaterial->newEntity();
        if ($this->request->is('post')) {
            $proveedoresClientesMaterial = $this->ProveedoresClientesMaterial->patchEntity($proveedoresClientesMaterial, $this->request->getData());
            if ($this->ProveedoresClientesMaterial->save($proveedoresClientesMaterial)) {
                $this->Flash->success(__('The proveedores clientes material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores clientes material could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->ProveedoresClientesMaterial->ProveedoresClientes->find('list', ['limit' => 200]);
        $material = $this->ProveedoresClientesMaterial->Material->find('list', ['limit' => 200]);
        $this->set(compact('proveedoresClientesMaterial', 'proveedoresClientes', 'material'));
        $this->set('_serialize', ['proveedoresClientesMaterial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedores Clientes Material id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedoresClientesMaterial = $this->ProveedoresClientesMaterial->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedoresClientesMaterial = $this->ProveedoresClientesMaterial->patchEntity($proveedoresClientesMaterial, $this->request->getData());
            if ($this->ProveedoresClientesMaterial->save($proveedoresClientesMaterial)) {
                $this->Flash->success(__('The proveedores clientes material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores clientes material could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->ProveedoresClientesMaterial->ProveedoresClientes->find('list', ['limit' => 200]);
        $material = $this->ProveedoresClientesMaterial->Material->find('list', ['limit' => 200]);
        $this->set(compact('proveedoresClientesMaterial', 'proveedoresClientes', 'material'));
        $this->set('_serialize', ['proveedoresClientesMaterial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedores Clientes Material id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedoresClientesMaterial = $this->ProveedoresClientesMaterial->get($id);
        if ($this->ProveedoresClientesMaterial->delete($proveedoresClientesMaterial)) {
            $this->Flash->success(__('The proveedores clientes material has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedores clientes material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
