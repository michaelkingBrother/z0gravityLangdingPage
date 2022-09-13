<section class="nosArticles d-none d-md-block">
    <div class="z0title">
        <h2><?= __('Nos articles')?></h2>
    </div>
    <div class="nosArticleCard container">
        <div class="row articles d-md-flex justify-content-between flex-wrap">
            <?php $i = 1 ?>
            <?php foreach($lpListArticles as $lpListArticle):?>    
                <div class="nosArticlesCard d-flex justify-content-between" id="<?= h('nosArticlesCard'.$i++)?>">
                    <?=$this->Html->image($lpListArticle->img_url, ['alt' => 'article thumbnail', 'class'=>'articlesCard']);?>
                    <div class="d-flex flex-column justify-content-between h-100">    
                        <h5 class='card-title'><?= __($lpListArticle->title)?></h5>
                        <div>
                            <p class="card-tag text-uppercase px-2 m-0 d-inline-block"><?= __($lpListArticle->category)?></p>
                            <span class ="px-2">
                                <!-- <?php echo $lpListArticle->modified->i18nFormat('yyyy-MM-dd') ?> -->
                                <?php echo $lpListArticle->modified->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?>
                            </span>
                        </div>
                        <p class="card-text h-100"><?= __($lpListArticle->description)?></p>
                        <?= $this->Html->link( __('Lire l’article'), 
                            $lpListArticle->article_url, 
                            ['escape' => false, 
                            'title' => __('Lire l’article'),
                            'class' => 'btn btn-outline-info rounded-pill p-0',
                            'role' => 'button',
                            ])?>
                    </div>
                </div>
                <?php if ($i == 4) {$i=='';} ?>
            <?php endforeach; ?>
            <!-- <?php foreach($lpListArticles as $lpListArticle):?>    
                <div class="articlesCard position-relative" id="<?= h('nosArticlesCard'.$i++)?>">
                    <?=$this->Html->image($lpListArticle->img_url, ['alt' => 'article thumbnail', 'class'=>'']);?>    
                    <h5 class='card-title'><?= __($lpListArticle->title)?></h5>
                    <p class="card-tag text-uppercase p-2 d-inline-block"><?= __($lpListArticle->category)?></p><span><?php echo $lpListArticle->modified->i18nFormat('yyyy-MM-dd') ?></span>
                    <p class="card-text h-100"><?= __($lpListArticle->description)?></p>
                    <?= $this->Html->link( __('Lire l’article'), 
                        $lpListArticle->presse_url, 
                        ['escape' => false, 
                        'title' => __('Lire l’article'), 
                        'class' => 'btn btn-outline-info rounded-pill position-absolute',
                        ])?>
                    
                </div>
            <?php endforeach; ?> -->
        </div>
    </div>

    <div class="row mx-auto readMoreArticles">
        <button class='btn btn-primary rounded-pill mx-auto'><?= __('Voir tous les articles')?></button>
    </div>
</section>



<!-- <section class="nosArticles d-none d-md-block">
    <div class="z0title">
        <h2><?= __('Nos articles')?></h2>
    </div>
    <div class="row articles">
        <div class="col-4 d-flex align-items-stretch">
        <div class="card p-0 position-relative" id='articlesCard1'>
            <img class="card-img-top mb-0" src="/img/article1.jpg" alt="ZG_icon_home_entreprise">
            <div class="card-body h-100">
                <h5 class="card-title"><?= __('Comment choisir votre logiciel de gestion de projet')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('Bien choisir son logiciel de gestion de projet ou son outil de gestion de projet est une question cruciale pour les entreprises.')?></p>
                <a href="https://www.z0gravity.com/leblog/logiciel-de-gestion-de-projet/" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
        </div>
        </div>
        <div class="col-8 d-flex align-items-stretch">
        <div class="card p-0 h-100 mx-auto position-relative">
            <div class="row" id='articlesCard2'>
            <img class="col-4 p-0" src="/img/article2.jpg" alt="article2">
            <div class="card-body col-7 p-0">
                <h5 class="card-title"><?= __('Logiciel de gestion de projet secteur public')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('z0 Gravity est un logiciel de gestion de projet développé avec et pour des collectivités territoriales. Grâce à son interface simple et son tableau de bord embarqué, ce logiciel de gestion de projet secteur public permet de répondre efficacement aux contraintes de temps et de budget des collectivités territoriales.')?></p>
                <a href="https://www.z0gravity.com/leblog/logiciel-de-gestion-de-projets-secteur-public/" class="btn btn-outline-info rounded-pill position-absolute bottom-0"><?= __('Lire l’article')?></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-6 d-flex align-items-stretch">
        <div class="card p-0 mx-auto position-relative" id='articlesCard3'>
            <div class="card-body h-100">
                <h5 class="card-title"><?= __('Logiciel de gestion de projet en ligne SaaS')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('La gestion d’un projet implique en réalité de réaliser une succession de tâches très différentes pour l’entreprise et qu’il faut, bien souvent, mener de front : planification, répartition des ressources, des tâches, activités de reporting, suivi de l’avancée des projets, de la consommation des budgets, etc.')?></p>
                <a href="https://www.z0gravity.com/leblog/logiciel-gestion-de-projet-en-ligne/" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
        </div>
        </div>
        <div class="col-6 d-flex align-items-stretch">
        <div class="card mx-auto position-relative" id='articlesCard4'>
            <div class="card-body h-100">
                <h5 class="card-title"><?= __('7 conseils clés pour bien s’équiper d’un outil de gestion de projet')?></h5>
                <p class="card-tag text-uppercase p-2 d-inline-block"><?= __('eNTREPRISES')?></p><span><?= __('15 min')?></span>
                <p class="card-text h-100"><?= __('Vous avez décidé qu’il était temps d’investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivité et en efficacité dans la gestion de vos affaires courantes et, par la même occasion, en faire profiter tous les services ? C’est une très bonne idée.')?></p>
                <a href="https://www.z0gravity.com/leblog/outil-de-gestion-de-projet-7-conseils-cles-pour-bien-sequiper/" class="btn btn-outline-info rounded-pill position-absolute bottom-0 start-0"><?= __('Lire l’article')?></a>
            </div>
        </div>
        </div>
        <div class="row mx-auto readMoreArticles">
            <button class='btn btn-primary rounded-pill mx-auto'><?= __('Voir tous les articles')?></button>
        </div>
        
    </div>
</section> -->