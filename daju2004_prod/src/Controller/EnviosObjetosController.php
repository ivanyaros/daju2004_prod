<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EnviosObjetos Controller
 *
 * @property \App\Model\Table\EnviosObjetosTable $EnviosObjetos
 *
 * @method \App\Model\Entity\EnviosObjeto[] paginate($object = null, array $settings = [])
 */
class EnviosObjetosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Envios', 'Objetos']
        ];
        $enviosObjetos = $this->paginate($this->EnviosObjetos);

        $this->set(compact('enviosObjetos'));
        $this->set('_serialize', ['enviosObjetos']);
    }

    /**
     * View method
     *
     * @param string|null $id Envios Objeto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enviosObjeto = $this->EnviosObjetos->get($id, [
            'contain' => ['Envios', 'Objetos']
        ]);

        $this->set('enviosObjeto', $enviosObjeto);
        $this->set('_serialize', ['enviosObjeto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $enviosObjeto = $this->EnviosObjetos->newEntity();
        if($external_name!=null){
            $enviosObjeto->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $enviosObjeto = $this->EnviosObjetos->patchEntity($enviosObjeto, $this->request->getData());
            if ($this->EnviosObjetos->save($enviosObjeto)) {
                $this->Flash->success(__('The envios objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envios objeto could not be saved. Please, try again.'));
        }
        $envios = $this->EnviosObjetos->Envios->find('list', ['limit' => 200]);
        $objetos = $this->EnviosObjetos->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('enviosObjeto', 'envios', 'objetos'));
        $this->set('_serialize', ['enviosObjeto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Envios Objeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enviosObjeto = $this->EnviosObjetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enviosObjeto = $this->EnviosObjetos->patchEntity($enviosObjeto, $this->request->getData());
            if ($this->EnviosObjetos->save($enviosObjeto)) {
                $this->Flash->success(__('The envios objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The envios objeto could not be saved. Please, try again.'));
        }
        $envios = $this->EnviosObjetos->Envios->find('list', ['limit' => 200]);
        $objetos = $this->EnviosObjetos->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('enviosObjeto', 'envios', 'objetos'));
        $this->set('_serialize', ['enviosObjeto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Envios Objeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enviosObjeto = $this->EnviosObjetos->get($id);
        if ($this->EnviosObjetos->delete($enviosObjeto)) {
            $this->Flash->success(__('The envios objeto has been deleted.'));
        } else {
            $this->Flash->error(__('The envios objeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
