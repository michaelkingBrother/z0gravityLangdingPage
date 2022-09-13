<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PressesTestimonials Controller
 *
 * @property \App\Model\Table\PressesTestimonialsTable $PressesTestimonials
 *
 * @method \App\Model\Entity\PressesTestimonial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PressesTestimonialsController extends AppController
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
        $pressesTestimonials = $this->paginate($this->PressesTestimonials);

        $this->set(compact('pressesTestimonials'));
    }

    /**
     * View method
     *
     * @param string|null $id Presses Testimonial id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pressesTestimonial = $this->PressesTestimonials->get($id, [
            'contain' => [],
        ]);

        $this->set('pressesTestimonial', $pressesTestimonial);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pressesTestimonial = $this->PressesTestimonials->newEntity();
        if ($this->request->is('post')) {
            $pressesTestimonial = $this->PressesTestimonials->patchEntity($pressesTestimonial, $this->request->getData());
            if ($this->PressesTestimonials->save($pressesTestimonial)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('pressesTestimonial'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Presses Testimonial id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pressesTestimonial = $this->PressesTestimonials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pressesTestimonial = $this->PressesTestimonials->patchEntity($pressesTestimonial, $this->request->getData());
            if ($this->PressesTestimonials->save($pressesTestimonial)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('pressesTestimonial'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Presses Testimonial id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pressesTestimonial = $this->PressesTestimonials->get($id);
        if ($this->PressesTestimonials->delete($pressesTestimonial)) {
            $this->Flash->success(__('The presses testimonial has been deleted.'));
        } else {
            $this->Flash->error(__('The presses testimonial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function translate($id=null){
        // $locale = $this->request->data('locale');
        // debug($locale);
        
        $pressesTestimonial = $this->PressesTestimonials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // debug($pressesTestimonial);exit;
            
            $pressesTestimonial = $this->PressesTestimonials->patchEntity($pressesTestimonial, $this->request->getData());  

            if ($this->PressesTestimonials->save($pressesTestimonial)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('pressesTestimonial'));
    }
}
