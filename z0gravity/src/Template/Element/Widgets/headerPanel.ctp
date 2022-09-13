<section class='headerPanel'>
    <div class="container">
        <div class='row mx-auto text-left'>
            <div class='position-relative h-100 p-0 banelContent'>
                    <h2><?php echo ($lpImage->lp_content->title)?></h2>
                    <p class='col-md-4'><?= __($lpImage->lp_content->description) ?></p><br>
                    <button  type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#videoModal"><?= __($lpImage->lp_content->btn_content) ?></button><br><br>
                    <button class="btn rounded-circle iconPlay" data-toggle="modal" data-target="#videoModal"><i class="fa fa-thin fa-play"></i></button><span>  &nbsp; <?= __('Voir la vidéo') ?></span>               
                <div class="videoThumbnai">
                    <?= $this->Html->media("video.mp4", [
                        'poster'=> $lpImage->image_url,
                        'width' => '733',
                        'height' => '412',
                        'type' => 'video/ogg',
                        'class'=> 'img-fluid',
                    ])?>
                    <span class='iconMute'><i class="fa fa-solid fa-volume-xmark"></i></span>
                </div>
                <!-- <div class="testing">
                <?php 
                    // $lpImage = $this->requestAction('LpImages/randomImage'); 
                    // debug($lpImage); exit();
                    echo $this->Html->image($lpImage->image_url);

                ?>
                </div> -->
            </div>       
        </div>
    </div>
</section>
<script>
    document.querySelector(".banelContent>h2").innerHTML = document.querySelector(".banelContent>h2").innerHTML.replaceAll(".",".<br>");
</script>