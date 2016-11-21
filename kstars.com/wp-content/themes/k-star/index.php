	<?php get_header(); ?>

	<!-- Begin About block -->
	<div class="block block-overlay2 text-center" id="about-block" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg22.png')">
		<div class="block-content">
			<div class="block-inner">
				<div class="container">
	  			<div class="about">
	  				<?php if ( have_posts() ) : query_posts('p=5');
			  		while (have_posts()) : the_post(); ?>		
	  				<div class="about-heading">
	  					<h3><?php the_title(); ?></h3>
	  				</div>
	  				<div class="about-desc">		  								
	  					<?php the_content(); ?>		  						
	  				</div>
	  				<? endwhile; endif; wp_reset_query(); ?>
	  			</div>
				</div>
			</div>
		</div>
	</div><!--end About block--> 
	<!--Begin Gallery block-->
	<div class="block block-overlay" id="gallery-block" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg3.png')">
		<div class="block-content">
			<div class="block-inner">
				<div class="container">		
						
					<div id="myCarousel" class="carousel slide" data-ride="carousel">	 
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					  
					  <?php 
					  	$args = array( 'post_type' => 'slider', );
					  	
					  	$slider_query = new WP_Query( $args );
					  	if ( $slider_query->have_posts() ) : while ( $slider_query->have_posts() ) : $slider_query->the_post();					  	    				
					  ?>
					    <div class="item active">
					      <div class="gallery">
									<div class="row">
										<div class="col-xs-4">
											<a href="#" class="thumbnail">
											  <div class="caption">
											  	<h2><?php the_content(); ?></h2>
											  </div>								  
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_1'); ?>" alt="photo">
											</a>
										</div>
										<div class="col-xs-5">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_2'); ?>" alt="photo">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-3">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_3'); ?>" alt="photo">
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_4'); ?>" alt="photo">
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_5'); ?>" alt="photo">
											</a>
										</div>
									</div>
								</div>
					    </div>
					  <? endwhile; endif; wp_reset_query(); ?>
					  <?php 
					  	$args = array( 'post_type' => 'slider', );
					  	
					  	$slider_query = new WP_Query( $args );
					  	if ( $slider_query->have_posts() ) : while ( $slider_query->have_posts() ) : $slider_query->the_post();					  	    				
					  ?>
					    <div class="item">
					      <div class="gallery">
									<div class="row">
										<div class="col-xs-4">
											<a href="#" class="thumbnail">
											  <div class="caption">
											  	<h2><?php the_content(); ?></h2>
											  </div>								  
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_1'); ?>" alt="photo">
											</a>
										</div>
										<div class="col-xs-5">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_2'); ?>" alt="photo">
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-3">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_3'); ?>" alt="photo">
											</a>
										</div>
										<div class="col-xs-6">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_4'); ?>" alt="photo">
											</a>
										</div>
										<div class="col-xs-3">
											<a href="#" class="thumbnail">
											  <img src="<?php the_field('photo_5'); ?>" alt="photo">
											</a>
										</div>
									</div>
								</div>
					    </div>	
					    <? endwhile; endif; wp_reset_query(); ?>			    				    
					  </div>	
					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span aria-hidden="true"><img src="<?php bloginfo('template_directory') ?>/images/back.svg" alt="Previous"></span><span class="sr-only">Previous</span></a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span aria-hidden="true"><img src="<?php bloginfo('template_directory') ?>/images/next.svg" alt="Next"></span><span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
		</div>
	</div><!--end gallery block-->
	<!--Begin Contact block-->
	<div class="block block-overlay" id="contact-block" style="background-image: url('<?php bloginfo('template_directory') ?>/images/bg4.png')">
		<div class="block-content">
			<div class="block-inner">
				<div class="container">				
					<div class="row">
	  			 	<div class="col-md-4">
	  			 		<div class="contact-form">
	            <h4>Остались вопросы?
							мы вам перезвоним!</h4>
	            <p>Мы свяжемся с вами ближайшее время и подробно ответим на ваши вопросы!</p>
	  			 	 	<form>
							  <div class="form-group">
							    <input type="text" class="form-control" id="form-name" placeholder="Ваше имя*">
							    <span class="form-icon"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-man.png"></a></span>
							  </div>
							  <div class="form-group">
							    <input type="text" class="form-control" id="form-phone" placeholder="Ваше телефон*">
							    <span class="form-icon"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-phone.png"></a></span>
							  </div>
							  <div class="form-group">
							    <input type="text" class="form-control" id="form-city" placeholder="Ваше город*">
							    <span class="form-icon"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-home.png"></a></span>			    
							  </div>							  
							  <button type="button" class="btn btn-primary" aria-label="Center">Отправить</button>
							</form>
	  			 	</div>
					</div>
				</div>					
				</div>
			</div>
		</div>
	</div><!--end Contact block-->
	<?php get_footer(); ?>
