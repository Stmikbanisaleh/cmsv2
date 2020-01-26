<?php
$row = $this->model_utama->view_where('footer', array('id_footer' => 1))->row_array();
if ($this->session->userdata('bahasa') == 'id') {
?>
<section class="get-touch section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-4">
                <div class="widget">
                    <h4>About company</h4>
                    <?php
                    echo $row['about_company'];
                    ?>
                </div>
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class="widget">
                    <h4>Information</h4>
                    <address>
                        <?php
                    echo $row['information'];
                    ?>
                    </address>
                    <p>
                        <i class="fa fa-phone"></i> <?php echo $row['i_telephone'];?> <br>
                        <i class="fa fa-envelope"></i> <?php echo $row['i_email'];?>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 col-lg-4">
                <div class="widget">
                    <h4>Newsletter</h4>
                    <p><?php echo $row['news_letter'];?></p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add" style="color: #fff;">Subscribe</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Web Kapal - &copy; 2018 All rights reserved. Designed by <a href="#">Team Alpha
                </div>
                <div class="col-md-12">
                    <ul class="social-network">
                        <?php
                        $data_sosmed = $this->model_utama->view('sosmed');
                        foreach ($data_sosmed->result_array() as $row) {
                            echo '<li><a href="'.$row['link'].'" data-placement="top" title="'.$row['title'].'"><i class="'.$row['class_boostrap'].'"></i></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.copyright -->
</footer>
<?php
}else{
    ?>
<section class="get-touch section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-4">
                <div class="widget">
                    <h4>About company</h4>
                    <?php
                    echo $row['about_company_e'];
                    ?>
                </div>
            </div>
            <div class="col-sm-4 col-lg-4">
                <div class="widget">
                    <h4>Information</h4>
                    <address>
                        <?php echo $row['information_e'];?>
                    </address>
                    <p>
                        <i class="fa fa-phone"></i> <?php echo $row['i_telephone'];?> <br>
                        <i class="fa fa-envelope"></i> <?php echo $row['i_email'];?>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 col-lg-4">
                <div class="widget">
                    <h4>Newsletter</h4>
                    <p><?php echo $row['news_letter_e'];?></p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add" style="color: #fff;">Subscribe</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Web Kapal - &copy; 2018 All rights reserved. Designed by <a href="#">Team Alpha
                </div>
                <div class="col-md-12">
                    <ul class="social-network">
                        <?php
                        $data_sosmed = $this->model_utama->view('sosmed');
                        foreach ($data_sosmed->result_array() as $row) {
                            echo '<li><a href="'.$row['link'].'" data-placement="top" title="'.$row['title'].'"><i class="'.$row['class_boostrap'].'"></i></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.copyright -->
</footer>
<?php
}
?>
