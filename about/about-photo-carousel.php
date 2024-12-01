    <section 
    class="photo-carousel" 
    data-aos="fade-in">
        <div class="slick-infinite">
            <?php $infinite_carousel = new WP_Query(
                array(
                    'post_type' => 'infinite_carousel',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                )
            );
            while($infinite_carousel->have_posts()){
                $infinite_carousel->the_post();
            ?>
            <div class="slick-slide">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <img src="<?php echo $url; ?>" alt="">
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </section>