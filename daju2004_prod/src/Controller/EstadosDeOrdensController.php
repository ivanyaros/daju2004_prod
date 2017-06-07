<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstadosDeOrdens Controller
 *
 * @property \App\Model\Table\EstadosDeOrdensTable $EstadosDeOrdens
 *
 * @method \App\Model\Entity\EstadosDeOrden[] paginate($object = null, array $settings = [])
 */
class EstadosDeOrdensController extends AppController
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
        $estadosDeOrdens = $this->paginate($this->EstadosDeOrdens);

        $this->set(compact('estadosDeOrdens'));
        $this->set('_serialize', ['estadosDeOrdens']);
        $this->set('modelo', "estadosDeOrdens");
    }

    /**
     * View method
     *
     * @param string|null $id Estados De Orden id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadosDeOrden = $this->EstadosDeOrdens->get($id, [
            'contain' => ['Ordens', 'Estados', 'MaquinasUsadas', 'UsuariosEnEstadosOrden', 'UtensiliosUsados']
        ]);

        $this->set('estadosDeOrden', $estadosDeOrden);
        $this->set('_serialize', ['estadosDeOrden']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $estadosDeOrden = $this->EstadosDeOrdens->newEntity();
        if($external_name!=null){
            $estadosDeOrden->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $estadosDeOrden = $this->EstadosDeOrdens->patchEntity($estadosDeOrden, $this->request->getData());
            if ($this->EstadosDeOrdens->save($estadosDeOrden)) {
                $this->Flash->success(__('The estados de orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estados de orden could not be saved. Please, try again.'));
        }
        $ordens = $this->EstadosDeOrdens->Ordens->find('list', ['limit' => 200]);
        $estados = $this->EstadosDeOrdens->Estados->find('list', ['limit' => 200]);
        $this->set(compact('estadosDeOrden', 'ordens', 'estados'));
        $this->set('_serialize', ['estadosDeOrden']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estados De Orden id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadosDeOrden = $this->EstadosDeOrdens->get($id, [
            'contain' => ['Ordens', 'Estados', 'MaquinasUsadas', 'UsuariosEnEstadosOrden', 'UtensiliosUsados']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadosDeOrden = $this->EstadosDeOrdens->patchEntity($estadosDeOrden, $this->request->getData());
            if ($this->EstadosDeOrdens->save($estadosDeOrden)) {
                $this->Flash->success(__('The estados de orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estados de orden could not be saved. Please, try again.'));
        }
        $ordens = $this->EstadosDeOrdens->Ordens->find('list', ['limit' => 200]);
        $estados = $this->EstadosDeOrdens->Estados->find('list', ['limit' => 200]);
        $this->set(compact('estadosDeOrden', 'ordens', 'estados'));
        $this->set('_serialize', ['estadosDeOrden']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estados De Orden id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadosDeOrden = $this->EstadosDeOrdens->get($id);
        if ($this->EstadosDeOrdens->delete($estadosDeOrden)) {
            $this->Flash->success(__('The estados de orden has been deleted.'));
        } else {
            $this->Flash->error(__('The estados de orden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
