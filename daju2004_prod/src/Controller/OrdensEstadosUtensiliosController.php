<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdensEstadosUtensilios Controller
 *
 * @property \App\Model\Table\OrdensEstadosUtensiliosTable $OrdensEstadosUtensilios
 *
 * @method \App\Model\Entity\OrdensEstadosUtensilio[] paginate($object = null, array $settings = [])
 */
class OrdensEstadosUtensiliosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['OrdensEstados', 'Utensilios']
        ];
        $ordensEstadosUtensilios = $this->paginate($this->OrdensEstadosUtensilios);

        $this->set(compact('ordensEstadosUtensilios'));
        $this->set('_serialize', ['ordensEstadosUtensilios']);
    }

    /**
     * View method
     *
     * @param string|null $id Ordens Estados Utensilio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordensEstadosUtensilio = $this->OrdensEstadosUtensilios->get($id, [
            'contain' => ['OrdensEstados', 'Utensilios']
        ]);

        $this->set('ordensEstadosUtensilio', $ordensEstadosUtensilio);
        $this->set('_serialize', ['ordensEstadosUtensilio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordensEstadosUtensilio = $this->OrdensEstadosUtensilios->newEntity();
        if ($this->request->is('post')) {
            $ordensEstadosUtensilio = $this->OrdensEstadosUtensilios->patchEntity($ordensEstadosUtensilio, $this->request->getData());
            if ($this->OrdensEstadosUtensilios->save($ordensEstadosUtensilio)) {
                $this->Flash->success(__('The ordens estados utensilio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estados utensilio could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->OrdensEstadosUtensilios->OrdensEstados->find('list', ['limit' => 200]);
        $utensilios = $this->OrdensEstadosUtensilios->Utensilios->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstadosUtensilio', 'ordensEstados', 'utensilios'));
        $this->set('_serialize', ['ordensEstadosUtensilio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordens Estados Utensilio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordensEstadosUtensilio = $this->OrdensEstadosUtensilios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordensEstadosUtensilio = $this->OrdensEstadosUtensilios->patchEntity($ordensEstadosUtensilio, $this->request->getData());
            if ($this->OrdensEstadosUtensilios->save($ordensEstadosUtensilio)) {
                $this->Flash->success(__('The ordens estados utensilio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordens estados utensilio could not be saved. Please, try again.'));
        }
        $ordensEstados = $this->OrdensEstadosUtensilios->OrdensEstados->find('list', ['limit' => 200]);
        $utensilios = $this->OrdensEstadosUtensilios->Utensilios->find('list', ['limit' => 200]);
        $this->set(compact('ordensEstadosUtensilio', 'ordensEstados', 'utensilios'));
        $this->set('_serialize', ['ordensEstadosUtensilio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordens Estados Utensilio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordensEstadosUtensilio = $this->OrdensEstadosUtensilios->get($id);
        if ($this->OrdensEstadosUtensilios->delete($ordensEstadosUtensilio)) {
            $this->Flash->success(__('The ordens estados utensilio has been deleted.'));
        } else {
            $this->Flash->error(__('The ordens estados utensilio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
