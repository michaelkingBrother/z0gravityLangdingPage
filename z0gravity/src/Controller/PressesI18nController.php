<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PressesI18n Controller
 *
 * @property \App\Model\Table\PressesI18nTable $PressesI18n
 *
 * @method \App\Model\Entity\PressesI18n[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PressesI18nController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pressesI18n = $this->paginate($this->PressesI18n);

        $this->set(compact('pressesI18n'));
    }

    /**
     * View method
     *
     * @param string|null $id Presses I18n id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pressesI18n = $this->PressesI18n->get($id, [
            'contain' => [],
        ]);

        $this->set('pressesI18n', $pressesI18n);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pressesI18n = $this->PressesI18n->newEntity();
        if ($this->request->is('post')) {
            $pressesI18n = $this->PressesI18n->patchEntity($pressesI18n, $this->request->getData());
            if ($this->PressesI18n->save($pressesI18n)) {
                $this->Flash->success(__('The presses i18n has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses i18n could not be saved. Please, try again.'));
        }
        $this->set(compact('pressesI18n'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Presses I18n id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pressesI18n = $this->PressesI18n->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pressesI18n = $this->PressesI18n->patchEntity($pressesI18n, $this->request->getData());
            if ($this->PressesI18n->save($pressesI18n)) {
                $this->Flash->success(__('The presses i18n has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses i18n could not be saved. Please, try again.'));
        }
        $this->set(compact('pressesI18n'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Presses I18n id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pressesI18n = $this->PressesI18n->get($id);
        if ($this->PressesI18n->delete($pressesI18n)) {
            $this->Flash->success(__('The presses i18n has been deleted.'));
        } else {
            $this->Flash->error(__('The presses i18n could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
