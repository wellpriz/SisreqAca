<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Respostas Controller
 *
 * @property \App\Model\Table\RespostasTable $Respostas
 *
 * @method \App\Model\Entity\Resposta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RespostasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $respostas = $this->paginate($this->Respostas);

        $this->set(compact('respostas'));
    }

    /**
     * View method
     *
     * @param string|null $id Resposta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resposta = $this->Respostas->get($id, [
            'contain' => []
        ]);

        $this->set('resposta', $resposta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resposta = $this->Respostas->newEntity();
        if ($this->request->is('post')) {
            $resposta = $this->Respostas->patchEntity($resposta, $this->request->getData());
            if ($this->Respostas->save($resposta)) {
                $this->Flash->success(__('The resposta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resposta could not be saved. Please, try again.'));
        }
        $this->set(compact('resposta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Resposta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resposta = $this->Respostas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resposta = $this->Respostas->patchEntity($resposta, $this->request->getData());
            if ($this->Respostas->save($resposta)) {
                $this->Flash->success(__('The resposta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resposta could not be saved. Please, try again.'));
        }
        $this->set(compact('resposta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Resposta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resposta = $this->Respostas->get($id);
        if ($this->Respostas->delete($resposta)) {
            $this->Flash->success(__('The resposta has been deleted.'));
        } else {
            $this->Flash->error(__('The resposta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
