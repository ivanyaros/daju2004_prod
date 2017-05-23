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
            'contain' => ['Material', 'Localizaciones', 'EntradasMaterial']
        ];
        $materiales = $this->paginate($this->Materiales);

        $this->set(compact('materiales'));
        $this->set('_serialize', ['materiales']);
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
            'contain' => ['Material', 'Localizaciones', 'EntradasMaterial', 'Objetos']
        ]);

        $this->set('materiale', $materiale);
        $this->set('_serialize', ['materiale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materiale = $this->Materiales->newEntity();
        if ($this->request->is('post')) {
            $materiale = $this->Materiales->patchEntity($materiale, $this->request->getData());
            if ($this->Materiales->save($materiale)) {
                $this->Flash->success(__('The materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiale could not be saved. Please, try again.'));
        }
        $material = $this->Materiales->Material->find('list', ['limit' => 200]);
        $localizaciones = $this->Materiales->Localizaciones->find('list', ['limit' => 200]);
        $entradasMaterial = $this->Materiales->EntradasMaterial->find('list', ['limit' => 200]);
        $objetos = $this->Materiales->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('materiale', 'material', 'localizaciones', 'entradasMaterial', 'objetos'));
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
            'contain' => ['Objetos']
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
        $entradasMaterial = $this->Materiales->EntradasMaterial->find('list', ['limit' => 200]);
        $objetos = $this->Materiales->Objetos->find('list', ['limit' => 200]);
        $this->set(compact('materiale', 'material', 'localizaciones', 'entradasMaterial', 'objetos'));
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
