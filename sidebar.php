<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitnes
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- <aside id="secondary" class="widget-area"> -->
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!-- </aside> --><!-- #secondary -->
			<div class="col-md-4 col-sm-5 wow fadeInUp" data-wow-delay="1.3s">
            
            	<div class="blog-categories">
					<h3>Categories</h3>
						<li><a href="#">Body Fitness</a></li>
						<li><a href="#">Get Online Tips</a></li>
						<li><a href="#">Aerobic Exercises</a></li>
                        <li><a href="#">Yoga Courses</a></li>
                        <li><a href="#">General Health</a></li>
                        <li><a href="#">Fit and Lift</a></li>
				</div>

				<div class="recent-post">
					<h3>Recent Posts</h3>

						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="images/blog-thumb1.jpg" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>18 May 2016</h5>
								<h4 class="media-heading"><a href="#">How to get a fitness model body within 30 days</a></h4>
							</div>
						</div>
						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="images/blog-thumb2.jpg" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>14 May 2016</h5>
								<h4 class="media-heading"><a href="#">Explore Gym Services</a></h4>
							</div>
						</div>
						<div class="media">
							<div class="media-object pull-left">
								<a href="#"><img src="images/blog-thumb3.jpg" class="img-responsive" alt="blog"></a>
							</div>
							<div class="media-body">
								<h5>10 May 2016</h5>
								<h4 class="media-heading"><a href="#">How to practice Aerobics?</a></h4>
							</div>
						</div>
				</div>
                
			</div>