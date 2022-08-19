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

    <?= $this->Html->meta('icon') ?>
    
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
    <!-- end import google font  -->   
    
    <?= $this->Html->css('home.css') ?>
    
    <!-- end reset css -->

</head>
<body>

<!-- ht-z0gravity topbar -->
    <div class="container-sm">
    <div class="row">
    <div class="col-lg-11 mx-auto">
        <nav class="navbar navbar-expand-lg navbar-light">
            <?= $this->html->image(
                'z0gravity-Logo.png',
                [
                'alt'=>'logo z0 gravity',
                'height' => '40px',
                 'url' => [
                    'controller' => 'Pages',
                    'action' => 'display', 'home',
                    ]
                ])
            ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ENTREPRISES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SECTEUR PUBLIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </div>

<!-- end z0gravity topbar -->

<!-- ht-z0gravity banelVideo slide--> 
    <div class="row">
    <div class="col-lg-11 mx-auto">
        <div class="mx-auto">
            <div class="carousel slide" id="carouselExampleIndicators" data-interval="false">
                <!-- <div class="col-lg-11 mx-auto carousel-inner px-5 pb-4"> -->
                    <div class="carousel-item active">

                        <blockquote class="blockquote blockquoteSlide bg-white shadow rounded">
                            <p class='text-uppercase'>PRESSE</p>
                            <img src="/img/logo_egis.png"alt="logo egis">
                            <p class="font-italic mb-0">
                            Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.
                            </p>
                            <footer class="blockquote-footer">
                                <cite title="Stéphane Touchet">Stéphane Touchet</cite>
                                <br><span> PMO service client Orange Sud-Ouest</span><span>Lire l’article <i class="fa fa-thin fa-arrow-up-right-from-square"></i></span>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <div class='banelContent position-relative'>
                            <h2>Fédérateur.<br> Personnalisé.<br>Souple & adapté.</h2><br>
                            <p class='col-md-5'>Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.</p><br>
                            <button  type="button" class="btn btn-warning rounded-pill">Découvrez z0 Gravity</button><br><br>
                            <button class="btn rounded-circle iconPlay"><i class="fa fa-thin fa-play"></i></button><span>  &nbsp; Voir la vidéo</span>   
                            <div class="position-absolute videoThumbnai">
                                <?= $this->Html->media('video.mp4', [
                                    'poster'=> 'videopanel1.jpg',
                                    'width' => '733',
                                    'height' => '412'
                                ])?>
                                <span class='iconMute'><i class="fa-solid fa-volume-xmark"></i></span>
                            </div>
                        </div>
                        <p class='text-uppercase'>PRESSE 2</p>
                        <img src="/img/logo_egis.png"alt="logo egis">
                        <blockquote class="blockquote">
                            <p class="font-italic mb-0">
                            Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.
                            </p>
                            <footer class="blockquote-footer">
                                <cite title="Stéphane Touchet">Stéphane Touchet</cite>
                                <br><span> PMO service client Orange Sud-Ouest</span><span>Lire l’article <i class="fa fa-thin fa-arrow-up-right-from-square"></i></span>
                            </footer>
                        </blockquote>
                    </div>
                    <!-- Carousel slide-->
                    <div class="carousel-item">
                        <div class='banelContent position-relative'>
                            <h2>Fédérateur.<br> Personnalisé.<br>Souple & adapté.</h2><br>
                            <p class='col-md-5'>Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.</p><br>
                            <button  type="button" class="btn btn-warning rounded-pill">Découvrez z0 Gravity</button><br><br>
                            <button class="btn rounded-circle iconPlay"><i class="fa fa-thin fa-play"></i></button><span>  &nbsp; Voir la vidéo</span>   
                            <div class="position-absolute videoThumbnai">
                                <?= $this->Html->media('video.mp4', [
                                    'poster'=> 'videopanel1.jpg',
                                    'width' => '733',
                                    'height' => '412'
                                ])?>
                                <span class='iconMute'><i class="fa-solid fa-volume-xmark"></i></span>
                            </div>
                        </div>
                        <p class='text-uppercase'>PRESSE 3</p>
                        <img src="/img/logo_egis.png"alt="logo egis">
                        <blockquote class="blockquote">
                            <p class="font-italic mb-0">
                            Il y avait tout d’abord la sécurité, l’outil z0 Gravity a pu être rapidement validé par les équipes d’Orange Cyberdéfense.
                            </p>
                            <footer class="blockquote-footer">
                                <cite title="Stéphane Touchet">Stéphane Touchet</cite>
                                <br><span> PMO service client Orange Sud-Ouest</span><span>Lire l’article <i class="fa fa-thin fa-arrow-up-right-from-square"></i></span>
                            </footer>
                        </blockquote>
                    </div>
                    <div class="slideBtn position-absolute top-0 end-0">
                        <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                        <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- end-ht-z0gravity slide -->

    <!-- ht-z0gravity image  -->
    <div class="container">
    <div class="row">
    <div class="col-lg-11 mx-auto my-auto">
        <h2 class='col-lg-1 d-inline-block'>POUR FAIRE COURT.</h2>
        <p class="col-lg-10 d-inline-block">
        Z0 Gravity est un logiciel de gestion multi-projets : quelle que soit leur complexité, vous gérez facilement les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.
        </p>
        <div class="card bigcard">
            <div class="row card-body">
               <div class="col-sm-8 cardbackground">
                  <h2 class="card-title text-white">Notre objectif :</h2>
                   <p class="card-text col-8">C’est aider tout type d’organisation à réaliser ses projets avec un seul mot d’ordre :</p>
                   <strong>sim-pli-ci-té !</strong>
                </div>
                <img class="col-sm-4" src="/img/ZG_HomeObjectif_2x.jpg" alt="sans"/>
            </div>
        </div>
        <div class="col-sm-8 text-center mx-auto">
            <h2>Découvrez l’univers z0 Gravity</h2>
            <p>Plannings, budgets, calendriers… En un clin d'œil, vous avez une vision globale et stratégique de l'avancée de vos projets en temps réel !</p>
            <button  type="button" class="btn btn-warning rounded-pill"><i class="fa fa-thin fa-play"></i>&nbsp; Présentation vidéo</button><br><br>
        </div>
    </div>
        <img src="/img/z0Ggravity_mobi_desktop.png" alt="z0gravity_mobi_desktop" class='mx-auto'>            
    </div>
    </div>
    <!-- end-htz0gravity image  -->
    
    <!-- ht-z0gravity card -->
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-11 mx-auto text-center multiCard">
                <h2>Vous êtes…</h2>
                <div class="row gx-4">
                <div class="card col-lg-4">
                    <img class="card-img-top" src="/img/ZG_icon_home_entreprise@3x.png" alt="ZG_icon_home_entreprise">
                    <div class="card-block">
                        <h5 class="card-title">Une entreprise </h5>
                        <p class="card-text">Jouez collectif : fédérez vos équipes autour  d'un objectif commun.</p>
                        <a href="#" class="btn btn-primary rounded-pill">3,2,1… Go !</a><br><br>
                    </div>
                </div>
                <div class="card col-lg-4">
                    <img class="card-img-top" src="/img/ZG_icon_home_collectivites@3x.png" alt="ZG_icon_home_collectivites">
                    <div class="card-block">
                        <h5 class="card-title">Une collectivité </h5>
                        <p class="card-text">Rassemblez les acteurs de votre projet via un logiciel commun !</p>
                        <a href="#" class="btn btn-danger rounded-pill">Découvrez comment</a>
                    </div>
                </div>
                <div class="card col-lg-4">
                    <img class="card-img-top" src="/img/ZG_icon_home_promeneur@3x.png" alt="ZG_icon_home_promeneur">
                    <div class="card-block">
                        <h5 class="card-title">Un promeneur égaré </h5>
                        <p class="card-text">Bienvenue !  Installez-vous et  laissez-vous guider.</p>
                        <a href="#" class="btn btn-warning rounded-pill">Commençons par ici</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-ht-z0gravity multyCard  -->

    <!-- ht-z0gravity Nos articles -->
    <div class="container">
    <div class="row">
        <div class="col-lg-11 text-center mx-auto">
            <h2>Nos articles</h2>
            <div class="row articlesBlock">
                <div class="card col-lg-4 verticalCard">
                    <img class="card-img-top" src="/img/ZG_icon_home_promeneur@3x.png" alt="ZG_icon_home_promeneur">
                    <div class="card-block">
                        <h5 class="card-title">Comment choisir votre logiciel de gestion de projet</h5>
                        <p>ENTREPRISES<span>15 min</span></p>
                        <p class="card-text">Bien choisir son logiciel de gestion de projet ou son outil de gestion de projet est une question cruciale pour les entreprises.</p>
                        <a href="#" class="btn btn-outline-info rounded-pill">Lire l’article</a>
                    </div>
                </div>
                <div class="card col-lg-8 verticalCard">
                    <div class="row my-auto">
                        <img class="col-lg-5" src="/img/ZG_icon_home_promeneur@3x.png" alt="ZG_icon_home_promeneur">
                        <div class="card-block col-lg-5">
                            <h5 class="card-title">Logiciel de gestion de projet secteur public</h5>
                            <p>SECTEUR PUBLIC<span>15 min</span></p>
                            <p class="card-text">z0 Gravity est un logiciel de gestion de projet développé avec et pour des collectivités territoriales. Grâce à son interface simple et son tableau de bord embarqué, ce logiciel de gestion de projet secteur public permet de répondre efficacement aux contraintes de temps et de budget des collectivités territoriales.</p>
                            <a href="#" class="btn btn-outline-info rounded-pill">Lire l’article</a>
                        </div>
                    </div>
                </div>
                
                <div class="card col-lg-6 verticalCard">
                    <div class="card-block">
                        <h5 class="card-title">Logiciel de gestion de projet en ligne SaaS</h5>
                        <p>PMO<span>15 min</span></p>
                        <p class="card-text">La gestion d’un projet implique en réalité de réaliser une succession de tâches très différentes pour l’entreprise et qu’il faut, bien souvent, mener de front : planification, répartition des ressources, des tâches, activités de reporting, suivi de l’avancée des projets, de la consommation des budgets, etc.</p>
                        <a href="#" class="btn btn-outline-info rounded-pill">Lire l’article</a>
                    </div>
                </div>
                <div class="card col-lg-6 verticalCard">
                    <div class="card-block">
                        <h5 class="card-title">7 conseils clés pour bien s’équiper d’un outil de gestion de projet</h5>
                        <p>CLIENT<span>15 min</span></p>
                        <p class="card-text">Vous avez décidé qu’il était temps d’investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivité et en efficacité dans la gestion de vos affaires courantes et, par la même occasion, en faire profiter tous les services ? C’est une très bonne idée.</p>
                        <a href="#" class="btn btn-outline-info rounded-pill">Lire l’article</a>
                    </div>
                </div>
            </div>
            <button class='btn btn-primary rounded-pill'>Voir tous les articles</button>
            <h2>Assez parlé de nous.<br>Parlez-nous de vous !</h2>
            <button class='btn btn-warning rounded-pill'>On discute !</button>
        </div>
    </div>
    </div>
    <!-- ènd  ht-z0gravity article -->
    <!-- ht z0gravity footer -->
    <footer>
    <div class="container">
        <div class="row mx-auto">
            <div class="col-lg-9 text-left text-white">
                <div class="row justify-content-between">
                <div class="col-lg-3">
                    <img src="/img/z0_Gravity_Logo_BlancBleu-1.svg" alt="logo">
                    <p>Ensemble, on va plus loin.</p>
                </div>
                <ul class="col-lg-3 list-unstyled">
                    <li>Entreprises</li>
                    <li>Collectivités</li>
                    <li>À propos</li>
                    <li>Contact</li>
                    <li>Blog</li>
                </ul>
                <div class="col-lg-5 ">
                    <p>SUIVEZ-NOUS</p>
                    <ul class='list-unstyled'>
                        <li><i class="fa fa-brands fa-facebook-f"></i></li>
                        <li><i class="fa fa-brands fa-twitter"></i></li>
                        <li><i class="fa fa-brands fa-vimeo-v"></i></li>
                    </ul>
                    <button type='button' class='btn btn-outline-info rounded-pill' data-toggle="modal" data-target="#langguage"><i class="fa-solid fa-globe"></i> &nbsp; changer de région</button>
                </div>
                <ul class="col-12 list-unstyled">
                    <li class='d-inline-block'><a href="#">© 2019 Globalsi SAS</a></li>
                    <li class='d-inline-block'><a href="#">Plan du site</a></li>
                    <li class='d-inline-block'><a href="#">Contactez-nous</a></li>
                    <li class='d-inline-block'><a href="#">Mentions légales</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- ht-g0gravity showVideo  -->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe width="600" height="480" src="https://dood.wf/e/hhesiv2nujmpg1vwzjkz72eomgemj89w" scrolling="no" frameborder="0" allowfullscreen="true"></iframe>
        </div>
    </div>
  </div>
</div>
<!-- ht-g0gravity showVideo  -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#langguage">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="langguage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title">Changer de région</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                <p>Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.</p>
                <ul class="list-unstyled d-flex justify-content-between flex-wrap langguageList">
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                    <li class='col-lg-3'>Vietnamese</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    <!-- end ht-z0gravity Footer  -->





<div style='height:100px'></div>
<!-- <?= $this->Html->script('bootstrap.min.js') ?> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</div>
</div>
</div>
</body>
</html>
