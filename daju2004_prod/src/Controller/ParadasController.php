<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paradas Controller
 *
 * @property \App\Model\Table\ParadasTable $Paradas
 *
 * @method \App\Model\Entity\Parada[] paginate($object = null, array $settings = [])
 */
class ParadasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParadasTipo', 'Ordens']
        ];
        $paradas = $this->paginate($this->Paradas);

        $this->set(compact('paradas'));
        $this->set('_serialize', ['paradas']);
        $this->set('modelo', "paradas");
    }

    /**
     * View method
     *
     * @param string|null $id Parada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parada = $this->Paradas->get($id, [
            'contain' => ['ParadasTipo', 'Ordens']
        ]);

                                         
        $this->set('parada', $parada);
        $this->set('_serialize', ['parada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $parada = $this->Paradas->newEntity();
        if($external_name!=null){
            $parada->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $parada = $this->Paradas->patchEntity($parada, $this->request->getData());
            if ($this->Paradas->save($parada)) {
                $this->Flash->success(__('The parada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parada could not be saved. Please, try again.'));
        }
        $paradasTipo = $this->Paradas->ParadasTipo->find('list', ['limit' => 200]);
        $ordens = $this->Paradas->Ordens->find('list', ['limit' => 200]);
        $this->set(compact('parada', 'paradasTipo', 'ordens'));
        $this->set('_serialize', ['parada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Parada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parada = $this->Paradas->get($id, [
            'contain' => ['ParadasTipo', 'Ordens']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parada = $this->Paradas->patchEntity($parada, $this->request->getData());
            if ($this->Paradas->save($parada)) {
                $this->Flash->success(__('The parada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parada could not be saved. Please, try again.'));
        }
        $paradasTipo = $this->Paradas->ParadasTipo->find('list', ['limit' => 200]);
        $ordens = $this->Paradas->Ordens->find('list', ['limit' => 200]);
        $this->set(compact('parada', 'paradasTipo', 'ordens'));
        $this->set('_serialize', ['parada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Parada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parada = $this->Paradas->get($id);
        if ($this->Paradas->delete($parada)) {
            $this->Flash->success(__('The parada has been deleted.'));
        } else {
            $this->Flash->error(__('The parada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
