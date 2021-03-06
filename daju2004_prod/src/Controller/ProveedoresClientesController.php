<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProveedoresClientes Controller
 *
 * @property \App\Model\Table\ProveedoresClientesTable $ProveedoresClientes
 *
 * @method \App\Model\Entity\ProveedoresCliente[] paginate($object = null, array $settings = [])
 */
class ProveedoresClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $proveedoresClientes = $this->paginate($this->ProveedoresClientes);

        $this->set(compact('proveedoresClientes'));
        $this->set('_serialize', ['proveedoresClientes']);
        $this->set('modelo', "proveedoresClientes");
    }

    /**
     * View method
     *
     * @param string|null $id Proveedores Cliente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedoresCliente = $this->ProveedoresClientes->get($id, [
            'contain' => ['Direcciones', 'EntradasDeMateriales', 'Envios', 'PedidosEmpresas', 'ProveedoresMaterial']
        ]);
        $this->paginate =[
            'Direcciones' => ['scope' => 'mis_Direcciones']
            ,'EntradasDeMateriales' => ['scope' => 'mis_EntradasDeMateriales']
            ,'Envios' => ['scope' => 'mis_Envios']
            ,'PedidosEmpresas' => ['scope' => 'mis_PedidosEmpresas']
            ,'ProveedoresMaterial' => ['scope' => 'mis_ProveedoresMaterial']
        ];

        $this->loadModel('Direcciones');
        $query=$this->Direcciones->find('all')
                                        ->where(['Direcciones.proveedores_cliente_id' => $id])
                                        ->contain(['ProveedoresClientes']);

        $direcciones=$this->paginate($query,['scope'=>'mis_Direcciones']);
        $this->set(compact('direcciones'));

        $this->loadModel('EntradasDeMateriales');
        $query=$this->EntradasDeMateriales->find('all')
                                        ->where(['EntradasDeMateriales.proveedores_cliente_id' => $id])
                                        ->contain(['ProveedoresClientes', 'Centros']);

        $entradasDeMateriales=$this->paginate($query,['scope'=>'mis_EntradasDeMateriales']);
        $this->set(compact('entradasDeMateriales'));

        $this->loadModel('Envios');
        $query=$this->Envios->find('all')
                                        ->where(['Envios.proveedores_cliente_id' => $id])
                                        ->contain(['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Direcciones']);

        $envios=$this->paginate($query,['scope'=>'mis_Envios']);
        $this->set(compact('envios'));

        $this->loadModel('PedidosEmpresas');
        $query=$this->PedidosEmpresas->find('all')
                                        ->where(['PedidosEmpresas.proveedores_cliente_id' => $id])
                                        ->contain(['ProveedoresClientes']);

        $pedidosEmpresas=$this->paginate($query,['scope'=>'mis_PedidosEmpresas']);
        $this->set(compact('pedidosEmpresas'));

        $this->loadModel('ProveedoresMaterial');
        $query=$this->ProveedoresMaterial->find('all')
                                        ->where(['ProveedoresMaterial.proveedores_cliente_id' => $id])
                                        ->contain(['ProveedoresClientes', 'Material']);

        $proveedoresMaterial=$this->paginate($query,['scope'=>'mis_ProveedoresMaterial']);
        $this->set(compact('proveedoresMaterial'));

                                         
        $this->set('proveedoresCliente', $proveedoresCliente);
        $this->set('_serialize', ['proveedoresCliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $proveedoresCliente = $this->ProveedoresClientes->newEntity();
        if($external_name!=null){
            $proveedoresCliente->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $proveedoresCliente = $this->ProveedoresClientes->patchEntity($proveedoresCliente, $this->request->getData());
            if ($this->ProveedoresClientes->save($proveedoresCliente)) {
                $this->Flash->success(__('The proveedores cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedoresCliente'));
        $this->set('_serialize', ['proveedoresCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedores Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedoresCliente = $this->ProveedoresClientes->get($id, [
            'contain' => ['Direcciones', 'EntradasDeMateriales', 'Envios', 'PedidosEmpresas', 'ProveedoresMaterial']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedoresCliente = $this->ProveedoresClientes->patchEntity($proveedoresCliente, $this->request->getData());
            if ($this->ProveedoresClientes->save($proveedoresCliente)) {
                $this->Flash->success(__('The proveedores cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proveedores cliente could not be saved. Please, try again.'));
        }
        $this->set(compact('proveedoresCliente'));
        $this->set('_serialize', ['proveedoresCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedores Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedoresCliente = $this->ProveedoresClientes->get($id);
        if ($this->ProveedoresClientes->delete($proveedoresCliente)) {
            $this->Flash->success(__('The proveedores cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The proveedores cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
