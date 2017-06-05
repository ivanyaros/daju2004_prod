<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centros Controller
 *
 * @property \App\Model\Table\CentrosTable $Centros
 *
 * @method \App\Model\Entity\Centro[] paginate($object = null, array $settings = [])
 */
class CentrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $centros = $this->paginate($this->Centros);

        $this->set(compact('centros'));
        $this->set('_serialize', ['centros']);
    }

    /**
     * View method
     *
     * @param string|null $id Centro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centro = $this->Centros->get($id, [
            'contain' => ['EntradasDeMateriales', 'Envios', 'Localizaciones', 'Ordens', 'Proceso']
        ]);

        $this->set('centro', $centro);
        $this->set('_serialize', ['centro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $centro = $this->Centros->newEntity();
        if($external_name!=null){
            $centro->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $centro = $this->Centros->patchEntity($centro, $this->request->getData());
            if ($this->Centros->save($centro)) {
                $this->Flash->success(__('The centro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centro could not be saved. Please, try again.'));
        }
        $this->set(compact('centro'));
        $this->set('_serialize', ['centro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Centro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centro = $this->Centros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centro = $this->Centros->patchEntity($centro, $this->request->getData());
            if ($this->Centros->save($centro)) {
                $this->Flash->success(__('The centro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centro could not be saved. Please, try again.'));
        }
        $this->set(compact('centro'));
        $this->set('_serialize', ['centro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Centro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centro = $this->Centros->get($id);
        if ($this->Centros->delete($centro)) {
            $this->Flash->success(__('The centro has been deleted.'));
        } else {
            $this->Flash->error(__('The centro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
