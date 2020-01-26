<?php
$url = urldecode($this->uri->segment(3));
if ($this->session->userdata('bahasa') == 'id') {
    ?>
<section class="portfolios section port-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="section-heading">
                    <h2 class="title">Galeri Kami</h2>
                    <p>.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--<div class="portfolio-filter">
            <a class="current" href="#" data-filter="*">All</a>
        </div>-->
        
        <div class="row">
            <div class="portfolio-details">
                <div class="portfolio-container grid">
				<?php
				$data = $this->model_utama->view_join_where_ordering('gallery_photos', 'album', 'id_album', array('album_seo' => $url), 'id_photo', 'DESC');
				foreach ($data->result_array() as $row) {
				?>
				
                    <div class="grid-item col-md-4 col-xs-6 figts limited">
                        <div class="portfolio-item">
                            <img class="img-responsive" src='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' alt="Gallery">
                            <div class="port-hover">
                                <div class="port-content">
                                    <a href="#"><h3><?php echo $row['judul'] ?></h3></a>
<!--                                    <p><?php echo $row['keterangan_e'] ?></p>-->
                                    <a href='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' data-fancybox="group" class="port-icon">
                                        <img class="hidden-thumbnail" src='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' alt="Thumbnail">
                                        <img src='<?php echo base_url(); ?>asset/front/img/icons/plus-btn.png' alt="Icon">
                                    </a>
                                </div>
                                <!-- /.port-content -->
                            </div>
                            <!-- /.port-hover -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
				<?php
				}
				?>
                    <!-- /.grid-item -->
                </div>
                <!-- /.portfolio-container -->
            </div>
            <!-- /.portfolio-details -->
        </div>
        
    </div>
</section>
<?php
    
} else {
  
    ?>
<!-- ========================================================================= -->
<section class="portfolios section port-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="section-heading">
                    <h2 class="title">Our Gallery</h2>
                    <p>.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--<div class="portfolio-filter">
            <a class="current" href="#" data-filter="*">All</a>
        </div>-->
        
        <div class="row">
            <div class="portfolio-details">
                <div class="portfolio-container grid">
				<?php
				$data = $this->model_utama->view_join_where_ordering('gallery_photos', 'album', 'id_album', array('album_seo' => $url), 'id_photo', 'DESC');
				foreach ($data->result_array() as $row) {
				?>
				
                    <div class="grid-item col-md-4 col-xs-6 figts limited">
                        <div class="portfolio-item">
                            <img class="img-responsive" src='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' alt="Gallery">
                            <div class="port-hover">
                                <div class="port-content">
                                    <a href="#"><h3><?php echo $row['judul'] ?></h3></a>
<!--                                    <p><?php echo $row['keterangan'] ?></p>-->
                                    <a href='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' data-fancybox="group" class="port-icon">
                                        <img class="hidden-thumbnail" src='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' alt="Thumbnail">
                                        <img src='<?php echo base_url(); ?>asset/front/img/icons/plus-btn.png' alt="Icon">
                                    </a>
                                </div>
                                <!-- /.port-content -->
                            </div>
                            <!-- /.port-hover -->
                        </div>
                        <!-- /.portfolio-item -->
                    </div>
				<?php
				}
				?>
                    <!-- /.grid-item -->
                </div>
                <!-- /.portfolio-container -->
            </div>
            <!-- /.portfolio-details -->
        </div>
        
    </div>
</section>

<?php
    
}
?>
