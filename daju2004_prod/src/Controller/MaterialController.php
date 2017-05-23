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
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Objetos', 'Proceso', 'ProveedoresClientes', 'Materiales']
        ]);

        $this->set('material', $material);
        $this->set('_serialize', ['material']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $material = $this->Material->newEntity();
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
        $objetos = $this->Material->Objetos->find('list', ['limit' => 200]);
        $proceso = $this->Material->Proceso->find('list', ['limit' => 200]);
        $proveedoresClientes = $this->Material->ProveedoresClientes->find('list', ['limit' => 200]);
        $this->set(compact('material', 'familias', 'monedas', 'ivas', 'objetos', 'proceso', 'proveedoresClientes'));
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
            'contain' => ['Objetos', 'Proceso', 'ProveedoresClientes']
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
        $objetos = $this->Material->Objetos->find('list', ['limit' => 200]);
        $proceso = $this->Material->Proceso->find('list', ['limit' => 200]);
        $proveedoresClientes = $this->Material->ProveedoresClientes->find('list', ['limit' => 200]);
        $this->set(compact('material', 'familias', 'monedas', 'ivas', 'objetos', 'proceso', 'proveedoresClientes'));
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
