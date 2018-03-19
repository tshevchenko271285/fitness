<?php
$background = get_field('banner_image') ? 'style="background-image: url('.get_field('banner_image').')"' : '';
?>
<section id="blog-header" class="parallax-section" <?php echo $background; ?> >
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h3 class="wow bounceIn" data-wow-delay="0.9s"><?php echo bloginfo( 'name' ); ?></h3>
                <h1 class="wow fadeInUp" data-wow-delay="1.6s"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>