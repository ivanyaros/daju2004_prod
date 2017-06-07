<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaterialesEntrada Controller
 *
 * @property \App\Model\Table\MaterialesEntradaTable $MaterialesEntrada
 *
 * @method \App\Model\Entity\MaterialesEntrada[] paginate($object = null, array $settings = [])
 */
class MaterialesEntradaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Objetos', 'Materiales']
        ];
        $materialesEntrada = $this->paginate($this->MaterialesEntrada);

        $this->set(compact('materialesEntrada'));
        $this->set('_serialize', ['materialesEntrada']);
        $this->set('modelo', "materialesEntrada");
    }

    /**
     * View method
     *
     * @param string|null $id Materiales Entrada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialesEntrada = $this->MaterialesEntrada->get($id, [
            'contain' => ['Objetos', 'Materiales']
        ]);

                                         
        $this->set('materialesEntrada', $materialesEntrada);
        $this->set('_serialize', ['materialesEntrada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $materialesEntrada = $this->MaterialesEntrada->newEntity();
        if($external_name!=null){
            $materialesEntrada->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $materialesEntrada = $this->MaterialesEntrada->patchEntity($materialesEntrada, $this->request->getData());
            if ($this->MaterialesEntrada->save($materialesEntrada)) {
                $this->Flash->success(__('The materiales entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiales entrada could not be saved. Please, try again.'));
        }
        $objetos = $this->MaterialesEntrada->Objetos->find('list', ['limit' => 200]);
        $materiales = $this->MaterialesEntrada->Materiales->find('list', ['limit' => 200]);
        $this->set(compact('materialesEntrada', 'objetos', 'materiales'));
        $this->set('_serialize', ['materialesEntrada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materiales Entrada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialesEntrada = $this->MaterialesEntrada->get($id, [
            'contain' => ['Objetos', 'Materiales']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialesEntrada = $this->MaterialesEntrada->patchEntity($materialesEntrada, $this->request->getData());
            if ($this->MaterialesEntrada->save($materialesEntrada)) {
                $this->Flash->success(__('The materiales entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiales entrada could not be saved. Please, try again.'));
        }
        $objetos = $this->MaterialesEntrada->Objetos->find('list', ['limit' => 200]);
        $materiales = $this->MaterialesEntrada->Materiales->find('list', ['limit' => 200]);
        $this->set(compact('materialesEntrada', 'objetos', 'materiales'));
        $this->set('_serialize', ['materialesEntrada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materiales Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialesEntrada = $this->MaterialesEntrada->get($id);
        if ($this->MaterialesEntrada->delete($materialesEntrada)) {
            $this->Flash->success(__('The materiales entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The materiales entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
