<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Familias Controller
 *
 * @property \App\Model\Table\FamiliasTable $Familias
 *
 * @method \App\Model\Entity\Familia[] paginate($object = null, array $settings = [])
 */
class FamiliasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $familias = $this->paginate($this->Familias);

        $this->set(compact('familias'));
        $this->set('_serialize', ['familias']);
        $this->set('modelo', "familias");
    }

    /**
     * View method
     *
     * @param string|null $id Familia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $familia = $this->Familias->get($id, [
            'contain' => ['Material', 'Proceso', 'Producto']
        ]);
        $this->paginate =[
            'Material' => ['scope' => 'mis_Material']
            ,'Proceso' => ['scope' => 'mis_Proceso']
            ,'Producto' => ['scope' => 'mis_Producto']
        ];

        $this->loadModel('Material');
        $query=$this->Material->find('all')
                                        ->where(['familia_id' => $id]);
        $material=$this->paginate($query,['scope'=>'mis_Material']);
        $this->set(compact('material'));

        $this->loadModel('Proceso');
        $query=$this->Proceso->find('all')
                                        ->where(['familia_id' => $id]);
        $proceso=$this->paginate($query,['scope'=>'mis_Proceso']);
        $this->set(compact('proceso'));

        $this->loadModel('Producto');
        $query=$this->Producto->find('all')
                                        ->where(['familia_id' => $id]);
        $producto=$this->paginate($query,['scope'=>'mis_Producto']);
        $this->set(compact('producto'));

                                         
        $this->set('familia', $familia);
        $this->set('_serialize', ['familia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $familia = $this->Familias->newEntity();
        if($external_name!=null){
            $familia->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $familia = $this->Familias->patchEntity($familia, $this->request->getData());
            if ($this->Familias->save($familia)) {
                $this->Flash->success(__('The familia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The familia could not be saved. Please, try again.'));
        }
        $this->set(compact('familia'));
        $this->set('_serialize', ['familia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Familia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $familia = $this->Familias->get($id, [
            'contain' => ['Material', 'Proceso', 'Producto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $familia = $this->Familias->patchEntity($familia, $this->request->getData());
            if ($this->Familias->save($familia)) {
                $this->Flash->success(__('The familia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The familia could not be saved. Please, try again.'));
        }
        $this->set(compact('familia'));
        $this->set('_serialize', ['familia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Familia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $familia = $this->Familias->get($id);
        if ($this->Familias->delete($familia)) {
            $this->Flash->success(__('The familia has been deleted.'));
        } else {
            $this->Flash->error(__('The familia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
