    <section 
    class="reservation-banner banner" 
    style="background-image: url(<?php echo get_field('about_reservation_banner_image'); ?>);"
    data-aos="fade-down">
        <div class="container">
            <h1><?php echo get_field('about_reservation_banner_title'); ?></h1>
            <p><?php echo get_field('about_reservation_banner_description'); ?></p>
            <a href="<?php echo get_field('about_reservation_banner_btn'); ?>" class="btn">reservation</a>
        </div>    
    </section>