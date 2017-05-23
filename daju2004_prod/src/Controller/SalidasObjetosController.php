<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalidasObjetos Controller
 *
 * @property \App\Model\Table\SalidasObjetosTable $SalidasObjetos
 *
 * @method \App\Model\Entity\SalidasObjeto[] paginate($object = null, array $settings = [])
 */
class SalidasObjetosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros']
        ];
        $salidasObjetos = $this->paginate($this->SalidasObjetos);

        $this->set(compact('salidasObjetos'));
        $this->set('_serialize', ['salidasObjetos']);
    }

    /**
     * View method
     *
     * @param string|null $id Salidas Objeto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salidasObjeto = $this->SalidasObjetos->get($id, [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros']
        ]);

        $this->set('salidasObjeto', $salidasObjeto);
        $this->set('_serialize', ['salidasObjeto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salidasObjeto = $this->SalidasObjetos->newEntity();
        if ($this->request->is('post')) {
            $salidasObjeto = $this->SalidasObjetos->patchEntity($salidasObjeto, $this->request->getData());
            if ($this->SalidasObjetos->save($salidasObjeto)) {
                $this->Flash->success(__('The salidas objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salidas objeto could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->SalidasObjetos->ProveedoresClientes->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->SalidasObjetos->PedidosEmpresas->find('list', ['limit' => 200]);
        $centros = $this->SalidasObjetos->Centros->find('list', ['limit' => 200]);
        $this->set(compact('salidasObjeto', 'proveedoresClientes', 'pedidosEmpresas', 'centros'));
        $this->set('_serialize', ['salidasObjeto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Salidas Objeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salidasObjeto = $this->SalidasObjetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salidasObjeto = $this->SalidasObjetos->patchEntity($salidasObjeto, $this->request->getData());
            if ($this->SalidasObjetos->save($salidasObjeto)) {
                $this->Flash->success(__('The salidas objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salidas objeto could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->SalidasObjetos->ProveedoresClientes->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->SalidasObjetos->PedidosEmpresas->find('list', ['limit' => 200]);
        $centros = $this->SalidasObjetos->Centros->find('list', ['limit' => 200]);
        $this->set(compact('salidasObjeto', 'proveedoresClientes', 'pedidosEmpresas', 'centros'));
        $this->set('_serialize', ['salidasObjeto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Salidas Objeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salidasObjeto = $this->SalidasObjetos->get($id);
        if ($this->SalidasObjetos->delete($salidasObjeto)) {
            $this->Flash->success(__('The salidas objeto has been deleted.'));
        } else {
            $this->Flash->error(__('The salidas objeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
