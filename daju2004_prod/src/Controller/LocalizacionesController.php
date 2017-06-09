<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Localizaciones Controller
 *
 * @property \App\Model\Table\LocalizacionesTable $Localizaciones
 *
 * @method \App\Model\Entity\Localizacione[] paginate($object = null, array $settings = [])
 */
class LocalizacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Centros']
        ];
        $this->loadModel('Centros');
        $localizacione = $this->Localizaciones->newEntity();
        $localizacione = $this->Localizaciones->patchEntity($localizacione, $this->request->getQuery());
        $query=$this->Localizaciones->find();
        /**
        $my_query_name=$this->request->getQuery('name');
        if(isset($my_query_name)&&($my_query_name!="")){
            $query=$query->where(['Localizaciones.name LIKE "'.$my_query_name.'"']);
        }
        $my_query_name=$this->request->getQuery('centro_id');
        if(isset($my_query_name)&&($my_query_name!="")){
            $query=$query->where(['Localizaciones.centro_id = ' => $my_query_name]);
        }
        **/
        
        if($localizacione->name!=""){
            $query=$query->where(['Localizaciones.name LIKE "'.$localizacione->name.'"']);
        }
        if(isset($localizacione->centro_id)){
            $query=$query->where(['Localizaciones.centro_id = ' => $localizacione->centro_id]);

        }
        
        $centros=$this->Centros->find('list');
        $localizaciones = $this->paginate($query);
        $this->set(compact('localizaciones','my_query','localizacione','centros'));
        $this->set('_serialize', ['localizaciones']);
        $this->set('modelo', "localizaciones");
        
        
    }

    /**
     * View method
     *
     * @param string|null $id Localizacione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $localizacione = $this->Localizaciones->get($id, [
            'contain' => ['Centros', 'Materiales', 'Objetos']
        ]);
        $this->paginate =[
            'Materiales' => ['scope' => 'mis_Materiales']
            ,'Objetos' => ['scope' => 'mis_Objetos']
        ];

        $this->loadModel('Materiales');
        $query=$this->Materiales->find('all')
                                        ->where(['localizacione_id' => $id]);
        $materiales=$this->paginate($query,['scope'=>'mis_Materiales']);
        $this->set(compact('materiales'));

        $this->loadModel('Objetos');
        $query=$this->Objetos->find('all')
                                        ->where(['localizacione_id' => $id]);
        $objetos=$this->paginate($query,['scope'=>'mis_Objetos']);
        $this->set(compact('objetos'));

                                         
        $this->set('localizacione', $localizacione);
        $this->set('_serialize', ['localizacione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $localizacione = $this->Localizaciones->newEntity();
        if($external_name!=null){
            $localizacione->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $localizacione = $this->Localizaciones->patchEntity($localizacione, $this->request->getData());
            if ($this->Localizaciones->save($localizacione)) {
                $this->Flash->success(__('The localizacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localizacione could not be saved. Please, try again.'));
        }
        $centros = $this->Localizaciones->Centros->find('list', ['limit' => 200]);
        $this->set(compact('localizacione', 'centros'));
        $this->set('_serialize', ['localizacione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Localizacione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $localizacione = $this->Localizaciones->get($id, [
            'contain' => ['Centros', 'Materiales', 'Objetos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $localizacione = $this->Localizaciones->patchEntity($localizacione, $this->request->getData());
            if ($this->Localizaciones->save($localizacione)) {
                $this->Flash->success(__('The localizacione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localizacione could not be saved. Please, try again.'));
        }
        $centros = $this->Localizaciones->Centros->find('list', ['limit' => 200]);
        $this->set(compact('localizacione', 'centros'));
        $this->set('_serialize', ['localizacione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Localizacione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $localizacione = $this->Localizaciones->get($id);
        if ($this->Localizaciones->delete($localizacione)) {
            $this->Flash->success(__('The localizacione has been deleted.'));
        } else {
            $this->Flash->error(__('The localizacione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
