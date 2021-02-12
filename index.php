<?php get_header(); ?>
    
    <!-- ===================================================
                            Main Body Start
    =====================================================-->
    <section id="main_body">
        <div class="container">
            <div class="row">
                <div class="col-8 px-0">
                    <div class="main_body_banner">
                        <img src="<?= get_theme_mod('banner_setting'); ?>" alt="">
                    </div>
                    <div class="main_body_marque_one">
                        <h4>
                            <marquee>
                                <?= get_theme_mod('marquee_setting'); ?>
                            </marquee>
                        </h4>
                    </div>
                    <div class="main_body_marque_two pt-2 pb-2">
                        <h6 class="text-danger font-weight-bold">
                            <marquee behavior="" direction="left" scrollamount="12">
                                 <?= get_theme_mod('marquee2_setting'); ?>
                            </marquee>
                        </h6>
                    </div>
                    <div class="slick_slider">
                        <?php 
                            $args = array( 'post_type' => 'Slider', 'posts_per_page' => 10 );
                            $the_query = new WP_Query( $args ); 
                            ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <?= the_post_thumbnail()?>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                            <?php else:  ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="initiative">
                        <h4 class="purple_header">উদ্যোগ</h4>
                        <ul>
                            <?php 
                            $args = array(
                                'post_type'=> 'post',
                                'orderby'    => 'ID',
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'posts_per_page' => -1 // this will retrive all the post that is published 
                                );
                                $result = new WP_Query( $args );
                                if ( $result-> have_posts() ) : ?>
                                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                                <li>
                                    <a href=""><?php the_title(); ?>  </a>
                                </li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_postdata(); ?>                                
                            
                           
                        </ul>
                    </div>
                    <div class="links">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link1.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link2.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link3.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link4.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link5.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link6.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="<?= get_template_directory_uri();?>./assets/images/link7.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="popular">
                        <h4 class="purple_header">জনপ্রিয়</h4>
                        <div class="row">
                            <div class="col-4">
                                <h6>সেবাসমূহ</h6>
                                <ul>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের (২০১৬-২০২০)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <h6>পাতাসমূহ</h6>
                                <ul>                                    
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                    <li>
                                        <a href="">সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <h6>পোর্টালসমূহ</h6>
                                <ul>
                                    <li>
                                        <a href="">বাংলাদেশ</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ</a>
                                    </li>
                                    <li>
                                        <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 pr-0 right_bar">
                    <div class="mb-3">
                    <?php dynamic_sidebar('sidebar'); ?>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!-- ===================================================
                            Main Body End
    =====================================================-->
   <?php get_footer(); ?>