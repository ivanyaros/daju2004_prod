<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PedidosEmpresas Controller
 *
 * @property \App\Model\Table\PedidosEmpresasTable $PedidosEmpresas
 *
 * @method \App\Model\Entity\PedidosEmpresa[] paginate($object = null, array $settings = [])
 */
class PedidosEmpresasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes']
        ];
        $pedidosEmpresas = $this->paginate($this->PedidosEmpresas);

        $this->set(compact('pedidosEmpresas'));
        $this->set('_serialize', ['pedidosEmpresas']);
        $this->set('modelo', "pedidosEmpresas");
    }

    /**
     * View method
     *
     * @param string|null $id Pedidos Empresa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidosEmpresa = $this->PedidosEmpresas->get($id, [
            'contain' => ['ProveedoresClientes', 'Envios', 'PedidosProductosDetalle']
        ]);
        $this->paginate =[
            'Envios' => ['scope' => 'mis_Envios']
            ,'PedidosProductosDetalle' => ['scope' => 'mis_PedidosProductosDetalle']
        ];

        $this->loadModel('Envios');
        $query=$this->Envios->find('all')
                                        ->where(['pedidos_empresa_id' => $id])
                                        ->contain(['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Direcciones']);

        $envios=$this->paginate($query,['scope'=>'mis_Envios']);
        $this->set(compact('envios'));

        $this->loadModel('PedidosProductosDetalle');
        $query=$this->PedidosProductosDetalle->find('all')
                                        ->where(['pedidos_empresa_id' => $id])
                                        ->contain(['PedidosEmpresas', 'Producto', 'Prioridades']);

        $pedidosProductosDetalle=$this->paginate($query,['scope'=>'mis_PedidosProductosDetalle']);
        $this->set(compact('pedidosProductosDetalle'));

                                         
        $this->set('pedidosEmpresa', $pedidosEmpresa);
        $this->set('_serialize', ['pedidosEmpresa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $pedidosEmpresa = $this->PedidosEmpresas->newEntity();
        if($external_name!=null){
            $pedidosEmpresa->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $pedidosEmpresa = $this->PedidosEmpresas->patchEntity($pedidosEmpresa, $this->request->getData());
            if ($this->PedidosEmpresas->save($pedidosEmpresa)) {
                $this->Flash->success(__('The pedidos empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos empresa could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->PedidosEmpresas->ProveedoresClientes->find('list', ['limit' => 200]);
        $this->set(compact('pedidosEmpresa', 'proveedoresClientes'));
        $this->set('_serialize', ['pedidosEmpresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidos Empresa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidosEmpresa = $this->PedidosEmpresas->get($id, [
            'contain' => ['ProveedoresClientes', 'Envios', 'PedidosProductosDetalle']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidosEmpresa = $this->PedidosEmpresas->patchEntity($pedidosEmpresa, $this->request->getData());
            if ($this->PedidosEmpresas->save($pedidosEmpresa)) {
                $this->Flash->success(__('The pedidos empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos empresa could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->PedidosEmpresas->ProveedoresClientes->find('list', ['limit' => 200]);
        $this->set(compact('pedidosEmpresa', 'proveedoresClientes'));
        $this->set('_serialize', ['pedidosEmpresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidos Empresa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidosEmpresa = $this->PedidosEmpresas->get($id);
        if ($this->PedidosEmpresas->delete($pedidosEmpresa)) {
            $this->Flash->success(__('The pedidos empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidos empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
