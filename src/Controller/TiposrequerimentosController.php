<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposrequerimentos Controller
 *
 * @property \App\Model\Table\TiposrequerimentosTable $Tiposrequerimentos
 *
 * @method \App\Model\Entity\Tiposrequerimento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposrequerimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tiposrequerimentos = $this->paginate($this->Tiposrequerimentos);

        $this->set(compact('tiposrequerimentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposrequerimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposrequerimento = $this->Tiposrequerimentos->get($id, [
            'contain' => []
        ]);

        $this->set('tiposrequerimento', $tiposrequerimento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposrequerimento = $this->Tiposrequerimentos->newEntity();
        if ($this->request->is('post')) {
            $tiposrequerimento = $this->Tiposrequerimentos->patchEntity($tiposrequerimento, $this->request->getData());
            if ($this->Tiposrequerimentos->save($tiposrequerimento)) {
                $this->Flash->success(__('The tiposrequerimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposrequerimento could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposrequerimento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposrequerimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposrequerimento = $this->Tiposrequerimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposrequerimento = $this->Tiposrequerimentos->patchEntity($tiposrequerimento, $this->request->getData());
            if ($this->Tiposrequerimentos->save($tiposrequerimento)) {
                $this->Flash->success(__('The tiposrequerimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposrequerimento could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposrequerimento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposrequerimento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposrequerimento = $this->Tiposrequerimentos->get($id);
        if ($this->Tiposrequerimentos->delete($tiposrequerimento)) {
            $this->Flash->success(__('The tiposrequerimento has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposrequerimento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
