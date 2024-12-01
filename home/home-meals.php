    <section 
        class="meals" 
        data-aos="fade-up"
        data-aos-offset="300">
        <div class="container">
            <h2><?php echo get_field('home_meals_title'); ?></h2>
            <div class="grid-container">
                <?php $meal = new WP_Query(
                    array(
                        'post_type' => 'meal',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    )
                );
                while($meal->have_posts()){
                    $meal->the_post();
                ?>
                <div class="grid-item">
                    <div class="flex">
                        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                        <div class="grid-img img" 
                        style="background-image: url('<?php echo $url; ?>');"></div>
                        <div class="content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <p class="price">$<?php the_field('home_meal_price'); ?></p>
                        </div>
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </section>