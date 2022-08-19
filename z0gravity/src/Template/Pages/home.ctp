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

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'z0gravity: make by ht.hophuoctrung@gmail.com';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?=  $this->Html->meta(
    'favicon.png',
    '/favicon.png',
    ['type' => 'icon']
    ); ?>
    
    <!-- ht-reset css -->

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

<!-- ht-z0gravity header -->

    <header>
        <div class="container mx-auto">
                
<!-- ht-z0gravity topbar -->    

            <nav class="navbar navbar-expand-lg navbar-light">
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

<!-- end ht-z0gravity topbar -->

<!-- ht-z0gravity banelContent -->
        <div class="container">
            <div class='row mx-auto text-left'>
                <div class='position-relative h-100 p-0 banelContent'>
                        <h2><?= __('Fédérateur.')?><br><?= __('Personnalisé.') ?><br><?= __('Souple & adapté.') ?></h2>
                        <p class='col-md-4'><?= __('Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.') ?></p><br>
                        <button  type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#exampleModal"><?= __('Découvrez z0 Gravity') ?></button><br><br>
                        <button class="btn rounded-circle iconPlay" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-thin fa-play"></i></button><span>  &nbsp; <?= __('Voir la vidéo') ?></span>               
                    <div class="videoThumbnai">
                        <?= $this->Html->media('video.mp4', [
                            'poster'=> 'videopanel.jpg',
                            'width' => '733',
                            'height' => '412',
                            'class'=> 'img-fluid',
                        ])?>
                        <span class='iconMute'><i class="fa fa-solid fa-volume-xmark"></i></span>
                    </div>
                </div>       
            </div>
        </div>
