<div class="description-block" id="gallery">
    <h5 class="mb-4">Gallery</h5>
    <div class="pictures magnific-gallery clearfix">
        <?php $images = get_field('gallery');
        //                    var_dump($image);
        //                    exit();
        foreach ($images as $image):
            ?>
            <figure><a href="<?= $image ?>"
                       title="Photo title"
                       data-effect="mfp-zoom-in"><img
                        src="<?= $image ?>" alt=""></a></figure>
        <?php endforeach; ?>
    </div>
</div>