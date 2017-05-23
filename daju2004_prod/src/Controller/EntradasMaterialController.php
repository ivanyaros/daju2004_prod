<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EntradasMaterial Controller
 *
 * @property \App\Model\Table\EntradasMaterialTable $EntradasMaterial
 *
 * @method \App\Model\Entity\EntradasMaterial[] paginate($object = null, array $settings = [])
 */
class EntradasMaterialController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes', 'Centros']
        ];
        $entradasMaterial = $this->paginate($this->EntradasMaterial);

        $this->set(compact('entradasMaterial'));
        $this->set('_serialize', ['entradasMaterial']);
    }

    /**
     * View method
     *
     * @param string|null $id Entradas Material id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entradasMaterial = $this->EntradasMaterial->get($id, [
            'contain' => ['ProveedoresClientes', 'Centros', 'Materiales']
        ]);

        $this->set('entradasMaterial', $entradasMaterial);
        $this->set('_serialize', ['entradasMaterial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entradasMaterial = $this->EntradasMaterial->newEntity();
        if ($this->request->is('post')) {
            $entradasMaterial = $this->EntradasMaterial->patchEntity($entradasMaterial, $this->request->getData());
            if ($this->EntradasMaterial->save($entradasMaterial)) {
                $this->Flash->success(__('The entradas material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entradas material could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->EntradasMaterial->ProveedoresClientes->find('list', ['limit' => 200]);
        $centros = $this->EntradasMaterial->Centros->find('list', ['limit' => 200]);
        $this->set(compact('entradasMaterial', 'proveedoresClientes', 'centros'));
        $this->set('_serialize', ['entradasMaterial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entradas Material id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entradasMaterial = $this->EntradasMaterial->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entradasMaterial = $this->EntradasMaterial->patchEntity($entradasMaterial, $this->request->getData());
            if ($this->EntradasMaterial->save($entradasMaterial)) {
                $this->Flash->success(__('The entradas material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entradas material could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->EntradasMaterial->ProveedoresClientes->find('list', ['limit' => 200]);
        $centros = $this->EntradasMaterial->Centros->find('list', ['limit' => 200]);
        $this->set(compact('entradasMaterial', 'proveedoresClientes', 'centros'));
        $this->set('_serialize', ['entradasMaterial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entradas Material id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entradasMaterial = $this->EntradasMaterial->get($id);
        if ($this->EntradasMaterial->delete($entradasMaterial)) {
            $this->Flash->success(__('The entradas material has been deleted.'));
        } else {
            $this->Flash->error(__('The entradas material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
