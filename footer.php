 <!-- ===================================================
                            Footer End
    =====================================================-->
    <section id="footer_part">
        <div class="container footer_artwork">
            <img src="assets/images/footer_top_bg.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="container nav_container">            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-2',
                                            'menu_id'        => 'footer-menu',
                                            'menu_class'        => 'navbar-nav',
                                        )
                                    );
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-5 pt-3">
                    <small>
                        পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি                    
                    </small>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-7 pt-3 pb-3">
                    <small>
                        সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২১-০১-৩০ ০৫:১৯:৪৬
                    </small>
                </div>
                <div class="col-5">
                    <small>
                        কারিগরি সহায়তায়:
                    </small>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================================
                            Footer End
    =====================================================-->

    <?php wp_footer(); ?>
</body>
</html>