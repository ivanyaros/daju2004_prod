<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ordens Controller
 *
 * @property \App\Model\Table\OrdensTable $Ordens
 *
 * @method \App\Model\Entity\Orden[] paginate($object = null, array $settings = [])
 */
class OrdensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estados', 'Centros', 'Proceso', 'Prioridades', 'Categorias']
        ];
        $ordens = $this->paginate($this->Ordens);

        $this->set(compact('ordens'));
        $this->set('_serialize', ['ordens']);
        $this->set('modelo', "ordens");
    }

    /**
     * View method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orden = $this->Ordens->get($id, [
            'contain' => ['Estados', 'Centros', 'Proceso', 'Prioridades', 'Categorias', 'Objetos', 'Paradas', 'Tareas']
        ]);
        $this->paginate =[
            'Objetos' => ['scope' => 'mis_Objetos']
            ,'Paradas' => ['scope' => 'mis_Paradas']
            ,'Tareas' => ['scope' => 'mis_Tareas']
        ];

        $this->loadModel('Objetos');
        $query=$this->Objetos->find('all')
                                        ->where(['orden_id' => $id])
                                        ->contain(['Producto', 'Ordens', 'Localizaciones', 'Envios']);

        $objetos=$this->paginate($query,['scope'=>'mis_Objetos']);
        $this->set(compact('objetos'));

        $this->loadModel('Paradas');
        $query=$this->Paradas->find('all')
                                        ->where(['orden_id' => $id])
                                        ->contain(['ParadasTipo', 'Ordens']);

        $paradas=$this->paginate($query,['scope'=>'mis_Paradas']);
        $this->set(compact('paradas'));

        $this->loadModel('Tareas');
        $query=$this->Tareas->find('all')
                                        ->where(['orden_id' => $id])
                                        ->contain(['Subproceso', 'Ordens']);

        $tareas=$this->paginate($query,['scope'=>'mis_Tareas']);
        $this->set(compact('tareas'));

        $this->loadModel('Subproceso');
        $query=$this->Subproceso->find('all')
                                      ->where(['proceso_id' => $orden->proceso_id]);
        $subprocesos=$query->all();
        $this->set(compact('subprocesos'));
                                         
        $this->set('orden', $orden);
        $this->set('_serialize', ['orden']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $orden = $this->Ordens->newEntity();
        if($external_name!=null){
            $orden->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $orden = $this->Ordens->patchEntity($orden, $this->request->getData());
            
            

            if ($this->Ordens->save($orden)) {
                $this->Flash->success(__('The orden has been saved.'));
                $this->loadModel('Subproceso');
                $query=$this->Subproceso->find('all')
                                          ->where(['proceso_id' => $orden->proceso_id]);
                $subprocesos=$query->all();
                $this->loadModel('Tareas');
                foreach($subprocesos as $subproceso){
                    $tarea = $this->Tareas->newEntity();
                    $tarea->orden_id=$orden->id;
                    $tarea->subproceso_id=$subproceso->id;
                    $this->Tareas->save($tarea);
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orden could not be saved. Please, try again.'));
        }
        $estados = $this->Ordens->Estados->find('list', ['limit' => 200]);
        $centros = $this->Ordens->Centros->find('list', ['limit' => 200]);
        $proceso = $this->Ordens->Proceso->find('list', ['limit' => 200]);
        $prioridades = $this->Ordens->Prioridades->find('list', ['limit' => 200]);
        $categorias = $this->Ordens->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('orden', 'estados', 'centros', 'proceso', 'prioridades', 'categorias'));
        $this->set('_serialize', ['orden']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orden = $this->Ordens->get($id, [
            'contain' => ['Estados', 'Centros', 'Proceso', 'Prioridades', 'Categorias', 'Objetos', 'Paradas', 'Tareas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orden = $this->Ordens->patchEntity($orden, $this->request->getData());
            if ($this->Ordens->save($orden)) {
                $this->Flash->success(__('The orden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orden could not be saved. Please, try again.'));
        }
        $estados = $this->Ordens->Estados->find('list', ['limit' => 200]);
        $centros = $this->Ordens->Centros->find('list', ['limit' => 200]);
        $proceso = $this->Ordens->Proceso->find('list', ['limit' => 200]);
        $prioridades = $this->Ordens->Prioridades->find('list', ['limit' => 200]);
        $categorias = $this->Ordens->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('orden', 'estados', 'centros', 'proceso', 'prioridades', 'categorias'));
        $this->set('_serialize', ['orden']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orden id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orden = $this->Ordens->get($id);
        if ($this->Ordens->delete($orden)) {
            $this->Flash->success(__('The orden has been deleted.'));
        } else {
            $this->Flash->error(__('The orden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
