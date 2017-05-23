<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Maquinas Controller
 *
 * @property \App\Model\Table\MaquinasTable $Maquinas
 *
 * @method \App\Model\Entity\Maquina[] paginate($object = null, array $settings = [])
 */
class MaquinasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $maquinas = $this->paginate($this->Maquinas);

        $this->set(compact('maquinas'));
        $this->set('_serialize', ['maquinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Maquina id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maquina = $this->Maquinas->get($id, [
            'contain' => ['OrdensEstados']
        ]);

        $this->set('maquina', $maquina);
        $this->set('_serialize', ['maquina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maquina = $this->Maquinas->newEntity();
        if ($this->request->is('post')) {
            $maquina = $this->Maquinas->patchEntity($maquina, $this->request->getData());
            if ($this->Maquinas->save($maquina)) {
                $this->Flash->success(__('The maquina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maquina could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->Maquinas->OrdensEstados->find('list', ['limit' => 200]);
        $this->set(compact('maquina', 'ordensEstados'));
        $this->set('_serialize', ['maquina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maquina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maquina = $this->Maquinas->get($id, [
            'contain' => ['OrdensEstados']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maquina = $this->Maquinas->patchEntity($maquina, $this->request->getData());
            if ($this->Maquinas->save($maquina)) {
                $this->Flash->success(__('The maquina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maquina could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->Maquinas->OrdensEstados->find('list', ['limit' => 200]);
        $this->set(compact('maquina', 'ordensEstados'));
        $this->set('_serialize', ['maquina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maquina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maquina = $this->Maquinas->get($id);
        if ($this->Maquinas->delete($maquina)) {
            $this->Flash->success(__('The maquina has been deleted.'));
        } else {
            $this->Flash->error(__('The maquina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
