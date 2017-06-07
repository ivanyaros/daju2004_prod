<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Material Controller
 *
 * @property \App\Model\Table\MaterialTable $Material
 *
 * @method \App\Model\Entity\Material[] paginate($object = null, array $settings = [])
 */
class MaterialController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Familias', 'Monedas', 'Ivas']
        ];
        $material = $this->paginate($this->Material);

        $this->set(compact('material'));
        $this->set('_serialize', ['material']);
        $this->set('modelo', "material");
    }

    /**
     * View method
     *
     * @param string|null $id Material id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $material = $this->Material->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Materiales', 'ProcesoMaterialEntrada', 'ProveedoresMaterial']
        ]);
        $this->paginate =[
            'Materiales' => ['scope' => 'mis_Materiales']
            ,'ProcesoMaterialEntrada' => ['scope' => 'mis_ProcesoMaterialEntrada']
            ,'ProveedoresMaterial' => ['scope' => 'mis_ProveedoresMaterial']
        ];

        $this->loadModel('Materiales');
        $query=$this->Materiales->find('all')
                                        ->where(['material_id' => $id]);
        $materiales=$this->paginate($query,['scope'=>'mis_Materiales']);
        $this->set(compact('materiales'));

        $this->loadModel('ProcesoMaterialEntrada');
        $query=$this->ProcesoMaterialEntrada->find('all')
                                        ->where(['material_id' => $id]);
        $procesoMaterialEntrada=$this->paginate($query,['scope'=>'mis_ProcesoMaterialEntrada']);
        $this->set(compact('procesoMaterialEntrada'));

        $this->loadModel('ProveedoresMaterial');
        $query=$this->ProveedoresMaterial->find('all')
                                        ->where(['material_id' => $id]);
        $proveedoresMaterial=$this->paginate($query,['scope'=>'mis_ProveedoresMaterial']);
        $this->set(compact('proveedoresMaterial'));

                                         
        $this->set('material', $material);
        $this->set('_serialize', ['material']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($external_id=null,$external_name=null)
    {
        $material = $this->Material->newEntity();
        if($external_name!=null){
            $material->$external_name=$external_id;
        }
        if ($this->request->is('post')) {
            $material = $this->Material->patchEntity($material, $this->request->getData());
            if ($this->Material->save($material)) {
                $this->Flash->success(__('The material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material could not be saved. Please, try again.'));
        }
        $familias = $this->Material->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Material->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Material->Ivas->find('list', ['limit' => 200]);
        $this->set(compact('material', 'familias', 'monedas', 'ivas'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Material id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $material = $this->Material->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Materiales', 'ProcesoMaterialEntrada', 'ProveedoresMaterial']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $material = $this->Material->patchEntity($material, $this->request->getData());
            if ($this->Material->save($material)) {
                $this->Flash->success(__('The material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material could not be saved. Please, try again.'));
        }
        $familias = $this->Material->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Material->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Material->Ivas->find('list', ['limit' => 200]);
        $this->set(compact('material', 'familias', 'monedas', 'ivas'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Material id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $material = $this->Material->get($id);
        if ($this->Material->delete($material)) {
            $this->Flash->success(__('The material has been deleted.'));
        } else {
            $this->Flash->error(__('The material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
