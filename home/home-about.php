    <section class="about">
        <div class="container">
            <div class="flex">
                <div class="about-content" 
                data-aos="fade-right">
                    <h2><?php echo get_field('home_about_title'); ?></h2>
                    <hr>
                    <p><?php echo get_field('home_about_description'); ?></p>
                    <div class="icons">
                        <div class="tag">
                            <i class="fa-solid fa-bowl-food"></i>
                            <p><?php echo get_field('home_about_tag_one'); ?></p>
                        </div>
                        <div class="tag">
                            <i class="fa-solid fa-kitchen-set"></i>
                            <p><?php echo get_field('home_about_tag_two'); ?></p>
                        </div>   
                    </div>
                </div>
                <div 
                class="about-img img" 
                style="background-image: url(<?php echo get_field('home_about_large_image'); ?>);"
                data-aos="fade-left">
                    <div class="white-bg">
                        <div class="second-img img" style="background-image: url(<?php echo get_field('home_about_smaller_image'); ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
