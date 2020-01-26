<div class="page-in section">
    <div class="container">
        <div class="row">
            <div class="blog">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="blog-content">
                        <div class="post-title">
                            <?php
                            if ($this->session->userdata('bahasa') == 'id') {
                                echo '<h3>Quality Police</h3>';
                            } else {
                                echo '<h3>Quality Police</h3>';
                            }
                            ?>
                        </div>
                        <div class="post-content">
                            <section>
                                <img src="<?php echo base_url(); ?>asset/front/img/dummies/dummy-1200.jpg" alt="" class="img-responsive" />
                                <?php
                                $data = $this->model_utama->view_where('quality_police', array('id_quality_police' => 1));
                                foreach ($data->result_array() as $row) {
                                    if ($this->session->userdata('bahasa') == 'id') {
                                        echo $row['isi'];
                                    } else {
                                        echo $row['isi_e'];
                                    }
                                    
                                }
                                ?>
                            </section>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <!-- /.blog-content -->
                </div>
                <!-- /.col- -->
            </div>
            <!-- /.blog -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

