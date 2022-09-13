<?php $this->layout = 'z0gravitydefault'?>
<header style="<?php echo $this->Html->style([
    'background-color' => $lpImage->background_color,
    'color' => $lpImage->text_color,
])?>">
<!-- end ht-z0gravity topbar -->

<!-- ht-z0gravity banelContent -->
    <?php echo $this->element('Widgets/headerPanel'); ?>
<!-- ht-z0gravity carousel -->
    <?php echo $this->element('Widgets/headerPresseTestimonialsCarousel'); ?>
           
</header>
<!-- end header  -->

<!-- ht-z0gravity description -->
    <section class='z0Project text-white'>
<!-- ht-z0gravity project description with image -->
        <div class="container">   
            <div class="row align-items-center z0title z0ProjectImage">
                <h2 class='col-md-2 offset-md-1 d-inline-block my-auto'><?= __('POUR FAIRE COURT.')?></h2>
                <p class='col-md-9 d-inline-block my-auto text-center text-md-start'> <b><?= __('Z0 Gravity est un logiciel de gestion multi-projets :')?></b> <?= __('quelle que soit leur complexité, vous gérez facilement les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.')?></p>
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
<?php echo $this->element('Widgets/nosArticle'); ?>

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
    
    
<!-- ht-z0gravity hidden content--> 

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl mx-auto">
    <div class="modal-content">
        <div class="embed-responsive embed-responsive-16by9 mx-auto">
            <iframe src=<?=$lpImage->lp_content->video_url?> title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</div>
<!-- ht-g0gravity showVideo  -->
<!-- Modal -->
<div class="modal fade" id="langguage" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl changeLanguage">
        <div class="modal-content mx-auto pt-0">
            <div class="modal-header flex-md-column-reverse pb-0">
                <h2 class="modal-title align-self-md-start p-0 m-0"><?= __('Changer de région')?></h2>
                <button type="button" class="close align-self-md-end p-0 m-0 position-absolute" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fa fa-thin fa-xmark"></i></span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row"> 
                    <p class='mb-0'>
                        <?= __('Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.')?>
                    </p>
                    <ul class="list-unstyled row">
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=fr_FR"><?= __('French')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                        <li class="d-inline-blovk col-md-3"><a href="/?lang=vi_VN"><?= __('Vietnamese')?></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

