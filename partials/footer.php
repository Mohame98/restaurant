    <footer class="footer">
        <div class="container">
            <div class="grid">
                <div class="col">
                    <h2>always <span>eat</span> well</h2>
                </div>
                <div class="col">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Subscribe to our newsletter</h4>
                    <label for="email">
                        <div class="input-container">
                            <input type="email" name="email" placeholder="Enter your email">
                            <button type="button">subscribe</button>
                        </div>  
                    </label>
                    <p>We won't spam you, promise</p>
                </div>
            </div>
            <p>Built by Mohame Roach</p>
        </div>
    </footer>
    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- CDN Jquery -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>

    <!-- CDN Slick -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" 
        integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>

    <script>  
        // initialize infinite slider
        infiniteSlider()

        // initialize testimonial carousel
        testimonialCarousel()

        // initialize aos
        AOS.init({ duration: 1000, easing: "ease-in-out", once: true });
    </script>
    <?php wp_footer(); ?>
    </body>
</html>