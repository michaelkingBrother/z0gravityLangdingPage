<?php
namespace App\Controller;
use Cake\I18n\Time;
use App\Controller\AppController;

/**
 * LpListArticles Controller
 *
 * @property \App\Model\Table\LpListArticlesTable $LpListArticles
 *
 * @method \App\Model\Entity\LpListArticle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LpListArticlesController extends AppController
{
    public function isAuthorized($role)
    {
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
        $lpListArticles = $this->paginate($this->LpListArticles);

        $this->set(compact('lpListArticles'));
    }

    /**
     * View method
     *
     * @param string|null $id Lp List Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lpListArticle = $this->LpListArticles->get($id, [
            'contain' => [],
        ]);

        $this->set('lpListArticle', $lpListArticle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lpListArticle = $this->LpListArticles->newEntity();
        if ($this->request->is('post')) {
            $lpListArticle = $this->LpListArticles->patchEntity($lpListArticle, $this->request->getData());
            if ($this->LpListArticles->save($lpListArticle)) {
                $this->Flash->success(__('The lp list article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lp list article could not be saved. Please, try again.'));
        }
        $this->set(compact('lpListArticle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lp List Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lpListArticle = $this->LpListArticles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lpListArticle = $this->LpListArticles->patchEntity($lpListArticle, $this->request->getData());
            if ($this->LpListArticles->save($lpListArticle)) {
                $this->Flash->success(__('The lp list article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lp list article could not be saved. Please, try again.'));
        }
        $this->set(compact('lpListArticle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lp List Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lpListArticle = $this->LpListArticles->get($id);
        if ($this->LpListArticles->delete($lpListArticle)) {
            $this->Flash->success(__('The lp list article has been deleted.'));
        } else {
            $this->Flash->error(__('The lp list article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function translate($id=null){
        
        $lpListArticle = $this->LpListArticles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $lpListArticle = $this->LpListArticles->patchEntity($lpListArticle, $this->request->getData());

            if ($this->LpListArticles->save($lpListArticle)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('lpListArticle'));
    }
    public function time($id=null){
        $lpListArticle = $this->LpListArticles->get($id, [
            'contain' => [],
        ]);
        $time = $lpListArticle->modified->i18nFormat('yyyy-MM-dd');
        
        $this->set(compact('lpListArticle'));
    }     
}
