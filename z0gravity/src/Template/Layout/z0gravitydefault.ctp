<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Helper;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <?=  $this->Html->meta(
        'favicon.png',
        '/favicon.png',
        ['type' => 'icon']
    ); ?>

    <!-- ht-import bootstrap css+js  -->
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end import bootstrap css+js  -->
    
    <!-- ht-import google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- end import google font  -->   
    
    <?= $this->Html->css('home.css') ?>
    
    <!-- end reset css -->

</head>
<body>
<?= $this->Flash->render() ?>

    <div class="container-fluid sticky-top mx-auto bg-light">
    <!-- ht-z0gravity topbar -->    
        <nav class="navbar navbar-expand-lg navbar-light mx-auto">
            <h1>
                <?= $this->html->image(
                    'z0gravity-Logo.png',[
                        'alt'=>'Logo z0gravity',
                        'height'=>'40px',
                        'url'=> [
                            'controller'=>'Pages',
                            'action'=>'display','home',
                        ]
                    ]
                )?>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('ENTREPRISES') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('SECTEUR PUBLIC') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('À PROPOS') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('CONTACT') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('BLOG') ?></a></li>
                    <li class="nav-item d-block d-md-none"><a href="#" class="nav-link"><?= __('Log Out') ?></a></li>
                </ul>
            </div> 
        </nav>
    </div>
    
    <div class="main">
        <?= $this->fetch('content') ?>
    </div>
    
<!-- ht-z0gravity footer -->
    
    <footer>
        <div class="container mx-auto">
            <div class="row text-center text-md-start">

<!-- ht-z0gravity footer info-->

                <div class="col-12 mx-auto">
                    <div class="row footerInfo">
                        <div class="col-md-4 footerLogo">
                            <img src="/img/z0_Gravity_Logo_BlancBleu-1.svg" alt="logo" class='img-fluid'>
                            <p><?= __('Ensemble, on va plus loin.')?></p>
                        </div>
                        <ul class="col-md-3 list-unstyled text-white mt-0 pt-0 pb-0 mb-0 d-flex flex-column justify-content-between footerMenu">
                            <li class='pt-0 mt-0'><?= __('Entreprises')?></li>
                            <li><?= __('Collectivités')?></li>
                            <li><?= __('À propos')?></li>
                            <li><?= __('Contact')?></li>
                            <li><?= __('Blog')?></li>
                        </ul>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="socialLink">
                                <p class='text-uppercase'><?= __('SUIVEZ-NOUS')?></p>
                                <a href="#"><i class="fa fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-brands fa-vimeo-v"></i></a> 
                            </div>
                            <button type='button' class='btn btn-outline-info rounded-pill' data-toggle="modal" data-target="#langguage">
                                <i class="fa-solid fa-globe"></i><span>&nbsp; <?= __('changer de région')?></span>
                            </button>
                        </div>
                    </div>
                </div>
<!-- end ht-z0gravity footer info-->

<!-- ht-z0gravity coppyright-->
                <div class='coppyRight'>
                    <ul class="list-unstyled d-flex flex-column flex-md-row">
                        <ul class='list-unstyled order-md-1 d-inline-block footerSiteLink'>
                            <li class='d-inline-block'><a href="#" class='text-decoration-none'><?= __('Plan du site')?></a></li>
                            <li class='d-inline-block'><a href="#" class='text-decoration-none'><?= __('Contactez-nous')?></a></li>
                            <li class='d-inline-block'><a href="#" class='text-decoration-none'><?= __('Mentions légales')?></a></li>
                        </ul>
                        <li class='order-md-0'><a href="#" class='text-decoration-none'><?= __('© 2019 Globalsi SAS')?></a></li>
                    </ul>
                    </div>
                </div>
<!-- end ht-z0gravity coppyright-->
            </div>
        </div>
    </footer>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->js('bootstrap.min.js') ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
