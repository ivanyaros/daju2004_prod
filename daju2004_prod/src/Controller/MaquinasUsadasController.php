<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaquinasUsadas Controller
 *
 * @property \App\Model\Table\MaquinasUsadasTable $MaquinasUsadas
 *
 * @method \App\Model\Entity\MaquinasUsada[] paginate($object = null, array $settings = [])
 */
class MaquinasUsadasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tareas', 'Maquinas']
        ];
        $maquinasUsadas = $this->paginate($this->MaquinasUsadas);

        $this->set(compact('maquinasUsadas'));
        $this->set('_serialize', ['maquinasUsadas']);
        $this->set('modelo', "maquinasUsadas");
    }

    /**
     * View method
     *
     * @param string|null $id Maquinas Usada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maquinasUsada = $this->MaquinasUsadas->get($id, [
            'contain' => ['Tareas', 'Maquinas']
        ]);

                                         
        $this->set('maquinasUsada', $maquinasUsada);
        $this->set('_serialize', ['maquinasUsada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $maquinasUsada = $this->MaquinasUsadas->newEntity();
        if($external_name!=null){
            $maquinasUsada->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $maquinasUsada = $this->MaquinasUsadas->patchEntity($maquinasUsada, $this->request->getData());
            if ($this->MaquinasUsadas->save($maquinasUsada)) {
                $this->Flash->success(__('The maquinas usada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maquinas usada could not be saved. Please, try again.'));
        }
        $tareas = $this->MaquinasUsadas->Tareas->find('list', ['limit' => 200]);
        $maquinas = $this->MaquinasUsadas->Maquinas->find('list', ['limit' => 200]);
        $this->set(compact('maquinasUsada', 'tareas', 'maquinas'));
        $this->set('_serialize', ['maquinasUsada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maquinas Usada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maquinasUsada = $this->MaquinasUsadas->get($id, [
            'contain' => ['Tareas', 'Maquinas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maquinasUsada = $this->MaquinasUsadas->patchEntity($maquinasUsada, $this->request->getData());
            if ($this->MaquinasUsadas->save($maquinasUsada)) {
                $this->Flash->success(__('The maquinas usada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maquinas usada could not be saved. Please, try again.'));
        }
        $tareas = $this->MaquinasUsadas->Tareas->find('list', ['limit' => 200]);
        $maquinas = $this->MaquinasUsadas->Maquinas->find('list', ['limit' => 200]);
        $this->set(compact('maquinasUsada', 'tareas', 'maquinas'));
        $this->set('_serialize', ['maquinasUsada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maquinas Usada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maquinasUsada = $this->MaquinasUsadas->get($id);
        if ($this->MaquinasUsadas->delete($maquinasUsada)) {
            $this->Flash->success(__('The maquinas usada has been deleted.'));
        } else {
            $this->Flash->error(__('The maquinas usada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
