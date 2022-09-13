<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;
/**
 * LpContents Controller
 *
 * @property \App\Model\Table\LpContentsTable $LpContents
 *
 * @method \App\Model\Entity\LpContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LpContentsController extends AppController
{
    public function isAuthorized($role)
    {
        // $user = $this->Auth->user();
        // $id = $user['id'];
        // $user = $this->Users->get($id, [
        //     'contain' => ['Roles'],
        // ]);
        // if (isset($user->role->role) && $user->role->role === 'Administrator') {
        //     return true;
        // }
        // if (isset($role['user_roles_id']) && $role['user_roles_id'] === 2 && $this->request->getParam('action') === 'translate')
        if (isset($role['user_roles_id']) && $role['user_roles_id'] === 2)
            {
                return true;
            }
        return parent::isAuthorized($role);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $lpContents = $this->paginate($this->LpContents);

        $this->set(compact('lpContents'));
    }

    /**
     * View method
     *
     * @param string|null $id Lp Content id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lpContent = $this->LpContents->get($id, [
            // 'contain' => ['LpContents_title_translation', 'LpContents_description_translation', 'LpContents_btn_content_translation', 'LpImages', 'I18n'],
            'contain' => [],
        ]);

        $this->set('lpContent', $lpContent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lpContent = $this->LpContents->newEntity();
        if ($this->request->is('post')) {
            $lpContent = $this->LpContents->patchEntity($lpContent, $this->request->getData());
            if ($this->LpContents->save($lpContent)) {
                $this->Flash->success(__('The lp content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lp content could not be saved. Please, try again.'));
        }
        $this->set(compact('lpContent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lp Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lpContent = $this->LpContents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lpContent = $this->LpContents->patchEntity($lpContent, $this->request->getData());
            if ($this->LpContents->save($lpContent)) {
                $this->Flash->success(__('The lp content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lp content could not be saved. Please, try again.'));
        }
        $this->set(compact('lpContent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lp Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lpContent = $this->LpContents->get($id);
        if ($this->LpContents->delete($lpContent)) {
            $this->Flash->success(__('The lp content has been deleted.'));
        } else {
            $this->Flash->error(__('The lp content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function translate($id=null){
        $lpContent = $this->LpContents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {  
            
            $lpContent = $this->LpContents->patchEntity($lpContent, $this->request->getData());

            if ($this->LpContents->save($lpContent)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('lpContent'));
    }
}
