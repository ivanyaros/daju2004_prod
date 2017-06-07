<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proceso Controller
 *
 * @property \App\Model\Table\ProcesoTable $Proceso
 *
 * @method \App\Model\Entity\Proceso[] paginate($object = null, array $settings = [])
 */
class ProcesoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Centros']
        ];
        $proceso = $this->paginate($this->Proceso);

        $this->set(compact('proceso'));
        $this->set('_serialize', ['proceso']);
        $this->set('modelo', "proceso");
    }

    /**
     * View method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proceso = $this->Proceso->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Centros', 'Ordens', 'ProcesoMaterialEntrada', 'ProcesoProductoEntrada', 'ProcesoProductoSalida']
        ]);
        $this->paginate =[
            'Ordens' => ['scope' => 'mis_Ordens']
            ,'ProcesoMaterialEntrada' => ['scope' => 'mis_ProcesoMaterialEntrada']
            ,'ProcesoProductoEntrada' => ['scope' => 'mis_ProcesoProductoEntrada']
            ,'ProcesoProductoSalida' => ['scope' => 'mis_ProcesoProductoSalida']
        ];

        $this->loadModel('Ordens');
        $query=$this->Ordens->find('all')
                                        ->where(['proceso_id' => $id]);
        $ordens=$this->paginate($query,['scope'=>'mis_Ordens']);
        $this->set(compact('ordens'));

        $this->loadModel('ProcesoMaterialEntrada');
        $query=$this->ProcesoMaterialEntrada->find('all')
                                        ->where(['proceso_id' => $id]);
        $procesoMaterialEntrada=$this->paginate($query,['scope'=>'mis_ProcesoMaterialEntrada']);
        $this->set(compact('procesoMaterialEntrada'));

        $this->loadModel('ProcesoProductoEntrada');
        $query=$this->ProcesoProductoEntrada->find('all')
                                        ->where(['proceso_id' => $id]);
        $procesoProductoEntrada=$this->paginate($query,['scope'=>'mis_ProcesoProductoEntrada']);
        $this->set(compact('procesoProductoEntrada'));

        $this->loadModel('ProcesoProductoSalida');
        $query=$this->ProcesoProductoSalida->find('all')
                                        ->where(['proceso_id' => $id]);
        $procesoProductoSalida=$this->paginate($query,['scope'=>'mis_ProcesoProductoSalida']);
        $this->set(compact('procesoProductoSalida'));

                                         
        $this->set('proceso', $proceso);
        $this->set('_serialize', ['proceso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $proceso = $this->Proceso->newEntity();
        if($external_name!=null){
            $proceso->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $proceso = $this->Proceso->patchEntity($proceso, $this->request->getData());
            if ($this->Proceso->save($proceso)) {
                $this->Flash->success(__('The proceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso could not be saved. Please, try again.'));
        }
        $familias = $this->Proceso->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Proceso->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Proceso->Ivas->find('list', ['limit' => 200]);
        $centros = $this->Proceso->Centros->find('list', ['limit' => 200]);
        $this->set(compact('proceso', 'familias', 'monedas', 'ivas', 'centros'));
        $this->set('_serialize', ['proceso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proceso = $this->Proceso->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Centros', 'Ordens', 'ProcesoMaterialEntrada', 'ProcesoProductoEntrada', 'ProcesoProductoSalida']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proceso = $this->Proceso->patchEntity($proceso, $this->request->getData());
            if ($this->Proceso->save($proceso)) {
                $this->Flash->success(__('The proceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso could not be saved. Please, try again.'));
        }
        $familias = $this->Proceso->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Proceso->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Proceso->Ivas->find('list', ['limit' => 200]);
        $centros = $this->Proceso->Centros->find('list', ['limit' => 200]);
        $this->set(compact('proceso', 'familias', 'monedas', 'ivas', 'centros'));
        $this->set('_serialize', ['proceso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proceso = $this->Proceso->get($id);
        if ($this->Proceso->delete($proceso)) {
            $this->Flash->success(__('The proceso has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
