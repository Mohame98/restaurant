    <section class="testimonials img" 
    style="background-image: url(<?php echo get_field('home_testimonials_banner_image'); ?>);">
		<div class="container">
            <div class="testimonial-title">
                <h3><?php echo get_field('home_testimonials_title'); ?></h3>
			    <h2><?php echo get_field('home_testimonial_subtitle'); ?></h2>
            </div>
			<div class="slider-holder">
                <?php $testimonial = new WP_Query(
                    array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    )
                );
                while($testimonial->have_posts()){
                    $testimonial->the_post();
                ?>
				<div class="item">
                    <div class="quote-content">
                        <?php the_content(); ?>
                        <span class="quote-mark">”</span>
                    </div>
                    <div class="customer">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                        <div class="customer-img img" 
                        style="background-image: url('<?php echo $url; ?>');"></div>
                        <div class="customer-info">
                            <p><?php the_title(); ?></p>
                            <div class="star-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
				</div>
                <?php } wp_reset_postdata(); ?>
			</div>
		</div>
	</section>