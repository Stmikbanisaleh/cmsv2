<!DOCTYPE html>
<html lang="en">
<?php require_once('frontend/temp_front/head.php'); ?>
<body>
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <div id="all-area" class="all-section">
            <!-- start header -->
            <?php require_once('frontend/temp_front/header.php');?>
            <!-- end header -->
            <section id="featured" class="bg">
                    <!--Start Content -->
                    <?php echo $contents;?>
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
