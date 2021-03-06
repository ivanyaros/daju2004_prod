<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EntradasDeMateriales Controller
 *
 * @property \App\Model\Table\EntradasDeMaterialesTable $EntradasDeMateriales
 *
 * @method \App\Model\Entity\EntradasDeMateriale[] paginate($object = null, array $settings = [])
 */
class EntradasDeMaterialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes', 'Centros']
        ];
        $entradasDeMateriales = $this->paginate($this->EntradasDeMateriales);

        $this->set(compact('entradasDeMateriales'));
        $this->set('_serialize', ['entradasDeMateriales']);
        $this->set('modelo', "entradasDeMateriales");
    }

    /**
     * View method
     *
     * @param string|null $id Entradas De Materiale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entradasDeMateriale = $this->EntradasDeMateriales->get($id, [
            'contain' => ['ProveedoresClientes', 'Centros', 'Materiales']
        ]);
        $this->paginate =[
            'Materiales' => ['scope' => 'mis_Materiales']
        ];

        $this->loadModel('Materiales');
        $query=$this->Materiales->find('all')
                                        ->where(['entradas_de_materiale_id' => $id])
                                        ->contain(['Material', 'Localizaciones', 'EntradasDeMateriales']);

        $materiales=$this->paginate($query,['scope'=>'mis_Materiales']);
        $this->set(compact('materiales'));

                                         
        $this->set('entradasDeMateriale', $entradasDeMateriale);
        $this->set('_serialize', ['entradasDeMateriale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $entradasDeMateriale = $this->EntradasDeMateriales->newEntity();
        if($external_name!=null){
            $entradasDeMateriale->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $entradasDeMateriale = $this->EntradasDeMateriales->patchEntity($entradasDeMateriale, $this->request->getData());
            if ($this->EntradasDeMateriales->save($entradasDeMateriale)) {
                $this->Flash->success(__('The entradas de materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entradas de materiale could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->EntradasDeMateriales->ProveedoresClientes->find('list', ['limit' => 200]);
        $centros = $this->EntradasDeMateriales->Centros->find('list', ['limit' => 200]);
        $this->set(compact('entradasDeMateriale', 'proveedoresClientes', 'centros'));
        $this->set('_serialize', ['entradasDeMateriale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entradas De Materiale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entradasDeMateriale = $this->EntradasDeMateriales->get($id, [
            'contain' => ['ProveedoresClientes', 'Centros', 'Materiales']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entradasDeMateriale = $this->EntradasDeMateriales->patchEntity($entradasDeMateriale, $this->request->getData());
            if ($this->EntradasDeMateriales->save($entradasDeMateriale)) {
                $this->Flash->success(__('The entradas de materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entradas de materiale could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->EntradasDeMateriales->ProveedoresClientes->find('list', ['limit' => 200]);
        $centros = $this->EntradasDeMateriales->Centros->find('list', ['limit' => 200]);
        $this->set(compact('entradasDeMateriale', 'proveedoresClientes', 'centros'));
        $this->set('_serialize', ['entradasDeMateriale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entradas De Materiale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entradasDeMateriale = $this->EntradasDeMateriales->get($id);
        if ($this->EntradasDeMateriales->delete($entradasDeMateriale)) {
            $this->Flash->success(__('The entradas de materiale has been deleted.'));
        } else {
            $this->Flash->error(__('The entradas de materiale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
