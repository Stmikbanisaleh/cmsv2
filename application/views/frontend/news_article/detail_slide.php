<?php
$url = urldecode($this->uri->segment(3));
$rows = $this->model_utama->view_where($table, array('url' => $url))->result_array();
foreach ($rows as $row) {
    ?>
    <section class="page-head page-bg" style="background-image: url('<?php echo base_url(); ?>asset/front/img/slides/flexslider/2.jpg')">
        <div class="container">
            <h3 class="page-heading"><?php echo $row['judul']; ?></h3>

            <div class="sub-title">
                <a href="<?php echo base_url(); ?>"><span>Home</span></a>
                <i class="fa fa-angle-right"></i>
                <?php
                    echo '<span>' . $judul_head . '</span>';
                ?>
            </div>
        </div>
    </section>
    <section class="detail detail-news" style="padding: 0 0 20px; border-bottom: 1px solid #ccc;">
        <article class="detail-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="grid">
                            <div class="grid12">
                                <p class="date"><?php echo date("d F Y", strtotime($row['tgl_posting'])); ?></p>
                                <div class="user-generated">
                                    <style>
                                        .image01 {
                                            WIDTH: 40% !important;
                                            FLOAT: right
                                        }

                                        @media Unknown {
                                            .image01 {
                                                WIDTH: 100% !important;
                                                FLOAT: right
                                            }
                                            .image01 {
                                                WIDTH: 100% !important;
                                                FLOAT: right
                                            }
                                        }
                                    </style>
                                    <?php
                                    if ($row['gambar'] != '') {
                                        echo '<div class="image01" style="margin-left: 10px; margin-bottom:10px;"><img height="767" alt="Bijela shipyard" width="1300" src="' . base_url() . $url_folder . $row['gambar'] . '" /></a></div>';
                                    }
                                    ?>
                                    <?php
                                        echo $row['keterangan'];
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section
    <?php
}
?>