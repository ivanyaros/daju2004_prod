<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Monedas Controller
 *
 * @property \App\Model\Table\MonedasTable $Monedas
 *
 * @method \App\Model\Entity\Moneda[] paginate($object = null, array $settings = [])
 */
class MonedasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $monedas = $this->paginate($this->Monedas);

        $this->set(compact('monedas'));
        $this->set('_serialize', ['monedas']);
        $this->set('modelo', "monedas");
    }

    /**
     * View method
     *
     * @param string|null $id Moneda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $moneda = $this->Monedas->get($id, [
            'contain' => ['Material', 'Proceso', 'Producto']
        ]);
        $this->paginate =[
            'Material' => ['scope' => 'mis_Material']
            ,'Proceso' => ['scope' => 'mis_Proceso']
            ,'Producto' => ['scope' => 'mis_Producto']
        ];

        $this->loadModel('Material');
        $query=$this->Material->find('all')
                                        ->where(['moneda_id' => $id])
                                        ->contain(['Familias', 'Monedas', 'Ivas']);

        $material=$this->paginate($query,['scope'=>'mis_Material']);
        $this->set(compact('material'));

        $this->loadModel('Proceso');
        $query=$this->Proceso->find('all')
                                        ->where(['moneda_id' => $id])
                                        ->contain(['Familias', 'Monedas', 'Ivas', 'Centros']);

        $proceso=$this->paginate($query,['scope'=>'mis_Proceso']);
        $this->set(compact('proceso'));

        $this->loadModel('Producto');
        $query=$this->Producto->find('all')
                                        ->where(['moneda_id' => $id])
                                        ->contain(['Familias', 'Monedas', 'Ivas']);

        $producto=$this->paginate($query,['scope'=>'mis_Producto']);
        $this->set(compact('producto'));

                                         
        $this->set('moneda', $moneda);
        $this->set('_serialize', ['moneda']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $moneda = $this->Monedas->newEntity();
        if($external_name!=null){
            $moneda->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $moneda = $this->Monedas->patchEntity($moneda, $this->request->getData());
            if ($this->Monedas->save($moneda)) {
                $this->Flash->success(__('The moneda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moneda could not be saved. Please, try again.'));
        }
        $this->set(compact('moneda'));
        $this->set('_serialize', ['moneda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Moneda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $moneda = $this->Monedas->get($id, [
            'contain' => ['Material', 'Proceso', 'Producto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moneda = $this->Monedas->patchEntity($moneda, $this->request->getData());
            if ($this->Monedas->save($moneda)) {
                $this->Flash->success(__('The moneda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The moneda could not be saved. Please, try again.'));
        }
        $this->set(compact('moneda'));
        $this->set('_serialize', ['moneda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Moneda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $moneda = $this->Monedas->get($id);
        if ($this->Monedas->delete($moneda)) {
            $this->Flash->success(__('The moneda has been deleted.'));
        } else {
            $this->Flash->error(__('The moneda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
