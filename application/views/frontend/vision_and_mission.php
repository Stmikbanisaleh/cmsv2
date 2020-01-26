<div class="page-in section">
    <div class="container">
        <div class="row">
            <div class="blog">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="blog-content">
                        <div class="post-title">
                            <?php
                            if ($this->session->userdata('bahasa') == 'id') {
                                echo '<h3>Visi dan Misi</h3>';
                            } else {
                                echo '<h3>Vision and Mission</h3>';
                            }
                            ?>
                        </div>
                        <div class="post-content">
                            <section>
                                <?php
                                if ($this->session->userdata('bahasa') == 'id') {
                                    $data = $this->model_utama->view_where('vision_mission', array('id_vision_mission' => 1));
                                    foreach ($data->result_array() as $row) {
                                        echo '<h3 style="text-align: justify;"><strong>'.$row['vision'].':</strong></h3>
                                        <p style="text-align: justify;">'.$row['keterangan_vision'].'</p>
                                        <h3 style="text-align: justify;"><strong>'.$row['mission'].':</strong></h3>
                                        <ol>
                                            <li style="text-align: justify;">'.$row['keterangan_mission'].'</li>
                                        </ol>';
                                    }
                                }else{
                                    $data = $this->model_utama->view_where('vision_mission', array('id_vision_mission' => 1));
                                    foreach ($data->result_array() as $row) {
                                        echo '<h3 style="text-align: justify;"><strong>'.$row['vision_e'].':</strong></h3>
                                        <p style="text-align: justify;">'.$row['keterangan_vision_e'].'</p>
                                        <h3 style="text-align: justify;"><strong>'.$row['mission_e'].':</strong></h3>
                                        <ol>
                                            <li style="text-align: justify;">'.$row['keterangan_mission_e'].'</li>
                                        </ol>';
                                    }
                                }
                                ?>
                                
                                <p style="text-align: justify;">&nbsp;</p>
                            </section>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
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