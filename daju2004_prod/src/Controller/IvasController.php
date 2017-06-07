<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ivas Controller
 *
 * @property \App\Model\Table\IvasTable $Ivas
 *
 * @method \App\Model\Entity\Iva[] paginate($object = null, array $settings = [])
 */
class IvasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ivas = $this->paginate($this->Ivas);

        $this->set(compact('ivas'));
        $this->set('_serialize', ['ivas']);
        $this->set('modelo', "ivas");
    }

    /**
     * View method
     *
     * @param string|null $id Iva id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iva = $this->Ivas->get($id, [
            'contain' => ['Material', 'Proceso', 'Producto']
        ]);
        $this->paginate =[
            'Material' => ['scope' => 'mis_Material']
            ,'Proceso' => ['scope' => 'mis_Proceso']
            ,'Producto' => ['scope' => 'mis_Producto']
        ];

        $this->loadModel('Material');
        $query=$this->Material->find('all')
                                        ->where(['iva_id' => $id]);
        $material=$this->paginate($query,['scope'=>'mis_Material']);
        $this->set(compact('material'));

        $this->loadModel('Proceso');
        $query=$this->Proceso->find('all')
                                        ->where(['iva_id' => $id]);
        $proceso=$this->paginate($query,['scope'=>'mis_Proceso']);
        $this->set(compact('proceso'));

        $this->loadModel('Producto');
        $query=$this->Producto->find('all')
                                        ->where(['iva_id' => $id]);
        $producto=$this->paginate($query,['scope'=>'mis_Producto']);
        $this->set(compact('producto'));

                                         
        $this->set('iva', $iva);
        $this->set('_serialize', ['iva']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $iva = $this->Ivas->newEntity();
        if($external_name!=null){
            $iva->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $iva = $this->Ivas->patchEntity($iva, $this->request->getData());
            if ($this->Ivas->save($iva)) {
                $this->Flash->success(__('The iva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The iva could not be saved. Please, try again.'));
        }
        $this->set(compact('iva'));
        $this->set('_serialize', ['iva']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Iva id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iva = $this->Ivas->get($id, [
            'contain' => ['Material', 'Proceso', 'Producto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iva = $this->Ivas->patchEntity($iva, $this->request->getData());
            if ($this->Ivas->save($iva)) {
                $this->Flash->success(__('The iva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The iva could not be saved. Please, try again.'));
        }
        $this->set(compact('iva'));
        $this->set('_serialize', ['iva']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Iva id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iva = $this->Ivas->get($id);
        if ($this->Ivas->delete($iva)) {
            $this->Flash->success(__('The iva has been deleted.'));
        } else {
            $this->Flash->error(__('The iva could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
