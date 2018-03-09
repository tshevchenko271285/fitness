<?php 
	$author_id = get_the_author_meta('ID');
	$author_blog_url = get_author_posts_url( $author_id );
	$archive_link = get_month_link( get_the_date('Y'), get_the_date('n') );
?>
<div class="col-md-8 col-sm-7">

	<div class="blog-content wow fadeInUp" data-wow-delay="1s">
    	<h3><?php the_title() ?></h3>
		<span class="meta-date"><a href="<?php echo $archive_link ?>"><?php the_date('d M Y') ?></a></span>
		<span class="meta-comments"><a href="#blog-comments"><?php comments_number('no comments', '1 comment', '% comments') ?></a></span>
		<span class="meta-author"><a href="<?php echo $author_blog_url ?>"><?php the_author() ?></a></span>
		<div class="blog-clear"></div>
		<?php the_content() ?>
	</div>
    
	<div class="blog-author wow fadeInUp" data-wow-delay="1s">
		<div class="media">
			<div class="media-object pull-left">
				<a href= <?php echo $author_blog_url ?> ><img src="<?php echo get_avatar_url( $author_id ) ?>" class="img-responsive img-circle" alt="blog"></a>
			</div>
			<div class="media-body">
				<h4 class="media-heading"><?php the_author() ?></h4>
				<p><?php echo get_the_author_meta('description') ?></p>
			</div>
		</div>
	</div>

	<?php 
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>

</div>