<!-- ht-z0gravity carousel -->
        <div class="container-fluid mx-auto p-0">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide h-100" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                                <p class='text-uppercase blockquoteTag'>PRESSE</p>
                                <img src="/img/logo_egis.png"alt="logo egis">
                                <p><i><?= __('
                                Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.
                                ')?></i></p>
                                <footer class="blockquote-footer">
                                    <cite title="Stéphane Touchet"><?= __('Stéphane Touchet')?></cite>
                                    <div class="d-flex flex-column flex-md-row justify-content-between">
                                    <p class='d-inline-block'><?= __('PMO service client Orange Sud-Ouest')?></p>
                                    <p class='d-inline-block text-end'><?= __('Lire l’article ')?><i class="fa fa-thin fa-arrow-up-right-from-square"></i></p>
                                    </div>
                                </footer>
                            
                            <div class="position-absolute slideBtn">
                                <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                                <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                            </div>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                                <p class='text-uppercase blockquoteTag p-4'><?= __('PRESSE')?></p>
                                <img src="/img/logo_egis.png"alt="logo egis">
                                <p><i><?= __('
                                Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.
                                ')?></i></p>
                                <footer class="blockquote-footer">
                                    <cite title="Stéphane Touchet"><?= __('Stéphane Touchet')?></cite>
                                    <div class="d-flex flex-column flex-md-row justify-content-between">
                                    <p class='d-inline-block'><?= __('PMO service client Orange Sud-Ouest')?></p>
                                    <p class='d-inline-block text-end'><?= __('Lire l’article ')?><i class="fa fa-thin fa-arrow-up-right-from-square"></i></p>
                                    </div>
                                </footer>
                            
                            <div class="position-absolute slideBtn">
                                <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                                <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                            </div>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                            <p class='text-uppercase blockquoteTag p-4'><?= __('PRESSE')?></p>
                                <img src="/img/logo_egis.png"alt="logo egis">
                                <p><i><?= __('
                                Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.
                                ')?></i></p>
                                <footer class="blockquote-footer">
                                    <cite title="Stéphane Touchet"><?= __('Stéphane Touchet')?></cite>
                                    <div class="d-flex flex-column flex-md-row justify-content-between">
                                    <p class='d-inline-block'><?= __('PMO service client Orange Sud-Ouest')?></p>
                                    <p class='d-inline-block text-end'><?= __('Lire l’article ')?><i class="fa fa-thin fa-arrow-up-right-from-square"></i></p>
                                    </div>
                                </footer>
                           
                            <div class="position-absolute slideBtn">
                                <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                                <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                            </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </header>
<!-- end header  -->

<!-- ht-z0gravity description -->
    <section class='z0Project text-white'>
<!-- ht-z0gravity project description with image -->
    <div class="container">   
        <div class="row z0title z0ProjectImage">
            <h2 class='col-md-2 d-inline-block my-auto'><?= __('POUR FAIRE COURT.')?></h2>
            <p class='col-md-10 d-inline-block my-auto text-center text-md-start'> <b><?= __('Z0 Gravity est un logiciel de gestion multi-projets :')?></b> <?= __('quelle que soit leur complexité, vous gérez facilement les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.')?></p>
        </div>
    </div>
        <div class="card bigcard container-md">
            <div class="row card-body">
               <div class="col-md-8 text-center text-md-start cardbackground">
                  <h2 class="card-title text-white"><?= __('Notre objectif :')?></h2>
                   <p class="card-text col-md-8"><?= __('C’est aider tout type d’organisation à réaliser ses projets avec un seul mot d’ordre :')?></p>
                   <p><strong><?= __('sim-pli-ci-té !')?></strong></p>
                </div>
                <img class="col-md-4 img-fluid" src="/img/ZG_HomeObjectif_2x.jpg" alt="sans"/>
            </div>
        </div>
    </div>
<!-- ht-z0gravity project description with video -->
    <div class="contaier-fluid">
        <div class="row mx-auto z0title z0ProjectVideo ">
            <h2><?= __('Découvrez l’univers z0 Gravity')?></h2>
            <p><?= __('Plannings, budgets, calendriers… En un clin d\'œil, vous avez une vision globale et stratégique de l\'avancée de vos projets en temps réel !')?></p><br><br>
            <button type="button" class="btn btn-warning rounded-pill"><i class="fa fa-thin fa-play"></i>&nbsp; <?= __('Présentation vidéo')?></button>
        </div>
        <div class="row mx-auto z0gravityMobiDesktop">
            <div class="d-flex justify-content-center">
                <img src="/img/z0Ggravity_mobi_desktop.png" alt="z0gravity_mobi_desktop" class='col-12 img-fluid'>
            </div>
        </div>
    </div>
    </section>
<!-- ht-z0gravity company connect -->
    <section class='container z0Company'>
            
    <div class="z0title">
        <h2><?= __('Vous êtes…')?></h2>
    </div>

<!-- ht-z0gravity company 3 card short description-->  
        
        <div class="row mx-auto text-center d-flex justify-content-center descritonCard">
            <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mx-auto">
                <img class="card-img-top" src="/img/ZG_icon_home_entreprise@3x.png" alt="ZG_icon_home_entreprise">
                <div class="card-body">
                    <h5 class="card-title"><?= __('Une entreprise')?> </h5>
                    <p class="card-text h-100"><?= __('Jouez collectif : fédérez vos équipes autour  d\'un objectif commun.')?></p>
                    <a href="#" class="btn btn-primary rounded-pill"><?= __('3,2,1… Go !')?></a>
                </div>
            </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mx-auto">
                <img class="card-img-top" src="/img/ZG_icon_home_collectivites@3x.png" alt="ZG_icon_home_collectivites">
                <div class="card-body">
                    <h5 class="card-title"><?= __('Une collectivité')?></h5>
                    <p class="card-text h-100"><?= __('Rassemblez les acteurs de votre projet via un logiciel commun !')?></p>
                    <a href="#" class="btn btn-danger rounded-pill"><?= __('Découvrez comment')?></a>
                </div>    
            </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mx-auto">
                <img class="card-img-top" src="/img/ZG_icon_home_promeneur@3x.png" alt="ZG_icon_home_promeneur">
                <div class="card-body">
                    <h5 class="card-title"><?= __('Un promeneur égaré')?></h5>
                    <p class="card-text h-100"><?= __('Bienvenue !  Installez-vous et  laissez-vous guider.')?></p>
                    <a href="#" class="btn btn-warning rounded-pill"><?= __('Commençons par ici')?></a>
                </div>
            </div>
            </div>
        </div>

<!-- end ht-z0gravity company 3 card short description--> 

<!-- ht- ht-z0gravity company Nos articles  -->
<section class="nosArticles d-none d-md-block">
    <div class="z0title">
        <h2><?= __('Nos articles')?></h2>
    </div>
    <div class="row articles">
        <div class="col-4 d-flex align-items-stretch">
        <div class="card h-100 p-0" id='articlesCard1'>
            <img class="card-img-top mb-0" src="/img/ZG_icon_home_entreprise@3x.png" alt="ZG_icon_home_entreprise">
            <div class="card-body h-100 position-relative">
                <h5 class="card-title"><?= __('Comment choisir votre logiciel de gestion de projet')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('Bien choisir son logiciel de gestion de projet ou son outil de gestion de projet est une question cruciale pour les entreprises.')?></p>
                <a href="#" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
        </div>
        </div>
        <div class="col-8 d-flex align-items-stretch" id='articlesCard2'>
        <div class="card h-100 p-0 mx-auto">
            <div class="row">
            <img class="col-5 h-100" src="/img/ZG_icon_home_entreprise@3x.png" alt="ZG_icon_home_entreprise">
            <div class="card-body col-7 h-100 position-relative">
                <h5 class="card-title"><?= __('Logiciel de gestion de projet secteur public')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('z0 Gravity est un logiciel de gestion de projet développé avec et pour des collectivités territoriales. Grâce à son interface simple et son tableau de bord embarqué, ce logiciel de gestion de projet secteur public permet de répondre efficacement aux contraintes de temps et de budget des collectivités territoriales.')?></p>
                <a href="#" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-6 d-flex align-items-stretch">
        <div class="card h-100 p-0 mx-auto">
            <div class="card-body h-100 position-relative">
                <h5 class="card-title"><?= __('Logiciel de gestion de projet en ligne SaaS')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('La gestion d’un projet implique en réalité de réaliser une succession de tâches très différentes pour l’entreprise et qu’il faut, bien souvent, mener de front : planification, répartition des ressources, des tâches, activités de reporting, suivi de l’avancée des projets, de la consommation des budgets, etc.')?></p>
                <a href="#" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
        </div>
        </div>
        <div class="col-6 d-flex align-items-stretch">
        <div class="card mx-auto h-100">
            <div class="card-body h-100 position-relative">
                <h5 class="card-title"><?= __('7 conseils clés pour bien s’équiper d’un outil de gestion de projet')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('Vous avez décidé qu’il était temps d’investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivité et en efficacité dans la gestion de vos affaires courantes et, par la même occasion, en faire profiter tous les services ? C’est une très bonne idée.')?></p>
                <a href="#" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
        </div>
        </div>
        <div class="row mx-auto readMoreArticles">
            <button class='btn btn-primary rounded-pill mx-auto'><?= __('Voir tous les articles')?></button>
        </div>
        
    </div>
</section>    

<!-- ht-z0gravity call action button-->
    <div class="z0title callAction ">
        <h2>
            <b><?= __('Assez parlé de nous.')?></b><br>
            <?= __('Parlez-nous de vous !')?>
        </h2>
    </div>
    <div class="row mx-auto callActionBtn">
        <button class='btn btn-warning rounded-pill text-white mx-auto'><?= __('On discute !')?></button>
    </div>

<!-- end ht-z0gravity call action button-->
    </section>

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

<!-- ht-z0gravity hidden content--> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <div class="embed-responsive embed-responsive-16by9 mx-auto">
        <iframe max-width="640" height="360" src="https://www.youtube.com/embed/nCC5_gOIEhg" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</div>
<!-- ht-g0gravity showVideo  -->
<!-- Modal -->
<div class="modal fade" id="langguage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content mx-auto pt-0">
            <div class="modal-header flex-md-column-reverse">
                <h2 class="modal-title align-self-md-start p-0 m-0"><?= __('Changer de région')?></h2>
                <button type="button" class="close align-self-md-end p-0 m-0 position-absolute" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fa fa-thin fa-xmark"></i></span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row">
                    <p><?= __('Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.')?></p>
                    <ul class="list-unstyled row">
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="#"><?= __('Vietnamese')?></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->css('bootstrap.min.css') ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
