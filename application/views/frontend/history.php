<div class="page-in section">
    <div class="container">
        <div class="row">
            <div class="blog">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="blog-content">
                        <div class="post-title">
                            <?php
                            if ($this->session->userdata('bahasa') == 'id') {
                                echo '<h3>Sejarah</h3>';
                            } else {
                                echo '<h3>History</h3>';
                            }
                            ?>
                        </div>
                        <div class="post-content">
                            <section>
                                <?php
                                $proses = $this->model_app->edit('history', array('id_history' => '1'))->row_array();
                                if ($this->session->userdata('bahasa') == 'id') {
                                    echo $proses[deskripsi_history];
                                } else {
                                    echo $proses[deskripsi_history_e];
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
