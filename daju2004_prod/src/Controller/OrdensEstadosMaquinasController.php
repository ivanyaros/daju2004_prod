<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdensEstadosMaquinas Controller
 *
 * @property \App\Model\Table\OrdensEstadosMaquinasTable $OrdensEstadosMaquinas
 *
 * @method \App\Model\Entity\OrdensEstadosMaquina[] paginate($object = null, array $settings = [])
 */
class OrdensEstadosMaquinasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrdensEstados', 'Maquinas']
        ];
        $ordensEstadosMaquinas = $this->paginate($this->OrdensEstadosMaquinas);

        $this->set(compact('ordensEstadosMaquinas'));
        $this->set('_serialize', ['ordensEstadosMaquinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Ordens Estados Maquina id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordensEstadosMaquina = $this->OrdensEstadosMaquinas->get($id, [
            'contain' => ['OrdensEstados', 'Maquinas']
        ]);

        $this->set('ordensEstadosMaquina', $ordensEstadosMaquina);
        $this->set('_serialize', ['ordensEstadosMaquina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordensEstadosMaquina = $this->OrdensEstadosMaquinas->newEntity();
        if ($this->request->is('post')) {
            $ordensEstadosMaquina = $this->OrdensEstadosMaquinas->patchEntity($ordensEstadosMaquina, $this->request->getData());
            if ($this->OrdensEstadosMaquinas->save($ordensEstadosMaquina)) {
                $this->Flash->success(__('The ordens estados maquina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estados maquina could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->OrdensEstadosMaquinas->OrdensEstados->find('list', ['limit' => 200]);
        $maquinas = $this->OrdensEstadosMaquinas->Maquinas->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstadosMaquina', 'ordensEstados', 'maquinas'));
        $this->set('_serialize', ['ordensEstadosMaquina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordens Estados Maquina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordensEstadosMaquina = $this->OrdensEstadosMaquinas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordensEstadosMaquina = $this->OrdensEstadosMaquinas->patchEntity($ordensEstadosMaquina, $this->request->getData());
            if ($this->OrdensEstadosMaquinas->save($ordensEstadosMaquina)) {
                $this->Flash->success(__('The ordens estados maquina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estados maquina could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->OrdensEstadosMaquinas->OrdensEstados->find('list', ['limit' => 200]);
        $maquinas = $this->OrdensEstadosMaquinas->Maquinas->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstadosMaquina', 'ordensEstados', 'maquinas'));
        $this->set('_serialize', ['ordensEstadosMaquina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordens Estados Maquina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordensEstadosMaquina = $this->OrdensEstadosMaquinas->get($id);
        if ($this->OrdensEstadosMaquinas->delete($ordensEstadosMaquina)) {
            $this->Flash->success(__('The ordens estados maquina has been deleted.'));
        } else {
            $this->Flash->error(__('The ordens estados maquina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
