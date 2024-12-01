    <section 
    class="gallery">
        <h2><?php echo get_field('home_gallery_title'); ?></h2>
        <div class="flex">
            <div class="large-img img" 
            style="background-image: url(<?php echo get_field('home_gallery_image_one'); ?>);"
            data-aos="fade-in" data-aos-delay="100"
            ></div>

            <div class="grid">
                <div class="grid-img img" 
                style="background-image: url(<?php echo get_field('home_gallery_image_two'); ?>);"
                data-aos="fade-in" data-aos-delay="200"
                ></div>

                <div class="grid-img img" 
                style="background-image: url(<?php echo get_field('home_gallery_image_three'); ?>);"
                data-aos="fade-in" data-aos-delay="300"
                ></div>
            </div>
        </div>
        <div class="flex">
            <div class="grid">
                <div class="grid-img img" 
                style="background-image: url(<?php echo get_field('home_gallery_image_four'); ?>);"
                data-aos="fade-in" data-aos-delay="400"
                ></div>

                <div class="grid-img img" 
                style="background-image: url(<?php echo get_field('home_gallery_image_five'); ?>);"
                data-aos="fade-in" data-aos-delay="500"
                ></div>
            </div>

            <div class="large-img img" 
            style="background-image: url(<?php echo get_field('home_gallery_image_six'); ?>);"
            data-aos="fade-in" data-aos-delay="600"
            ></div>
        </div> 
    </section>