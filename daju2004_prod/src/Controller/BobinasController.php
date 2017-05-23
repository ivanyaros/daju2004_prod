<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bobinas Controller
 *
 * @property \App\Model\Table\BobinasTable $Bobinas
 *
 * @method \App\Model\Entity\Bobina[] paginate($object = null, array $settings = [])
 */
class BobinasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bobinas = $this->paginate($this->Bobinas);

        $this->set(compact('bobinas'));
        $this->set('_serialize', ['bobinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Bobina id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bobina = $this->Bobinas->get($id, [
            'contain' => []
        ]);

        $this->set('bobina', $bobina);
        $this->set('_serialize', ['bobina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bobina = $this->Bobinas->newEntity();
        if ($this->request->is('post')) {
            $bobina = $this->Bobinas->patchEntity($bobina, $this->request->getData());
            if ($this->Bobinas->save($bobina)) {
                $this->Flash->success(__('The bobina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bobina could not be saved. Please, try again.'));
        }
        $this->set(compact('bobina'));
        $this->set('_serialize', ['bobina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bobina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bobina = $this->Bobinas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bobina = $this->Bobinas->patchEntity($bobina, $this->request->getData());
            if ($this->Bobinas->save($bobina)) {
                $this->Flash->success(__('The bobina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bobina could not be saved. Please, try again.'));
        }
        $this->set(compact('bobina'));
        $this->set('_serialize', ['bobina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bobina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bobina = $this->Bobinas->get($id);
        if ($this->Bobinas->delete($bobina)) {
            $this->Flash->success(__('The bobina has been deleted.'));
        } else {
            $this->Flash->error(__('The bobina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
