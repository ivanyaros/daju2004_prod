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
        $objetosEntrada = $this->paginate($this->ObjetosEntrada);

        $this->set(compact('objetosEntrada'));
        $this->set('_serialize', ['objetosEntrada']);
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
            'contain' => []
        ]);

        $this->set('objetosEntrada', $objetosEntrada);
        $this->set('_serialize', ['objetosEntrada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $objetosEntrada = $this->ObjetosEntrada->newEntity();
        if ($this->request->is('post')) {
            $objetosEntrada = $this->ObjetosEntrada->patchEntity($objetosEntrada, $this->request->getData());
            if ($this->ObjetosEntrada->save($objetosEntrada)) {
                $this->Flash->success(__('The objetos entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos entrada could not be saved. Please, try again.'));
        }
        $this->set(compact('objetosEntrada'));
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
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objetosEntrada = $this->ObjetosEntrada->patchEntity($objetosEntrada, $this->request->getData());
            if ($this->ObjetosEntrada->save($objetosEntrada)) {
                $this->Flash->success(__('The objetos entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos entrada could not be saved. Please, try again.'));
        }
        $this->set(compact('objetosEntrada'));
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
