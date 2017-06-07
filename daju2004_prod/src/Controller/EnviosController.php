<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Envios Controller
 *
 * @property \App\Model\Table\EnviosTable $Envios
 *
 * @method \App\Model\Entity\Envio[] paginate($object = null, array $settings = [])
 */
class EnviosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Direcciones']
        ];
        $envios = $this->paginate($this->Envios);

        $this->set(compact('envios'));
        $this->set('_serialize', ['envios']);
        $this->set('modelo', "envios");
    }

    /**
     * View method
     *
     * @param string|null $id Envio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $envio = $this->Envios->get($id, [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Direcciones', 'Objetos']
        ]);
        $this->paginate =[
            'ProveedoresClientes' => ['scope' => 'mis_ProveedoresClientes']
            ,'PedidosEmpresas' => ['scope' => 'mis_PedidosEmpresas']
            ,'Centros' => ['scope' => 'mis_Centros']
            ,'Direcciones' => ['scope' => 'mis_Direcciones']
            ,'Objetos' => ['scope' => 'mis_Objetos']
        ];

        $this->loadModel('ProveedoresClientes');
        $query=$this->ProveedoresClientes->find('all')
                                        ->where(['envio_id' => $id]);
        $proveedoresClientes=$this->paginate($query,['scope'=>'mis_ProveedoresClientes']);
        $this->set(compact('proveedoresClientes'));

        $this->loadModel('PedidosEmpresas');
        $query=$this->PedidosEmpresas->find('all')
                                        ->where(['envio_id' => $id]);
        $pedidosEmpresas=$this->paginate($query,['scope'=>'mis_PedidosEmpresas']);
        $this->set(compact('pedidosEmpresas'));

        $this->loadModel('Centros');
        $query=$this->Centros->find('all')
                                        ->where(['envio_id' => $id]);
        $centros=$this->paginate($query,['scope'=>'mis_Centros']);
        $this->set(compact('centros'));

        $this->loadModel('Direcciones');
        $query=$this->Direcciones->find('all')
                                        ->where(['envio_id' => $id]);
        $direcciones=$this->paginate($query,['scope'=>'mis_Direcciones']);
        $this->set(compact('direcciones'));

        $this->loadModel('Objetos');
        $query=$this->Objetos->find('all')
                                        ->where(['envio_id' => $id]);
        $objetos=$this->paginate($query,['scope'=>'mis_Objetos']);
        $this->set(compact('objetos'));

                                         
        $this->set('envio', $envio);
        $this->set('_serialize', ['envio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $envio = $this->Envios->newEntity();
        if($external_name!=null){
            $envio->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $envio = $this->Envios->patchEntity($envio, $this->request->getData());
            if ($this->Envios->save($envio)) {
                $this->Flash->success(__('The envio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envio could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->Envios->ProveedoresClientes->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->Envios->PedidosEmpresas->find('list', ['limit' => 200]);
        $centros = $this->Envios->Centros->find('list', ['limit' => 200]);
        $direcciones = $this->Envios->Direcciones->find('list', ['limit' => 200]);
        $objetos = $this->Envios->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('envio', 'proveedoresClientes', 'pedidosEmpresas', 'centros', 'direcciones', 'objetos'));
        $this->set('_serialize', ['envio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Envio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $envio = $this->Envios->get($id, [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Direcciones', 'Objetos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $envio = $this->Envios->patchEntity($envio, $this->request->getData());
            if ($this->Envios->save($envio)) {
                $this->Flash->success(__('The envio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envio could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->Envios->ProveedoresClientes->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->Envios->PedidosEmpresas->find('list', ['limit' => 200]);
        $centros = $this->Envios->Centros->find('list', ['limit' => 200]);
        $direcciones = $this->Envios->Direcciones->find('list', ['limit' => 200]);
        $objetos = $this->Envios->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('envio', 'proveedoresClientes', 'pedidosEmpresas', 'centros', 'direcciones', 'objetos'));
        $this->set('_serialize', ['envio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Envio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $envio = $this->Envios->get($id);
        if ($this->Envios->delete($envio)) {
            $this->Flash->success(__('The envio has been deleted.'));
        } else {
            $this->Flash->error(__('The envio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
