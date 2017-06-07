<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ObjetosEntrada Controller
 *
 * @property \App\Model\Table\ObjetosEntradaTable $ObjetosEntrada
 *
 * @method \App\Model\Entity\ObjetosEntrada[] paginate($object = null, array $settings = [])
 */
class ObjetosEntradaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Objetos']
        ];
        $objetosEntrada = $this->paginate($this->ObjetosEntrada);

        $this->set(compact('objetosEntrada'));
        $this->set('_serialize', ['objetosEntrada']);
        $this->set('modelo', "objetosEntrada");
    }

    /**
     * View method
     *
     * @param string|null $id Objetos Entrada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objetosEntrada = $this->ObjetosEntrada->get($id, [
            'contain' => ['Objetos']
        ]);

                                         
        $this->set('objetosEntrada', $objetosEntrada);
        $this->set('_serialize', ['objetosEntrada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $objetosEntrada = $this->ObjetosEntrada->newEntity();
        if($external_name!=null){
            $objetosEntrada->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $objetosEntrada = $this->ObjetosEntrada->patchEntity($objetosEntrada, $this->request->getData());
            if ($this->ObjetosEntrada->save($objetosEntrada)) {
                $this->Flash->success(__('The objetos entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos entrada could not be saved. Please, try again.'));
        }
        $objetos = $this->ObjetosEntrada->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('objetosEntrada', 'objetos'));
        $this->set('_serialize', ['objetosEntrada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Objetos Entrada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objetosEntrada = $this->ObjetosEntrada->get($id, [
            'contain' => ['Objetos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objetosEntrada = $this->ObjetosEntrada->patchEntity($objetosEntrada, $this->request->getData());
            if ($this->ObjetosEntrada->save($objetosEntrada)) {
                $this->Flash->success(__('The objetos entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos entrada could not be saved. Please, try again.'));
        }
        $objetos = $this->ObjetosEntrada->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('objetosEntrada', 'objetos'));
        $this->set('_serialize', ['objetosEntrada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Objetos Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objetosEntrada = $this->ObjetosEntrada->get($id);
        if ($this->ObjetosEntrada->delete($objetosEntrada)) {
            $this->Flash->success(__('The objetos entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The objetos entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
