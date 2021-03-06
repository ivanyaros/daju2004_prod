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
        $this->set('modelo', "utensilios");
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
            'contain' => ['UtensiliosUsados']
        ]);
        $this->paginate =[
            'UtensiliosUsados' => ['scope' => 'mis_UtensiliosUsados']
        ];

        $this->loadModel('UtensiliosUsados');
        $query=$this->UtensiliosUsados->find('all')
                                        ->where(['utensilio_id' => $id])
                                        ->contain(['Tareas', 'Utensilios']);

        $utensiliosUsados=$this->paginate($query,['scope'=>'mis_UtensiliosUsados']);
        $this->set(compact('utensiliosUsados'));

                                         
        $this->set('utensilio', $utensilio);
        $this->set('_serialize', ['utensilio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $utensilio = $this->Utensilios->newEntity();
        if($external_name!=null){
            $utensilio->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $utensilio = $this->Utensilios->patchEntity($utensilio, $this->request->getData());
            if ($this->Utensilios->save($utensilio)) {
                $this->Flash->success(__('The utensilio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utensilio could not be saved. Please, try again.'));
        }
        $this->set(compact('utensilio'));
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
            'contain' => ['UtensiliosUsados']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utensilio = $this->Utensilios->patchEntity($utensilio, $this->request->getData());
            if ($this->Utensilios->save($utensilio)) {
                $this->Flash->success(__('The utensilio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utensilio could not be saved. Please, try again.'));
        }
        $this->set(compact('utensilio'));
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
