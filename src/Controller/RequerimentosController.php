<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requerimentos Controller
 *
 * @property \App\Model\Table\RequerimentosTable $Requerimentos
 *
 * @method \App\Model\Entity\Requerimento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequerimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tiposrequerimentos', 'Setores', 'Cursos']
        ];
        $requerimentos = $this->paginate($this->Requerimentos);

        $this->set(compact('requerimentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Requerimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requerimento = $this->Requerimentos->get($id, [
            'contain' => ['Tiposrequerimentos', 'Setores', 'Cursos']
        ]);

        $this->set('requerimento', $requerimento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requerimento = $this->Requerimentos->newEntity();
        if ($this->request->is('post')) {
            $requerimento = $this->Requerimentos->patchEntity($requerimento, $this->request->getData());
            if ($this->Requerimentos->save($requerimento)) {
                $this->Flash->success(__('The requerimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requerimento could not be saved. Please, try again.'));
        }
        $tiposrequerimentos = $this->Requerimentos->Tiposrequerimentos->find('list', ['limit' => 200]);
        $setores = $this->Requerimentos->Setores->find('list', ['limit' => 200]);
        $cursos = $this->Requerimentos->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('requerimento', 'tiposrequerimentos', 'setores', 'cursos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requerimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requerimento = $this->Requerimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requerimento = $this->Requerimentos->patchEntity($requerimento, $this->request->getData());
            if ($this->Requerimentos->save($requerimento)) {
                $this->Flash->success(__('The requerimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requerimento could not be saved. Please, try again.'));
        }
        $tiposrequerimentos = $this->Requerimentos->Tiposrequerimentos->find('list', ['limit' => 200]);
        $setores = $this->Requerimentos->Setores->find('list', ['limit' => 200]);
        $cursos = $this->Requerimentos->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('requerimento', 'tiposrequerimentos', 'setores', 'cursos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requerimento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requerimento = $this->Requerimentos->get($id);
        if ($this->Requerimentos->delete($requerimento)) {
            $this->Flash->success(__('The requerimento has been deleted.'));
        } else {
            $this->Flash->error(__('The requerimento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
