<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LpImages Controller
 *
 * @property \App\Model\Table\LpImagesTable $LpImages
 *
 * @method \App\Model\Entity\LpImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LpImagesController extends AppController
{
    public function isAuthorized($user)
    {
        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['LpContents'],
        ];
        $lpImages = $this->paginate($this->LpImages);

        $this->set(compact('lpImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Lp Image id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lpImage = $this->LpImages->get($id, [
            'contain' => ['LpContents'],
        ]);

        $this->set('lpImage', $lpImage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lpImage = $this->LpImages->newEntity();
        if ($this->request->is('post')) {
            $lpImage = $this->LpImages->patchEntity($lpImage, $this->request->getData());
            if ($this->LpImages->save($lpImage)) {
                $this->Flash->success(__('The lp image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lp image could not be saved. Please, try again.'));
        }
        $lpContents = $this->LpImages->LpContents->find('list', ['limit' => 200]);
        $this->set(compact('lpImage', 'lpContents'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lp Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lpImage = $this->LpImages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lpImage = $this->LpImages->patchEntity($lpImage, $this->request->getData());
            if ($this->LpImages->save($lpImage)) {
                $this->Flash->success(__('The lp image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lp image could not be saved. Please, try again.'));
        }
        $lpContents = $this->LpImages->LpContents->find('list', ['limit' => 200]);
        $this->set(compact('lpImage', 'lpContents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lp Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lpImage = $this->LpImages->get($id);
        if ($this->LpImages->delete($lpImage)) {
            $this->Flash->success(__('The lp image has been deleted.'));
        } else {
            $this->Flash->error(__('The lp image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
