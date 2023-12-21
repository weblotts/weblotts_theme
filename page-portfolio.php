<?php
/**
 * Template Name: Portfolio
 * 
 * @package weblotts
 */
get_header( ); ?>


<div class="container">
    <div class="vh-90 " >
        <div class="row my-5">
            <h1>Portfolio</h1>
            <p>Trust us with your projects and we shall be happy to execute them. Our clients are proud to have the best of our work.</p>         
        </div>
        <div class="row">
            <div class="col-4 mt-2">
                <figure class="figure">
                    <img src="<?php echo WEBLOTTS_DIR_URI .'/src/assets/images/projects/cornerstone_school.png'; ?>" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption"><a href="https://cornerstone.sc.ug" target="_blank">https://cornerstone.sc.ug</a></figcaption>
                </figure>
            </div>
            <div class="col-4 mt-2">
                <figure class="figure">
                    <img src="<?php echo WEBLOTTS_DIR_URI .'/src/assets/images/projects/barrel_magazine.png'; ?>" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption"><a href="https://barrelmagazine.com" target="_blank">https://barrelmagazine.com</a></figcaption>
                </figure>
            </div>

            <div class="col-4 mt-2">
                <figure class="figure">
                    <img src="<?php echo WEBLOTTS_DIR_URI .'/src/assets/images/projects/optimalscoe.png'; ?>" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption"><a href="https://optimalscoe.org" target="_blank">https://optimalscoe.org</a></figcaption>
                </figure>
            </div>
            
        </div>
    </div>
</div>


<?php get_footer();