<div class="page-in section">
    <div class="container">
        <div class="row">
            <div class="blog">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="blog-content">
                        <div class="post-title">
                            <?php
                            if ($this->session->userdata('bahasa') == 'id') {
                                echo '<h3>Karir</h3>';
                            } else {
                                echo '<h3>Career</h3>';
                            }
                            ?>
                        </div>
                        <img src="<?php echo base_url(); ?>asset/front/img/dummies/dummy-1200.jpg" alt="" class="img-responsive" />
                        <?php
                        if ($this->session->userdata('bahasa') == 'id') {
                            echo '<p>
                                Anda juga dapat memilih warna, tidak ada vix sint solet, dan kemudian klik untuk melihat lebih banyak, kemudian pilih mode. Vis ex soluta tritani. Tidak ada masalah dengan biaya tambahan, dan tidak ada batas minimum di. Tidak ada informasi tentang urbanitas tidak, atau mungkin tidak disetujui
                                eam, nam bonorum facilisi ut. Setelah efisien, Anda dapat menggunakan primata laoreet dan kemudian Anda mulai.
                                </p>';
                        } else {
                            echo '<p>
                                Lorem ipsum dolor sit amet, no vix sint solet, et ius utinam deseruisse intellegam, ne pro modus vitae tation. Vis ex soluta tritani. Ne pro esse facete expetendis, laudem eirmod minimum nec in. Est quidam urbanitas gloriatur no, eu unum suscipit disputando
                                eam, nam bonorum facilisi ut. Putent efficiantur et pri, eu primis laoreet eum, ut malis everti mel.
                                </p>';
                        }
                        ?>

                        <div class="bs-acc">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color: rgba(22, 34, 206);">Lowongan Terkini</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <table style="width:100%">
                                                <?php
                                                if ($this->session->userdata('bahasa') == 'id') {
                                                    echo '<tr><th>No</th><th>Posisi</th><th>Kode Posisi</th><th>Kriteria</th></tr>';
                                                    $data_lowongan = $this->model_utama->view('career_lowongan');
                                                    $no = 1;
                                                    foreach ($data_lowongan->result_array() as $row) {
                                                        echo '<tr><td>' . $no . '</td><td>' . $row['posisi'] . '</td><td>' . $row['kode_posisi'] . '</td><td>' . $row['kriteria'] . '</td></tr>';
                                                        $no++;
                                                    }
                                                } else {
                                                    echo '<tr><th>No</th><th>Position</th><th>Position Code</th><th>criteria</th></tr>';
                                                    $data_lowongan = $this->model_utama->view('career_lowongan');
                                                    $no = 1;
                                                    foreach ($data_lowongan->result_array() as $row) {
                                                        echo '<tr><td>' . $no . '</td><td>' . $row['posisi_e'] . '</td><td>' . $row['kode_posisi'] . '</td><td>' . $row['kriteria_e'] . '</td></tr>';
                                                        $no++;
                                                    }
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color: rgba(22, 34, 206);">Daftar dokumen yang perlu dilampirkan</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table style="width:100%">
                                                <?php
                                                if ($this->session->userdata('bahasa') == 'id') {
                                                    echo '<tr><th>No</th><th>Persyaratan</th></tr>';
                                                    $data_document = $this->model_utama->view('career_document');
                                                    $no = 1;
                                                    foreach ($data_document->result_array() as $row) {
                                                        echo '<tr><td>' . $no . '</td><td>' . $row['persyaratan_doc'] . '</td></tr>';
                                                        $no++;
                                                    }
                                                } else {
                                                    echo '<tr><th>No</th><th>Requirements</th></tr>';
                                                    $data_document = $this->model_utama->view('career_document');
                                                    $no = 1;
                                                    foreach ($data_document->result_array() as $row) {
                                                        echo '<tr><td>' . $no . '</td><td>' . $row['persyaratan_doc_e'] . '</td></tr>';
                                                        $no++;
                                                    }
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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