<!-- start slider -->			
<!-- Slider -->
<section id="main-slider">
    <!-- Carousel -->
    <div id="main-slide" class="main-slider carousel slide" data-ride="carousel">
        <!-- Carousel inner -->
        <div class="carousel-inner">
            <?php
            $data_slider = $this->model_utama->view_ordering_limit('slider', 'id_slider', 'ASC', 0, 4);
            $n = 0;
            foreach ($data_slider->result_array() as $row) {
                if ($n == 0) {
                    ?>
                    <div class="item active">
                        <?php
                    } else {
                        ?>
                        <div class="item">
                            <?php
                        }
                        ?>
                        <img class="img-responsive" src='<?php echo base_url(); ?>asset/front/img/slides/flexslider/<?php echo $row['gambar'] ?>' alt='Classification Services'>
                        <div class="container">
                            <div class="slider-content">
                                <div class="container">
                                    <?php
                                    if ($this->session->userdata('bahasa') == 'id') {
                                    ?>
                                    <h2 class="animated4">
                                        <span><?php echo $row['judul'] ?></span>
                                    </h2>
                                    <p class="animated6 slide-para">
                                        <span><?php echo substr($row['keterangan'], 0, 250) ?></span>
                                    </p>
                                    <p class="animated4">
                                        <a href="<?php echo base_url()."home/slide/".$row['url'] ?>" class="slider-btn cbiz-btn">Readmore</a>
                                    </p>
                                    <?php
                                    }else{
                                        ?>
                                    <h2 class="animated4">
                                        <span><?php echo $row['judul_e'] ?></span>
                                    </h2>
                                    <p class="animated6 slide-para">
                                        <span><?php echo substr($row['keterangan_e'], 0, 250) ?></span>
                                    </p>
                                    <p class="animated4">
                                        <a href="<?php echo base_url()."home/slide/".$row['url'] ?>" class="slider-btn cbiz-btn">Readmore</a>
                                    </p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <?php
                    $n++;
                }
                ?>
                <!-- /.item --> 
            </div>
            <!-- Carousel inner end-->
            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
            <div class="click-to-next bottom-top-animation">
                <i></i>
            </div>
        </div>
        <!-- /carousel -->
</section>

<section class="service section">
    <div class="container hidden-sm hidden-xs">
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="section-heading">
                    <h2 class="title"><span></span> </h2>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class='row'>
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/geometry.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/ship_design"><h4>Ship Design and Analysis</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/notepad.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/konsultasi"><h4>Feasibility Study</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/analytics.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/konsultasi"><h4>Shipyard Design & Investment Analysis</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
        </div>
        <div class='row'>
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/notes.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/konsultasi"><h4>Survey dan Verifikasi</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/ebook.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/isps_code"><h4>ISPS Code</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/management.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/super_visi"><h4>Supervisi</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
        </div>
        <div class='row'>
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/community.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/konsultasi"><h4>Project Management</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/law.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/konsultasi"><h4>Technical Due Deligence</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/discussion.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="<?php echo base_url(); ?>home/konsultasi"><h4>Risk Assessment and Risk Management</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
        </div>
        <!-- /.row -->
    </div>
    <!-- .container -->
    
    <div class="container visible-sm visible-xs hidden-lg hidden-md">
        <div class="row">
            <!--<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="section-heading">
                    <h2 class="title"><span></span> </h2>
                    <p></p>
                </div>
            </div>-->
        </div>
        <!-- /.row -->
        <div class='row'>
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/geometry.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Ship Design and Analysis</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/notepad.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Feasibility Study</h4></a>
                </div>
            </div>
        </div>
        <div class='row'>
            <!-- /.service-box -->
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/analytics.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Shipyard Design & Investment Analysis</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/notes.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Survey dan Verifikasi</h4></a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- /.service-box -->
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/ebook.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>ISPS Code</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/management.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Supervisi</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
        </div>
        <div class='row'>
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/community.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Project Management</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
            <div class="col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/law.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Technical Due Deligence</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <img class="flaticon-img icon-large" src="<?php echo base_url(); ?>asset/front/img/img_shortcut/discussion.png" alt="Icon">
                </div>
                <div class="service-content">
                    <a href="#"><h4>Risk Assessment and Risk Management</h4></a>
                </div>
            </div>
            <!-- /.service-box -->
        </div>
        <!-- /.row -->
    </div>
</section>

<section class="our-goal section cbiz-bg">
    <div class="container">
        <div class="section-heading">
            <h2 class="title"><span>Our</span> Services</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div id="goal-slider" class="carousel goal-slider slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#goal-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#goal-slider" data-slide-to="1"></li>
                        <li data-target="#goal-slider" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="goal-content">
                                <?php
                                $data_gallery = $this->model_utama->view_where('vision_mission', array('id_vision_mission' => 1));
                                foreach ($data_gallery->result_array() as $row) {
                                ?>
                                    <p><?php echo $row['vision'] ?>:
                                        <br> <?php echo $row['keterangan_vision'] ?>
                                    </p>
                                    <br>
                                    <p><?php echo $row['mission'] ?>:
                                        <br><?php echo $row['keterangan_mission'] ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="goal-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium:
                                    <br> 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                    <br> 2. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    <br> 3. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                                <br>
                                <p></p>
                            </div>
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="goal-content">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est:
                                    <br> 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                    <br> 2. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    <br> 3. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                                <br>
                                <p></p>
                            </div>
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.carousel-inner -->
                </div>
                <!-- /carousel -->
            </div>
            <!-- /.col- -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="projects">
                        <?php
                        $finish = $this->model_utama->view_where_pagination1_count('project', array('status' => '1'), 'id_project', 'asc', $config["per_page"], $data['page']);
                        $on_progres = $this->model_utama->view_where_pagination1_count('project', array('status' => '0'), 'id_project', 'asc', $config["per_page"], $data['page']);
                        ?>
                        <a href="<?php echo base_url() ?>home/finished">
                            <div class="col-xs-6">
                                <div class="pro-item">
                                    <h2 class="counter"><?php echo $finish;?></h2><h3 class="achievement">Services Finished</h3>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>home/on_progres">
                        <div class="col-xs-6">
                            <div class="pro-item">
                                <h2 class="counter"><?php echo $on_progres;?></h2><h3 class="achievement">Services On Progres</h3>
                            </div>
                        </div>
                        </a>
                        <a href="<?php echo base_url(); ?>home/ship_design">
                        <div class="col-xs-6">
                            <div class="pro-item">
                                <h3 class="achievement">Ship Design</h3>
                            </div>
                        </div>
                        </a>
                        <a href="<?php echo base_url(); ?>home/isps_code">
                        <div class="col-xs-6">
                            <div class="pro-item">
                                <h3 class="achievement">ISPS Code</h3>
                            </div>
                        </div>
                        </a>
                        <a href="<?php echo base_url(); ?>home/super_visi">
                        <div class="col-xs-6">
                            <div class="pro-item">
                                <h3 class="achievement">Super Visi</h3>
                            </div>
                        </div>
                        </a>
                        <a href="<?php echo base_url(); ?>home/konsultasi">
                        <div class="col-xs-6">
                            <div class="pro-item">
                                <h3 class="achievement">Konsultasi</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- /.projects -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col- -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="portfolios section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="section-heading">
                    <h2 class="title"><span>Our</span> Gallery</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="portfolio-details">
                <div class="portfolio-container grid">
                    <?php
                    $data_gallery = $this->model_utama->view_ordering_limit('gallery_photos', 'id_photo', 'ASC', 0, 14);
                    foreach ($data_gallery->result_array() as $row) {
                        ?>
                        <div class="grid-item col-md-4 col-xs-6 figts limited">
                            <div class="portfolio-item">
                                <img class="img-responsive" src='<?php echo base_url(); ?>asset/front/img/img_galeri/<?php echo $row['img'] ?>' alt="Gallery">
                                <div class="port-hover">
                                    <div class="port-content">
                                        <a href="#"><h3><?php echo $row['judul'] ?></h3></a>
                                        <p><?php echo $row['keterangan'] ?></p>
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
                        <!-- /.grid-item -->
                        <?php
                    }
                    ?>
                    <!-- /.grid-item -->
                </div>
                <!-- /.portfolio-container -->
            </div>
            <!-- /.portfolio-details -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<div class="our-client">
    <div class="container">
        <div class="client-logos">
            <div class="client-slider owl-carousel owl-theme">
                <?php
                $data_client = $this->model_utama->view('our_client');
                foreach ($data_client->result_array() as $row) {
                ?>
                    <div class="item">
                        <div class="logo-each">
                            <a href='<?php echo $row['url_client'] ?>'> <img src='<?php echo base_url(); ?>asset/front/img/clients/<?php echo $row['img'] ?>' title='Client' alt="Client Logo"> </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <!-- /.client-slider -->
        </div>
        <!-- /.client-logos -->
    </div>
    <!-- /.container -->
</div>
