<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Direcciones Controller
 *
 * @property \App\Model\Table\DireccionesTable $Direcciones
 *
 * @method \App\Model\Entity\Direccione[] paginate($object = null, array $settings = [])
 */
class DireccionesController extends AppController
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
        $direcciones = $this->paginate($this->Direcciones);

        $this->set(compact('direcciones'));
        $this->set('_serialize', ['direcciones']);
        $this->set('modelo', "direcciones");
    }

    /**
     * View method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direccione = $this->Direcciones->get($id, [
            'contain' => ['ProveedoresClientes', 'Envios']
        ]);
        $this->paginate =[
            'Envios' => ['scope' => 'mis_Envios']
        ];

        $this->loadModel('Envios');
        $query=$this->Envios->find('all')
                                        ->where(['direccione_id' => $id])
                                        ->contain(['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Direcciones']);

        $envios=$this->paginate($query,['scope'=>'mis_Envios']);
        $this->set(compact('envios'));

                                         
        $this->set('direccione', $direccione);
        $this->set('_serialize', ['direccione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $direccione = $this->Direcciones->newEntity();
        if($external_name!=null){
            $direccione->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $direccione = $this->Direcciones->patchEntity($direccione, $this->request->getData());
            if ($this->Direcciones->save($direccione)) {
                $this->Flash->success(__('The direccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccione could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->Direcciones->ProveedoresClientes->find('list', ['limit' => 200]);
        $this->set(compact('direccione', 'proveedoresClientes'));
        $this->set('_serialize', ['direccione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direccione = $this->Direcciones->get($id, [
            'contain' => ['ProveedoresClientes', 'Envios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direccione = $this->Direcciones->patchEntity($direccione, $this->request->getData());
            if ($this->Direcciones->save($direccione)) {
                $this->Flash->success(__('The direccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccione could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->Direcciones->ProveedoresClientes->find('list', ['limit' => 200]);
        $this->set(compact('direccione', 'proveedoresClientes'));
        $this->set('_serialize', ['direccione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direccione = $this->Direcciones->get($id);
        if ($this->Direcciones->delete($direccione)) {
            $this->Flash->success(__('The direccione has been deleted.'));
        } else {
            $this->Flash->error(__('The direccione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
