<!DOCTYPE html>
<html lang="en">
<?php require_once('frontend/temp_front/head.php'); ?>
<style>

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
  margin-bottom: 7px;
}

.pagination a.active {
  background-color: #26476c;
  color: white;
  border: 1px solid #26476c;
}

.pagination a:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.pagination a:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
<body>
    <div id="wrapper">
        <!-- start header -->
        <?php require_once('frontend/temp_front/header.php'); ?>
        <!-- end header -->
        <!--Start Content -->
        <?php echo $contents; ?>
        <!--End Content-->

    </div>
    <!-- Start Footer -->
    <?php require_once('frontend/temp_front/footer.php'); ?>
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--Start js-->
    <?php require_once('frontend/temp_front/js.php'); ?>
    <!--End js-->
</body>

</html>