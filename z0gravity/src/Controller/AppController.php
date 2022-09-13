<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize'=> 'Controller',
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'profile'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ],
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'user_email',
                        'password' => 'user_password'
                    ]
                ]
            ],
            'unauthorizedRedirect' => $this->referer()
            // 'unauthorizedRedirect' => $this->redirect([
            //     'controller' => 'Users',
            //     'action' => 'profile'
            // ])

        ]);
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        // $this->_setLocate();

    }
    public function beforeFilter(Event $event){
        $this->Auth->allow(['display', 'setLocale']);
        $this->_setLocate();
    }
    // public function beforeFilter( $event){
        // parent::beforeFilter();
        // $this->_setLocate();
        // return true;
    // }
    protected function _setLocate(){
        // $session->read('Config.language');
        // $locale = $this->Session->read('Config.language'); 
        // debug($locale );exit();
        if( $this->request->data('locale')){
            $locale = $this->request->data('locale');
        }
        if( $this->request->getQuery('lang')){
            $locale = $this->request->getQuery('lang');
        }
        
        if( empty( $locale))
        $locale = Configure::read('APP.defaultLocale');
        // I18n::locale($locale);
        I18n::setLocale($locale);
        // $this->Session->write('Config.language', $locale); 
        // $sesstion->write('Config.language', $locale);
        // debug(I18n::getLocale());
        return true;
    }
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
        // if (isset($role['role']) && $role['role'] === 'Administrator') {
        // if (isset($role->role) && $role->role === 'Administrator') {
        //     return true;
        // }
        // debug($role[user_roles_id]); exit;
        if (isset($role['user_roles_id']) && $role['user_roles_id'] === 1) {
            return true;
        }
        
        // Default deny
        return false;
    }
}
