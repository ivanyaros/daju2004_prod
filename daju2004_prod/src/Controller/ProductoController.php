<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Producto Controller
 *
 * @property \App\Model\Table\ProductoTable $Producto
 *
 * @method \App\Model\Entity\Producto[] paginate($object = null, array $settings = [])
 */
class ProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Familias', 'Monedas', 'Ivas']
        ];
        $producto = $this->paginate($this->Producto);

        $this->set(compact('producto'));
        $this->set('_serialize', ['producto']);
        $this->set('modelo', "producto");
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Objetos', 'PedidosProductosDetalle', 'ProcesoProductoEntrada', 'ProcesoProductoSalida']
        ]);
        $this->paginate =[
            'Familias' => ['scope' => 'mis_Familias']
            ,'Monedas' => ['scope' => 'mis_Monedas']
            ,'Ivas' => ['scope' => 'mis_Ivas']
            ,'Objetos' => ['scope' => 'mis_Objetos']
            ,'PedidosProductosDetalle' => ['scope' => 'mis_PedidosProductosDetalle']
            ,'ProcesoProductoEntrada' => ['scope' => 'mis_ProcesoProductoEntrada']
            ,'ProcesoProductoSalida' => ['scope' => 'mis_ProcesoProductoSalida']
        ];

        $this->loadModel('Familias');
        $query=$this->Familias->find('all')
                                        ->where(['producto_id' => $id]);
        $familias=$this->paginate($query,['scope'=>'mis_Familias']);
        $this->set(compact('familias'));

        $this->loadModel('Monedas');
        $query=$this->Monedas->find('all')
                                        ->where(['producto_id' => $id]);
        $monedas=$this->paginate($query,['scope'=>'mis_Monedas']);
        $this->set(compact('monedas'));

        $this->loadModel('Ivas');
        $query=$this->Ivas->find('all')
                                        ->where(['producto_id' => $id]);
        $ivas=$this->paginate($query,['scope'=>'mis_Ivas']);
        $this->set(compact('ivas'));

        $this->loadModel('Objetos');
        $query=$this->Objetos->find('all')
                                        ->where(['producto_id' => $id]);
        $objetos=$this->paginate($query,['scope'=>'mis_Objetos']);
        $this->set(compact('objetos'));

        $this->loadModel('PedidosProductosDetalle');
        $query=$this->PedidosProductosDetalle->find('all')
                                        ->where(['producto_id' => $id]);
        $pedidosProductosDetalle=$this->paginate($query,['scope'=>'mis_PedidosProductosDetalle']);
        $this->set(compact('pedidosProductosDetalle'));

        $this->loadModel('ProcesoProductoEntrada');
        $query=$this->ProcesoProductoEntrada->find('all')
                                        ->where(['producto_id' => $id]);
        $procesoProductoEntrada=$this->paginate($query,['scope'=>'mis_ProcesoProductoEntrada']);
        $this->set(compact('procesoProductoEntrada'));

        $this->loadModel('ProcesoProductoSalida');
        $query=$this->ProcesoProductoSalida->find('all')
                                        ->where(['producto_id' => $id]);
        $procesoProductoSalida=$this->paginate($query,['scope'=>'mis_ProcesoProductoSalida']);
        $this->set(compact('procesoProductoSalida'));

                                         
        $this->set('producto', $producto);
        $this->set('_serialize', ['producto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $producto = $this->Producto->newEntity();
        if($external_name!=null){
            $producto->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto could not be saved. Please, try again.'));
        }
        $familias = $this->Producto->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Producto->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Producto->Ivas->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'familias', 'monedas', 'ivas'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Objetos', 'PedidosProductosDetalle', 'ProcesoProductoEntrada', 'ProcesoProductoSalida']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The producto could not be saved. Please, try again.'));
        }
        $familias = $this->Producto->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Producto->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Producto->Ivas->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'familias', 'monedas', 'ivas'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Producto->get($id);
        if ($this->Producto->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
