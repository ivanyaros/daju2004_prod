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

        $this->set('iva', $iva);
        $this->set('_serialize', ['iva']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iva = $this->Ivas->newEntity();
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
            'contain' => []
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
