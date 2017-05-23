<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proceso Controller
 *
 * @property \App\Model\Table\ProcesoTable $Proceso
 *
 * @method \App\Model\Entity\Proceso[] paginate($object = null, array $settings = [])
 */
class ProcesoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Centros']
        ];
        $proceso = $this->paginate($this->Proceso);

        $this->set(compact('proceso'));
        $this->set('_serialize', ['proceso']);
    }

    /**
     * View method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proceso = $this->Proceso->get($id, [
            'contain' => ['Familias', 'Monedas', 'Ivas', 'Centros', 'Material', 'Producto', 'Ordens']
        ]);

        $this->set('proceso', $proceso);
        $this->set('_serialize', ['proceso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proceso = $this->Proceso->newEntity();
        if ($this->request->is('post')) {
            $proceso = $this->Proceso->patchEntity($proceso, $this->request->getData());
            if ($this->Proceso->save($proceso)) {
                $this->Flash->success(__('The proceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso could not be saved. Please, try again.'));
        }
        $familias = $this->Proceso->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Proceso->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Proceso->Ivas->find('list', ['limit' => 200]);
        $centros = $this->Proceso->Centros->find('list', ['limit' => 200]);
        $material = $this->Proceso->Material->find('list', ['limit' => 200]);
        $producto = $this->Proceso->Producto->find('list', ['limit' => 200]);
        $this->set(compact('proceso', 'familias', 'monedas', 'ivas', 'centros', 'material', 'producto'));
        $this->set('_serialize', ['proceso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proceso = $this->Proceso->get($id, [
            'contain' => ['Material', 'Producto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proceso = $this->Proceso->patchEntity($proceso, $this->request->getData());
            if ($this->Proceso->save($proceso)) {
                $this->Flash->success(__('The proceso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proceso could not be saved. Please, try again.'));
        }
        $familias = $this->Proceso->Familias->find('list', ['limit' => 200]);
        $monedas = $this->Proceso->Monedas->find('list', ['limit' => 200]);
        $ivas = $this->Proceso->Ivas->find('list', ['limit' => 200]);
        $centros = $this->Proceso->Centros->find('list', ['limit' => 200]);
        $material = $this->Proceso->Material->find('list', ['limit' => 200]);
        $producto = $this->Proceso->Producto->find('list', ['limit' => 200]);
        $this->set(compact('proceso', 'familias', 'monedas', 'ivas', 'centros', 'material', 'producto'));
        $this->set('_serialize', ['proceso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proceso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proceso = $this->Proceso->get($id);
        if ($this->Proceso->delete($proceso)) {
            $this->Flash->success(__('The proceso has been deleted.'));
        } else {
            $this->Flash->error(__('The proceso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
