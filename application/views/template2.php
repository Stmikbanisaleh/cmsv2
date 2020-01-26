<!DOCTYPE html>
<html lang="en">
    <?php require_once('frontend/temp_front/head.php'); ?>
    <body>
        <div id="wrapper">
            <!-- start header -->
            <?php require_once('frontend/temp_front/header.php'); ?>
            <!-- end header -->
            <!--Start Content -->
            <section class="page-head page-bg" style="background-image: url('<?php echo base_url(); ?>asset/front/img/slides/flexslider/2.jpg')">
                <div class="container">
                    <?php
                    if ($this->session->userdata('bahasa') == 'id') {
                        ?>
                        <h3 class="page-heading"><?php echo $judul_head; ?></h3>
                        <div class="sub-title">
                            <a href="<?php echo base_url(); ?>"><span>Home</span></a>
                            <i class="fa fa-angle-right"></i>
                            <span><?php echo $judul_head; ?></span>
                        </div>
                        <?php
                    } else {
                        ?>
                        <h3 class="page-heading"><?php echo $judul_head_e; ?></h3>
                        <div class="sub-title">
                            <a href="<?php echo base_url(); ?>"><span>Home</span></a>
                            <i class="fa fa-angle-right"></i>
                            <span><?php echo $judul_head_e; ?></span>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
            <section id="content" style="padding: 115px 0px 20px; border-bottom: 1px solid #ccc; margin: 0 25px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <article>
                                <?php echo $contents; ?>
                            </article>
                        </div>
                        <!-- Start Sidebar-->
                        <?php require_once('frontend/temp_front/sidebar.php'); ?>
                        <!-- Finish Sidebar-->
                    </div>
                </div>
            </section>
            <!--End Content-->

        </section>
        <!-- Start Footer -->
        <?php require_once('frontend/temp_front/footer.php'); ?>
        <!-- End Footer -->
    </div>
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--Start js-->
    <?php require_once('frontend/temp_front/js.php'); ?>
    <!--End js-->
</body>

</html>
