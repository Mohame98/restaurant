    <section class="opening-hours">
        <div class="container">
            <div class="flex">
                <div class="opening-hours-content">
                    <h1><?php echo get_field('about_opening_time_title'); ?></h1>
                    <?php echo get_field('about_opening_time_hours'); ?>
                    <div class="wrapper">
                        <div class="breakfast">
                            <h3><?php echo get_field('about_breakfast_opening_time_title'); ?></h3>
                            <?php echo get_field('about_breakfast_opening_time'); ?>
                        </div>
                        <div class="lunch">
                            <h3><?php echo get_field('about_lunch_opening_time_title'); ?></h3>
                            <?php echo get_field('about_lunch_opening_time'); ?>
                        </div>
                    </div>
                    <p><?php echo get_field('about_opening_time_description'); ?></p>
                </div>
                <div class="form" 
                data-aos="fade-in" 
                duration="2500">
                    <h2><?php echo get_field('about_form_title'); ?></h2>
                    <p><?php echo get_field('about_form_description'); ?></p>
                    <?php echo apply_shortcodes('[contact-form-7 id="50eafc8" title="about restaurant reservation"]'); ?>
                    <div class="bg-img img" 
                    style="background-image: url(<?php echo get_field('about_form_image'); ?>);"></div>
                </div>
            </div>   
        </div>
    </section>