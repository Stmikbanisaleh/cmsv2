<section class="portfolios section port-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="section-heading">
                    <?php
                    $url = urldecode($this->uri->segment(3));
                    if ($this->session->userdata('bahasa') == 'id') {
                        echo '<h2 class="title">Video Kami</h2>';
                    } else {
                        echo '<h2 class="title">Our Video</h2>';
                    }
                    ?>
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
                    $data = $this->model_utama->view('gallery_videos');
                    foreach ($data->result_array() as $row) {
                        ?>
                        <div class="grid-item col-md-4 col-xs-6 figts limited">
                            <div class="portfolio-item">
                                <iframe width="100%" src="<?php echo $row['url_video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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