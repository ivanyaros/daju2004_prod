<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Utensilios Controller
 *
 * @property \App\Model\Table\UtensiliosTable $Utensilios
 *
 * @method \App\Model\Entity\Utensilio[] paginate($object = null, array $settings = [])
 */
class UtensiliosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $utensilios = $this->paginate($this->Utensilios);

        $this->set(compact('utensilios'));
        $this->set('_serialize', ['utensilios']);
    }

    /**
     * View method
     *
     * @param string|null $id Utensilio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utensilio = $this->Utensilios->get($id, [
            'contain' => ['OrdensEstados']
        ]);

        $this->set('utensilio', $utensilio);
        $this->set('_serialize', ['utensilio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utensilio = $this->Utensilios->newEntity();
        if ($this->request->is('post')) {
            $utensilio = $this->Utensilios->patchEntity($utensilio, $this->request->getData());
            if ($this->Utensilios->save($utensilio)) {
                $this->Flash->success(__('The utensilio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utensilio could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->Utensilios->OrdensEstados->find('list', ['limit' => 200]);
        $this->set(compact('utensilio', 'ordensEstados'));
        $this->set('_serialize', ['utensilio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Utensilio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utensilio = $this->Utensilios->get($id, [
            'contain' => ['OrdensEstados']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utensilio = $this->Utensilios->patchEntity($utensilio, $this->request->getData());
            if ($this->Utensilios->save($utensilio)) {
                $this->Flash->success(__('The utensilio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utensilio could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->Utensilios->OrdensEstados->find('list', ['limit' => 200]);
        $this->set(compact('utensilio', 'ordensEstados'));
        $this->set('_serialize', ['utensilio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Utensilio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utensilio = $this->Utensilios->get($id);
        if ($this->Utensilios->delete($utensilio)) {
            $this->Flash->success(__('The utensilio has been deleted.'));
        } else {
            $this->Flash->error(__('The utensilio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
