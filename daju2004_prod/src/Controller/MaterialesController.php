<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Materiales Controller
 *
 * @property \App\Model\Table\MaterialesTable $Materiales
 *
 * @method \App\Model\Entity\Materiale[] paginate($object = null, array $settings = [])
 */
class MaterialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Material', 'Localizaciones', 'EntradasDeMateriales']
        ];
        $materiales = $this->paginate($this->Materiales);

        $this->set(compact('materiales'));
        $this->set('_serialize', ['materiales']);
        $this->set('modelo', "materiales");
    }

    /**
     * View method
     *
     * @param string|null $id Materiale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materiale = $this->Materiales->get($id, [
            'contain' => ['Material', 'Localizaciones', 'EntradasDeMateriales', 'MaterialesEntrada']
        ]);
        $this->paginate =[
            'MaterialesEntrada' => ['scope' => 'mis_MaterialesEntrada']
        ];

        $this->loadModel('MaterialesEntrada');
        $query=$this->MaterialesEntrada->find('all')
                                        ->where(['materiale_id' => $id])
                                        ->contain(['Objetos', 'Materiales']);

        $materialesEntrada=$this->paginate($query,['scope'=>'mis_MaterialesEntrada']);
        $this->set(compact('materialesEntrada'));

                                         
        $this->set('materiale', $materiale);
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $materiale = $this->Materiales->newEntity();
        if($external_name!=null){
            $materiale->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $data=$this->request->getData();
            $this->loadModel('EntradasDeMateriales');
            $laEntrada=$this->EntradasDeMateriales->get($data["entradas_de_materiale_id"]);
            $fecha_entrega=$laEntrada->fecha_recepcion;
            if($data["modo"]=="bobinas"){                
                for($i=1;$i<=$data["numBobinas"];$i++){
                    $mat=$this->Materiales->newEntity();
                    $mat->material_id=$data["material_id"];
                    $mat->fecha_entrega=$fecha_entrega;
                    $mat->localizacione_id=$data["localizacione_id"];
                    $mat->entradas_de_materiale_id=$data["entradas_de_materiale_id"];
                    $mat->bobina=1;
                    $mat->lote=$data["lote"];
                    $mat->numero_bobina=$data["bobina"][$i]["number"];
                    $mat->metros_netos=$data["bobina"][$i]["metros"];
                    if ($this->Materiales->save($mat)) {
                        $this->Flash->success(__('The material has been saved.'));
                    }else{
                        $this->Flash->error(__('The material could not be saved. Please, try again.'));
                    }
                }
                return $this->redirect(['action' => 'index']);
            }
            if($data["modo"]=="lotes"){
                $mat=$this->Materiales->newEntity();
                $mat->material_id=$data["material_id"];        
                $mat->fecha_entrega=$fecha_entrega;
                $mat->localizacione_id=$data["localizacione_id"];
                $mat->entradas_de_materiale_id=$data["entradas_de_materiale_id"];
                $mat->bobina=0;
                $mat->lote=$data["lote"];    


            }   
            /*
            $materiale = $this->Materiales->patchEntity($materiale, $this->request->getData());
            $this->loadModel('EntradasDeMateriales');
            $laEntrada=$this->EntradasDeMateriales->get($materiale->entradas_de_materiale_id);
            $materiale->fecha_entrega=$laEntrada->fecha_recepcion;
            if ($materiale->bobina==1){
                for($i=1;$i<=$materiale->numero_bobina;$i++){
                    $mat=$this->Materiales->newEntity();
                    $mat->material_id=$materiale->material_id;
                    $mat->fecha_entrega=$materiale->fecha_entrega;
                    $mat->localizacione_id=$materiale->localizacione_id;
                    $mat->entradas_de_materiale_id=$materiale->entradas_de_materiale_id;
                    $mat->bobina=1;
                    $mat->lote=$materiale->lote;
                    $mat->numero_bobina=$i;
                    $this->Materiales->save($mat);
                    return $this->redirect($this->Auth->redirectUrl());
                }

            }else{
                if ($this->Materiales->save($materiale)) {
                   
                    $this->Flash->success(__('The materiale has been saved.'));
                    

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The materiale could not be saved. Please, try again.'));
            }
            */
        }
        $material = $this->Materiales->Material->find('list', ['limit' => 200]);
        $localizaciones = $this->Materiales->Localizaciones->find('list', ['limit' => 200]);
        $entradasDeMateriales = $this->Materiales->EntradasDeMateriales->find('list', ['limit' => 200]);
        $this->set(compact('materiale', 'material', 'localizaciones', 'entradasDeMateriales'));
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materiale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materiale = $this->Materiales->get($id, [
            'contain' => ['Material', 'Localizaciones', 'EntradasDeMateriales', 'MaterialesEntrada']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiale = $this->Materiales->patchEntity($materiale, $this->request->getData());
            if ($this->Materiales->save($materiale)) {
                $this->Flash->success(__('The materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiale could not be saved. Please, try again.'));
        }
        $material = $this->Materiales->Material->find('list', ['limit' => 200]);
        $localizaciones = $this->Materiales->Localizaciones->find('list', ['limit' => 200]);
        $entradasDeMateriales = $this->Materiales->EntradasDeMateriales->find('list', ['limit' => 200]);
        $this->set(compact('materiale', 'material', 'localizaciones', 'entradasDeMateriales'));
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materiale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materiale = $this->Materiales->get($id);
        if ($this->Materiales->delete($materiale)) {
            $this->Flash->success(__('The materiale has been deleted.'));
        } else {
            $this->Flash->error(__('The materiale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
