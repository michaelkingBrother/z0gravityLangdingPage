<section class='headerPresseTestimonialsCarousel'>
    <div class="container-fluid mx-auto p-0">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide h-100" data-interval="false">
                <div class="carousel-inner">
                    <?php foreach ($testimonials as $testimonial):?>
                        <div class="carousel-item active">
                        <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                            <p class='text-uppercase m-0 blockquoteTag'>PRESSE</p>
                            <img src="<?=$testimonial->logo_url?>"alt="Press Logo">
                            <p><i><?= __($testimonial->description)?></i></p>
                            <footer class="blockquote-footer">
                                <cite title="Stéphane Touchet"><?= __($testimonial->author)?></cite>
                                <div class="d-flex flex-column flex-md-row justify-content-between">
                                <p class='d-inline-block'><?= __($testimonial->author_position)?></p>
                                <p class='d-inline-block text-end'>
                                    <?= $this->Html->link(
                                    __('Lire l’article ').'<i class="fa fa-thin fa-arrow-up-right-from-square p-2"></i>',
                                    $testimonial->presse_url,
                                    ['escape' => false, 
                                    'title' => __('Lire l’article'),
                                    ]
                                    )
                                    ?>   
                                </p>
                                </div>
                            </footer>
                        <div class="position-absolute slideBtn">
                            <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                            <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                        </div>
                        </blockquote>
                        </div>
                    <?php break; ?>
                    <?php endforeach; ?>
                    <?php foreach ($testimonials as $testimonial):?>
                        <div class="carousel-item">
                        <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                            <p class='text-uppercase m-0 blockquoteTag'>PRESSE</p>
                            <img src=" <?=$testimonial->logo_url?>"alt="Press Logo">
                            <p><i><?= __($testimonial->description)?></i></p>
                            <footer class="blockquote-footer">
                                <cite title="Stéphane Touchet"><?= __($testimonial->author)?></cite>
                                <div class="d-flex flex-column flex-md-row justify-content-between">
                                <p class='d-inline-block'><?= __($testimonial->author_position)?></p>
                                <p class='d-inline-block text-end'>
                                    <?= $this->Html->link(
                                    __('Lire l’article ').'<i class="fa fa-thin fa-arrow-up-right-from-square"></i>',
                                    $testimonial->presse_url,
                                    ['escape' => false, 'title' => __('Lire l’article')]
                                    )
                                    ?>   
                                </p>
                                </div>
                            </footer>
                        
                        <div class="position-absolute slideBtn">
                            <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                            <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                        </div>
                        </blockquote>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>