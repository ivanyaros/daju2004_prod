<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdensEstados Controller
 *
 * @property \App\Model\Table\OrdensEstadosTable $OrdensEstados
 *
 * @method \App\Model\Entity\OrdensEstado[] paginate($object = null, array $settings = [])
 */
class OrdensEstadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ordens', 'Estados']
        ];
        $ordensEstados = $this->paginate($this->OrdensEstados);

        $this->set(compact('ordensEstados'));
        $this->set('_serialize', ['ordensEstados']);
    }

    /**
     * View method
     *
     * @param string|null $id Ordens Estado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordensEstado = $this->OrdensEstados->get($id, [
            'contain' => ['Ordens', 'Estados', 'Maquinas', 'Usuarios', 'Utensilios']
        ]);

        $this->set('ordensEstado', $ordensEstado);
        $this->set('_serialize', ['ordensEstado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordensEstado = $this->OrdensEstados->newEntity();
        if ($this->request->is('post')) {
            $ordensEstado = $this->OrdensEstados->patchEntity($ordensEstado, $this->request->getData());
            if ($this->OrdensEstados->save($ordensEstado)) {
                $this->Flash->success(__('The ordens estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estado could not be saved. Please, try again.'));
        }
        $ordens = $this->OrdensEstados->Ordens->find('list', ['limit' => 200]);
        $estados = $this->OrdensEstados->Estados->find('list', ['limit' => 200]);
        $maquinas = $this->OrdensEstados->Maquinas->find('list', ['limit' => 200]);
        $usuarios = $this->OrdensEstados->Usuarios->find('list', ['limit' => 200]);
        $utensilios = $this->OrdensEstados->Utensilios->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstado', 'ordens', 'estados', 'maquinas', 'usuarios', 'utensilios'));
        $this->set('_serialize', ['ordensEstado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordens Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordensEstado = $this->OrdensEstados->get($id, [
            'contain' => ['Maquinas', 'Usuarios', 'Utensilios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordensEstado = $this->OrdensEstados->patchEntity($ordensEstado, $this->request->getData());
            if ($this->OrdensEstados->save($ordensEstado)) {
                $this->Flash->success(__('The ordens estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estado could not be saved. Please, try again.'));
        }
        $ordens = $this->OrdensEstados->Ordens->find('list', ['limit' => 200]);
        $estados = $this->OrdensEstados->Estados->find('list', ['limit' => 200]);
        $maquinas = $this->OrdensEstados->Maquinas->find('list', ['limit' => 200]);
        $usuarios = $this->OrdensEstados->Usuarios->find('list', ['limit' => 200]);
        $utensilios = $this->OrdensEstados->Utensilios->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstado', 'ordens', 'estados', 'maquinas', 'usuarios', 'utensilios'));
        $this->set('_serialize', ['ordensEstado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordens Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordensEstado = $this->OrdensEstados->get($id);
        if ($this->OrdensEstados->delete($ordensEstado)) {
            $this->Flash->success(__('The ordens estado has been deleted.'));
        } else {
            $this->Flash->error(__('The ordens estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
