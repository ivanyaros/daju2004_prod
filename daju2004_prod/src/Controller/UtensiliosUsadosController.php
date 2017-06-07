<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UtensiliosUsados Controller
 *
 * @property \App\Model\Table\UtensiliosUsadosTable $UtensiliosUsados
 *
 * @method \App\Model\Entity\UtensiliosUsado[] paginate($object = null, array $settings = [])
 */
class UtensiliosUsadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EstadosDeOrdens', 'Utensilios']
        ];
        $utensiliosUsados = $this->paginate($this->UtensiliosUsados);

        $this->set(compact('utensiliosUsados'));
        $this->set('_serialize', ['utensiliosUsados']);
        $this->set('modelo', "utensiliosUsados");
    }

    /**
     * View method
     *
     * @param string|null $id Utensilios Usado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utensiliosUsado = $this->UtensiliosUsados->get($id, [
            'contain' => ['EstadosDeOrdens', 'Utensilios']
        ]);

                                         
        $this->set('utensiliosUsado', $utensiliosUsado);
        $this->set('_serialize', ['utensiliosUsado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $utensiliosUsado = $this->UtensiliosUsados->newEntity();
        if($external_name!=null){
            $utensiliosUsado->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $utensiliosUsado = $this->UtensiliosUsados->patchEntity($utensiliosUsado, $this->request->getData());
            if ($this->UtensiliosUsados->save($utensiliosUsado)) {
                $this->Flash->success(__('The utensilios usado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utensilios usado could not be saved. Please, try again.'));
        }
        $estadosDeOrdens = $this->UtensiliosUsados->EstadosDeOrdens->find('list', ['limit' => 200]);
        $utensilios = $this->UtensiliosUsados->Utensilios->find('list', ['limit' => 200]);
        $this->set(compact('utensiliosUsado', 'estadosDeOrdens', 'utensilios'));
        $this->set('_serialize', ['utensiliosUsado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Utensilios Usado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utensiliosUsado = $this->UtensiliosUsados->get($id, [
            'contain' => ['EstadosDeOrdens', 'Utensilios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utensiliosUsado = $this->UtensiliosUsados->patchEntity($utensiliosUsado, $this->request->getData());
            if ($this->UtensiliosUsados->save($utensiliosUsado)) {
                $this->Flash->success(__('The utensilios usado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utensilios usado could not be saved. Please, try again.'));
        }
        $estadosDeOrdens = $this->UtensiliosUsados->EstadosDeOrdens->find('list', ['limit' => 200]);
        $utensilios = $this->UtensiliosUsados->Utensilios->find('list', ['limit' => 200]);
        $this->set(compact('utensiliosUsado', 'estadosDeOrdens', 'utensilios'));
        $this->set('_serialize', ['utensiliosUsado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Utensilios Usado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utensiliosUsado = $this->UtensiliosUsados->get($id);
        if ($this->UtensiliosUsados->delete($utensiliosUsado)) {
            $this->Flash->success(__('The utensilios usado has been deleted.'));
        } else {
            $this->Flash->error(__('The utensilios usado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
