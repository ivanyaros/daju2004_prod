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

        $this->set('familia', $familia);
        $this->set('_serialize', ['familia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $familia = $this->Familias->newEntity();
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
            'contain' => []
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
