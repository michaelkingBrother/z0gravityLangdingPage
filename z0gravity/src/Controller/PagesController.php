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

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\I18n\I18n;
use Cake\I18n\Time;



/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $lpImage = '';
        $testimonials='';
        $lpListArticles ='';//query 
        $this->loadModel('LpContents');
        $this->loadModel('LpImages');
        $this->loadModel('PressesTestimonials');
        $this->loadModel('LpListArticles');

        // $lpImage = $this->LpImages->find('all', array(
        //     'recursive' => 1,
        //     'join' => array(
        //             'table' => 'lp_contents',
        //             'alias' => 'LpContents',
        //             'type' => 'inner',
        //             'conditions' => 'LpContents.id = LpImages.lp_contents_id'
        //         ),
                
        //     'fields' => array(
        //         'LpImages.id',
        //         'LpImages.image_url',
        //         'LpImages.background_color',
        //         'LpImages.text_color',
        //         'LpImages.lp_contents_id',
        //         'LpContents.id',
        //         'LpContents.title',
        //         'LpContents.description',
        //         'LpContents.video_url',
        //         'LpContents.btn_content',
        //     ),
        //     'order' => 'rand()'
        // ))->first();
        // // debug( $lpImage);
        // /*
        // $lpImage = $this->LpContents->find('all', array(
        //     'recursive' => 1,
        //     // 'joins' => array(
        //     //     array(
        //     //         'table' => 'lp_contents',
        //     //         'alias' => 'LpContents',
        //     //         'type' => 'inner',
        //     //         'conditions' => 'LpContents.id = LpImages.lp_contents_id'
        //     //     ),
        //     // )
        //     // 'order' => 'rand()',
        //     'contain' => array('LpImages')
        // ))->first();
        // debug( $lpImage);
        // */
        // // exit;
        // // I18n::setLocale('vi');
        // // $this->loadModel('Articles');
        $lpImage = $this->LpImages->find('all', [
            'contain' => ['LpContents'],
            'recursive' => 1,
            'order' => 'rand()',
        ])->first();

        $this->set('lpImage', $lpImage);
        
        $testimonials = $this->PressesTestimonials->find('all', [
            'limit' => 3,
            'order' => 'rand()',
        ])->all();
        $lpListArticles = $this->LpListArticles->find('all',[
            'limit'=>4,
            'order'=> 'rand()',
        ])->all();
        $this->set(compact('lpImage','testimonials','lpListArticles',));
        $this->render('home');
        }
        // public function changeLanguage(){
        //     I18n::locale($locale);
        // }
        // public function changeLanguage(){
        //     if($this->request->is('post')){
        //         return $locale = $this->request->data('locale');
                
        //     }
        // }
        // public function changeLanguage()
        // {
        //     $this->I18n::setLocale('vi_VI');
        // }
        // public function changeLang() { 
        //     $this->autoRender = false; 
        //     $this->Session->write('Config.language','deu'); 
        //     Configure::write('Config.language','deu'); 
        //     $this->Session->setFlash(__('Language changed succefully.')); 
        //     $this->redirect($this->referer()); 
        // }
        
}
