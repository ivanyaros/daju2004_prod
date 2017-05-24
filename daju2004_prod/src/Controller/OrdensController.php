<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ordens Controller
 *
 * @property \App\Model\Table\OrdensTable $Ordens
 *
 * @method \App\Model\Entity\Orden[] paginate($object = null, array $settings = [])
 */
class OrdensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Centros', 'Proceso']
        ];
        $ordens = $this->paginate($this->Ordens);

        $this->set(compact('ordens'));
        $this->set('_serialize', ['ordens']);
    }

    /**
     * View method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orden = $this->Ordens->get($id, [
            'contain' => ['Centros', 'Proceso', 'Estados', 'Objetos']
        ]);

        $this->set('orden', $orden);
        $this->set('_serialize', ['orden']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orden = $this->Ordens->newEntity();
        if ($this->request->is('post')) {
            $orden = $this->Ordens->patchEntity($orden, $this->request->getData());
            if ($this->Ordens->save($orden)) {
                $this->Flash->success(__('The orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orden could not be saved. Please, try again.'));
        }
        $centros = $this->Ordens->Centros->find('list', ['limit' => 200]);
        $proceso = $this->Ordens->Proceso->find('list', ['limit' => 200]);
        $estados = $this->Ordens->Estados->find('list', ['limit' => 200]);
        $this->set(compact('orden', 'centros', 'proceso', 'estados'));
        $this->set('_serialize', ['orden']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orden = $this->Ordens->get($id, [
            'contain' => ['Estados']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orden = $this->Ordens->patchEntity($orden, $this->request->getData());
            if ($this->Ordens->save($orden)) {
                $this->Flash->success(__('The orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orden could not be saved. Please, try again.'));
        }
        $centros = $this->Ordens->Centros->find('list', ['limit' => 200]);
        $proceso = $this->Ordens->Proceso->find('list', ['limit' => 200]);
        $estados = $this->Ordens->Estados->find('list', ['limit' => 200]);
        $this->set(compact('orden', 'centros', 'proceso', 'estados'));
        $this->set('_serialize', ['orden']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orden = $this->Ordens->get($id);
        if ($this->Ordens->delete($orden)) {
            $this->Flash->success(__('The orden has been deleted.'));
        } else {
            $this->Flash->error(__('The orden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
