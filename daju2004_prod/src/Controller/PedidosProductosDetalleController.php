<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PedidosProductosDetalle Controller
 *
 * @property \App\Model\Table\PedidosProductosDetalleTable $PedidosProductosDetalle
 *
 * @method \App\Model\Entity\PedidosProductosDetalle[] paginate($object = null, array $settings = [])
 */
class PedidosProductosDetalleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PedidosEmpresas', 'Producto', 'Prioridades']
        ];
        $pedidosProductosDetalle = $this->paginate($this->PedidosProductosDetalle);

        $this->set(compact('pedidosProductosDetalle'));
        $this->set('_serialize', ['pedidosProductosDetalle']);
        $this->set('modelo', "pedidosProductosDetalle");
    }

    /**
     * View method
     *
     * @param string|null $id Pedidos Productos Detalle id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidosProductosDetalle = $this->PedidosProductosDetalle->get($id, [
            'contain' => ['PedidosEmpresas', 'Producto', 'Prioridades']
        ]);
        $this->paginate =[
            'PedidosEmpresas' => ['scope' => 'mis_PedidosEmpresas']
            ,'Producto' => ['scope' => 'mis_Producto']
            ,'Prioridades' => ['scope' => 'mis_Prioridades']
        ];

        $this->loadModel('PedidosEmpresas');
        $query=$this->PedidosEmpresas->find('all')
                                        ->where(['pedidosProductosDetalle_id' => $id]);
        $pedidosEmpresas=$this->paginate($query,['scope'=>'mis_PedidosEmpresas']);
        $this->set(compact('pedidosEmpresas'));

        $this->loadModel('Producto');
        $query=$this->Producto->find('all')
                                        ->where(['pedidosProductosDetalle_id' => $id]);
        $producto=$this->paginate($query,['scope'=>'mis_Producto']);
        $this->set(compact('producto'));

        $this->loadModel('Prioridades');
        $query=$this->Prioridades->find('all')
                                        ->where(['pedidosProductosDetalle_id' => $id]);
        $prioridades=$this->paginate($query,['scope'=>'mis_Prioridades']);
        $this->set(compact('prioridades'));

                                         
        $this->set('pedidosProductosDetalle', $pedidosProductosDetalle);
        $this->set('_serialize', ['pedidosProductosDetalle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $pedidosProductosDetalle = $this->PedidosProductosDetalle->newEntity();
        if($external_name!=null){
            $pedidosProductosDetalle->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $pedidosProductosDetalle = $this->PedidosProductosDetalle->patchEntity($pedidosProductosDetalle, $this->request->getData());
            if ($this->PedidosProductosDetalle->save($pedidosProductosDetalle)) {
                $this->Flash->success(__('The pedidos productos detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos productos detalle could not be saved. Please, try again.'));
        }
        $pedidosEmpresas = $this->PedidosProductosDetalle->PedidosEmpresas->find('list', ['limit' => 200]);
        $producto = $this->PedidosProductosDetalle->Producto->find('list', ['limit' => 200]);
        $prioridades = $this->PedidosProductosDetalle->Prioridades->find('list', ['limit' => 200]);
        $this->set(compact('pedidosProductosDetalle', 'pedidosEmpresas', 'producto', 'prioridades'));
        $this->set('_serialize', ['pedidosProductosDetalle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidos Productos Detalle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidosProductosDetalle = $this->PedidosProductosDetalle->get($id, [
            'contain' => ['PedidosEmpresas', 'Producto', 'Prioridades']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidosProductosDetalle = $this->PedidosProductosDetalle->patchEntity($pedidosProductosDetalle, $this->request->getData());
            if ($this->PedidosProductosDetalle->save($pedidosProductosDetalle)) {
                $this->Flash->success(__('The pedidos productos detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos productos detalle could not be saved. Please, try again.'));
        }
        $pedidosEmpresas = $this->PedidosProductosDetalle->PedidosEmpresas->find('list', ['limit' => 200]);
        $producto = $this->PedidosProductosDetalle->Producto->find('list', ['limit' => 200]);
        $prioridades = $this->PedidosProductosDetalle->Prioridades->find('list', ['limit' => 200]);
        $this->set(compact('pedidosProductosDetalle', 'pedidosEmpresas', 'producto', 'prioridades'));
        $this->set('_serialize', ['pedidosProductosDetalle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidos Productos Detalle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidosProductosDetalle = $this->PedidosProductosDetalle->get($id);
        if ($this->PedidosProductosDetalle->delete($pedidosProductosDetalle)) {
            $this->Flash->success(__('The pedidos productos detalle has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidos productos detalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
