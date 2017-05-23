<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ObjetosObjetos Controller
 *
 * @property \App\Model\Table\ObjetosObjetosTable $ObjetosObjetos
 *
 * @method \App\Model\Entity\ObjetosObjeto[] paginate($object = null, array $settings = [])
 */
class ObjetosObjetosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Objetos']
        ];
        $objetosObjetos = $this->paginate($this->ObjetosObjetos);

        $this->set(compact('objetosObjetos'));
        $this->set('_serialize', ['objetosObjetos']);
    }

    /**
     * View method
     *
     * @param string|null $id Objetos Objeto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objetosObjeto = $this->ObjetosObjetos->get($id, [
            'contain' => ['Objetos']
        ]);

        $this->set('objetosObjeto', $objetosObjeto);
        $this->set('_serialize', ['objetosObjeto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $objetosObjeto = $this->ObjetosObjetos->newEntity();
        if ($this->request->is('post')) {
            $objetosObjeto = $this->ObjetosObjetos->patchEntity($objetosObjeto, $this->request->getData());
            if ($this->ObjetosObjetos->save($objetosObjeto)) {
                $this->Flash->success(__('The objetos objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos objeto could not be saved. Please, try again.'));
        }
        $objetos = $this->ObjetosObjetos->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('objetosObjeto', 'objetos'));
        $this->set('_serialize', ['objetosObjeto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Objetos Objeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objetosObjeto = $this->ObjetosObjetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objetosObjeto = $this->ObjetosObjetos->patchEntity($objetosObjeto, $this->request->getData());
            if ($this->ObjetosObjetos->save($objetosObjeto)) {
                $this->Flash->success(__('The objetos objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetos objeto could not be saved. Please, try again.'));
        }
        $objetos = $this->ObjetosObjetos->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('objetosObjeto', 'objetos'));
        $this->set('_serialize', ['objetosObjeto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Objetos Objeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objetosObjeto = $this->ObjetosObjetos->get($id);
        if ($this->ObjetosObjetos->delete($objetosObjeto)) {
            $this->Flash->success(__('The objetos objeto has been deleted.'));
        } else {
            $this->Flash->error(__('The objetos objeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
