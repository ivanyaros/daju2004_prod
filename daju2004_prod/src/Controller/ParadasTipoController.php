<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ParadasTipo Controller
 *
 * @property \App\Model\Table\ParadasTipoTable $ParadasTipo
 *
 * @method \App\Model\Entity\ParadasTipo[] paginate($object = null, array $settings = [])
 */
class ParadasTipoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $paradasTipo = $this->paginate($this->ParadasTipo);

        $this->set(compact('paradasTipo'));
        $this->set('_serialize', ['paradasTipo']);
        $this->set('modelo', "paradasTipo");
    }

    /**
     * View method
     *
     * @param string|null $id Paradas Tipo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paradasTipo = $this->ParadasTipo->get($id, [
            'contain' => ['Paradas']
        ]);
        $this->paginate =[
            'Paradas' => ['scope' => 'mis_Paradas']
        ];

        $this->loadModel('Paradas');
        $query=$this->Paradas->find('all')
                                        ->where(['paradas_tipo_id' => $id])
                                        ->contain(['ParadasTipo', 'Ordens']);

        $paradas=$this->paginate($query,['scope'=>'mis_Paradas']);
        $this->set(compact('paradas'));

                                         
        $this->set('paradasTipo', $paradasTipo);
        $this->set('_serialize', ['paradasTipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $paradasTipo = $this->ParadasTipo->newEntity();
        if($external_name!=null){
            $paradasTipo->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $paradasTipo = $this->ParadasTipo->patchEntity($paradasTipo, $this->request->getData());
            if ($this->ParadasTipo->save($paradasTipo)) {
                $this->Flash->success(__('The paradas tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paradas tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('paradasTipo'));
        $this->set('_serialize', ['paradasTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paradas Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paradasTipo = $this->ParadasTipo->get($id, [
            'contain' => ['Paradas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paradasTipo = $this->ParadasTipo->patchEntity($paradasTipo, $this->request->getData());
            if ($this->ParadasTipo->save($paradasTipo)) {
                $this->Flash->success(__('The paradas tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paradas tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('paradasTipo'));
        $this->set('_serialize', ['paradasTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paradas Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paradasTipo = $this->ParadasTipo->get($id);
        if ($this->ParadasTipo->delete($paradasTipo)) {
            $this->Flash->success(__('The paradas tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The paradas tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
