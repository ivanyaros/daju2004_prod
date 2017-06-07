<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Objetos Controller
 *
 * @property \App\Model\Table\ObjetosTable $Objetos
 *
 * @method \App\Model\Entity\Objeto[] paginate($object = null, array $settings = [])
 */
class ObjetosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Producto', 'Ordens', 'Localizaciones']
        ];
        $objetos = $this->paginate($this->Objetos);

        $this->set(compact('objetos'));
        $this->set('_serialize', ['objetos']);
        $this->set('modelo', "objetos");
    }

    /**
     * View method
     *
     * @param string|null $id Objeto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objeto = $this->Objetos->get($id, [
            'contain' => ['Producto', 'Ordens', 'Localizaciones', 'Envios', 'MaterialesEntrada']
        ]);
        $this->paginate =[
            'Producto' => ['scope' => 'mis_Producto']
            ,'Ordens' => ['scope' => 'mis_Ordens']
            ,'Localizaciones' => ['scope' => 'mis_Localizaciones']
            ,'Envios' => ['scope' => 'mis_Envios']
            ,'MaterialesEntrada' => ['scope' => 'mis_MaterialesEntrada']
        ];

        $this->loadModel('Producto');
        $query=$this->Producto->find('all')
                                        ->where(['objeto_id' => $id]);
        $producto=$this->paginate($query,['scope'=>'mis_Producto']);
        $this->set(compact('producto'));

        $this->loadModel('Ordens');
        $query=$this->Ordens->find('all')
                                        ->where(['objeto_id' => $id]);
        $ordens=$this->paginate($query,['scope'=>'mis_Ordens']);
        $this->set(compact('ordens'));

        $this->loadModel('Localizaciones');
        $query=$this->Localizaciones->find('all')
                                        ->where(['objeto_id' => $id]);
        $localizaciones=$this->paginate($query,['scope'=>'mis_Localizaciones']);
        $this->set(compact('localizaciones'));

        $this->loadModel('Envios');
        $query=$this->Envios->find('all')
                                        ->where(['objeto_id' => $id]);
        $envios=$this->paginate($query,['scope'=>'mis_Envios']);
        $this->set(compact('envios'));

        $this->loadModel('MaterialesEntrada');
        $query=$this->MaterialesEntrada->find('all')
                                        ->where(['objeto_id' => $id]);
        $materialesEntrada=$this->paginate($query,['scope'=>'mis_MaterialesEntrada']);
        $this->set(compact('materialesEntrada'));

                                         
        $this->set('objeto', $objeto);
        $this->set('_serialize', ['objeto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $objeto = $this->Objetos->newEntity();
        if($external_name!=null){
            $objeto->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $objeto = $this->Objetos->patchEntity($objeto, $this->request->getData());
            if ($this->Objetos->save($objeto)) {
                $this->Flash->success(__('The objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objeto could not be saved. Please, try again.'));
        }
        $producto = $this->Objetos->Producto->find('list', ['limit' => 200]);
        $ordens = $this->Objetos->Ordens->find('list', ['limit' => 200]);
        $localizaciones = $this->Objetos->Localizaciones->find('list', ['limit' => 200]);
        $envios = $this->Objetos->Envios->find('list', ['limit' => 200]);
        $this->set(compact('objeto', 'producto', 'ordens', 'localizaciones', 'envios'));
        $this->set('_serialize', ['objeto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Objeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objeto = $this->Objetos->get($id, [
            'contain' => ['Producto', 'Ordens', 'Localizaciones', 'Envios', 'MaterialesEntrada']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objeto = $this->Objetos->patchEntity($objeto, $this->request->getData());
            if ($this->Objetos->save($objeto)) {
                $this->Flash->success(__('The objeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objeto could not be saved. Please, try again.'));
        }
        $producto = $this->Objetos->Producto->find('list', ['limit' => 200]);
        $ordens = $this->Objetos->Ordens->find('list', ['limit' => 200]);
        $localizaciones = $this->Objetos->Localizaciones->find('list', ['limit' => 200]);
        $envios = $this->Objetos->Envios->find('list', ['limit' => 200]);
        $this->set(compact('objeto', 'producto', 'ordens', 'localizaciones', 'envios'));
        $this->set('_serialize', ['objeto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Objeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objeto = $this->Objetos->get($id);
        if ($this->Objetos->delete($objeto)) {
            $this->Flash->success(__('The objeto has been deleted.'));
        } else {
            $this->Flash->error(__('The objeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
