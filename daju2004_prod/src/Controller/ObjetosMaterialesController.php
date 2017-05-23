<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ObjetosMateriales Controller
 *
 * @property \App\Model\Table\ObjetosMaterialesTable $ObjetosMateriales
 *
 * @method \App\Model\Entity\ObjetosMateriale[] paginate($object = null, array $settings = [])
 */
class ObjetosMaterialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Objetos', 'Materiales', 'Material']
        ];
        $objetosMateriales = $this->paginate($this->ObjetosMateriales);

        $this->set(compact('objetosMateriales'));
        $this->set('_serialize', ['objetosMateriales']);
    }

    /**
     * View method
     *
     * @param string|null $id Objetos Materiale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objetosMateriale = $this->ObjetosMateriales->get($id, [
            'contain' => ['Objetos', 'Materiales', 'Material']
        ]);

        $this->set('objetosMateriale', $objetosMateriale);
        $this->set('_serialize', ['objetosMateriale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $objetosMateriale = $this->ObjetosMateriales->newEntity();
        if ($this->request->is('post')) {
            $objetosMateriale = $this->ObjetosMateriales->patchEntity($objetosMateriale, $this->request->getData());
            if ($this->ObjetosMateriales->save($objetosMateriale)) {
                $this->Flash->success(__('The objetos materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos materiale could not be saved. Please, try again.'));
        }
        $objetos = $this->ObjetosMateriales->Objetos->find('list', ['limit' => 200]);
        $materiales = $this->ObjetosMateriales->Materiales->find('list', ['limit' => 200]);
        $material = $this->ObjetosMateriales->Material->find('list', ['limit' => 200]);
        $this->set(compact('objetosMateriale', 'objetos', 'materiales', 'material'));
        $this->set('_serialize', ['objetosMateriale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Objetos Materiale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objetosMateriale = $this->ObjetosMateriales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objetosMateriale = $this->ObjetosMateriales->patchEntity($objetosMateriale, $this->request->getData());
            if ($this->ObjetosMateriales->save($objetosMateriale)) {
                $this->Flash->success(__('The objetos materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos materiale could not be saved. Please, try again.'));
        }
        $objetos = $this->ObjetosMateriales->Objetos->find('list', ['limit' => 200]);
        $materiales = $this->ObjetosMateriales->Materiales->find('list', ['limit' => 200]);
        $material = $this->ObjetosMateriales->Material->find('list', ['limit' => 200]);
        $this->set(compact('objetosMateriale', 'objetos', 'materiales', 'material'));
        $this->set('_serialize', ['objetosMateriale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Objetos Materiale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objetosMateriale = $this->ObjetosMateriales->get($id);
        if ($this->ObjetosMateriales->delete($objetosMateriale)) {
            $this->Flash->success(__('The objetos materiale has been deleted.'));
        } else {
            $this->Flash->error(__('The objetos materiale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
