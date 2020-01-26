<div class="page-in section">
    <div class="container">
        <div class="row">
            <div class="blog">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="blog-content">
                        <div class="post-title">
                            <?php
                            if ($this->session->userdata('bahasa') == 'id') {
                                echo '<h3>Moto Perusahaan</h3>';
                            } else {
                                echo '<h3>Company Motto</h3>';
                            }
                            ?>
                        </div>
                        <div class="post-content">
                            <section>
                                <?php
                                $data = $this->model_utama->view_where('company_moto', array('id_company_moto' => 1));
                                foreach ($data->result_array() as $row) 
                                 {
                                    if($this->session->userdata('bahasa')=='id'){
                                        echo $row['deskripsi_moto'];
                                    } else {
                                         echo $row['deskripsi_moto_e'];
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