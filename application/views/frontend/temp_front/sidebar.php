<aside class="sidebar">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <!-- /.widget -->
        <div class="widget">
            <div class="wi-side">
                <div class="wi-border">
                    <h3 class="wi-border-title">
                        <?php
                        if ($this->session->userdata('bahasa') == 'id') {
                            echo 'Cari';
                        } else {
                            echo 'Search';
                        }
                        ?>
                    </h3> 
                </div>
                <div class="wi-content wi-search">
                    <form action="#">
                        <div class="form-group">
                            <?php
                                if ($this->session->userdata('bahasa') == 'id') {
                                    echo '<input type="search" placeholder="Cari disini . . ." class="form-control"> </div>';
                                } else {
                                    echo '<input type="search" placeholder="Search here . . ." class="form-control"> </div>';
                                }
                            ?>
                        <div class="form-group">
                            <div class="search-btn" style="background-color: #23449c">
                                <input type="submit" value="" class="form-control"> </div>
                        </div>
                    </form>
                </div>
                <!-- /.wi-content -->
            </div>
            <!--     /.wi-side -->
        </div>
        <div class="widget">
            <div class="wi-side">
                <div class="wi-border">
                    <h3 class="wi-border-title">
                        <?php
                        if ($this->session->userdata('bahasa') == 'id') {
                            echo 'Berita';
                        } else {
                            echo 'News';
                        }
                        ?>
                    </h3> 
                </div>
                <div class="wi-content wi-about">
                    <div class="wi-about-slide owl-carousel owl-theme">
                        <?php
                        $data_berita = $this->model_utama->view_where_ordering_limit('berita', array('headline' => 'Y'), 'id_berita', 'DESC', 0, 5);
                        foreach ($data_berita->result_array() as $row) {
                            if ($this->session->userdata('bahasa') == 'id') {
                            ?>
                                <div class="wi-about-item">
                                    <div class="abt-img">
                                        <?php
                                            if ($row['gambar'] != '') {
                                                echo "<img src='".base_url()."asset/foto_berita/".$row['gambar']."' alt='About Photo'>";
                                            } else {
                                                echo "<img src='" . base_url() . "asset/foto_info/unavailable-image.jpg"."' />";
                                            }
                                            ?>

                                    </div>
                                    <a href='<?php echo base_url()."home/news_detail/".$row['judul_seo'] ?>'>
                                        <h4 class="gen-title"><?php echo $row['judul'] ?></h4>
                                    </a>
                                    <p>
                                        <?php
                                        $num_char = 100;
                                        $cut_text = substr($row['isi_berita'], 0, $num_char);
                                        if ($row['isi_berita']{$num_char - 1} != ' ') { // jika huruf ke 50 (50 - 1 karena index dimulai dari 0) buka  spasi
                                            $new_pos = strrpos($cut_text, ' '); // cari posisi spasi, pencarian dari huruf terakhir
                                            $cut_text = substr($row['isi_berita'], 0, $new_pos);
                                        }
                                        echo $cut_text . '...';
                                        ?></p>
                                </div>
                            <?php
                            } else {
                                ?>
                                <div class="wi-about-item">
                                    <div class="abt-img">
                                        <?php
                                            if ($row['gambar'] != '') {
                                                echo "<img src='".base_url()."asset/foto_berita/".$row['gambar']."' alt='About Photo'>";
                                            } else {
                                                echo "<img src='" . base_url() . "asset/foto_info/unavailable-image.jpg"."' />";
                                            }
                                            ?>

                                    </div>
                                    <a href='<?php echo base_url()."home/news_detail/".$row['judul_seo'] ?>'>
                                        <h4 class="gen-title"><?php echo $row['judul_e'] ?></h4>
                                    </a>
                                    <p>
                                        <?php
                                        $num_char = 100;
                                        $cut_text = substr($row['isi_berita'], 0, $num_char);
                                        if ($row['isi_berita_']{$num_char - 1} != ' ') { // jika huruf ke 50 (50 - 1 karena index dimulai dari 0) buka  spasi
                                            $new_pos = strrpos($cut_text, ' '); // cari posisi spasi, pencarian dari huruf terakhir
                                            $cut_text = substr($row['isi_berita_e'], 0, $new_pos);
                                        }
                                        echo $cut_text . '...';
                                        ?></p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!-- /.wi-about-item -->

                    </div>
                    <!-- /.wi-about-slide -->
                </div>
                <!-- /.wi-content -->
            </div>
            <!--     /.wi-side -->
        </div>
        <!-- /.widget -->
        <div class="widget">
            <div class="wi-side">
                <div class="wi-border">
                    <h3 class="wi-border-title">
                        <?php
                            if ($this->session->userdata('bahasa') == 'id') {
                                echo 'Kategori';
                            } else {
                                echo 'Categories';
                            }
                        ?>
                    </h3>
                </div>
                <div class="wi-content wi-cat">
                    <ul>
                        <?php
                        $data_gallery = $this->model_utama->view_where('kategori', array('aktif' => 'Y'));
                        
                        foreach ($data_gallery->result_array() as $row) {
                            $count_category = $this->model_utama->view_where_count('berita', array('aktif' => 'Y', 'id_kategori' => $row['id_kategori']));
                            ?>
                            <li>
                                <?php
                                if ($this->session->userdata('bahasa') == 'id') {
                                    echo '<a href="'. base_url().'home/kategori/'.$row['id_kategori'].'"> <span>'.$row['nama_kategori'].'</span> <span>'.$count_category.'</span> </a>';
                                } else {
                                    echo '<a href="'. base_url().'home/kategori/'.$row['id_kategori'].'"> <span>'.$row['nama_kategori_e'].'</span> <span>'.$count_category.'</span> </a>';
                                }
                                ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.wi-content -->
            </div>
            <!--     /.wi-side -->
        </div>
        <!-- /.widget -->
        <div class="widget">
            <div class="wi-side">
                <div class="wi-border">
                    <h3 class="wi-border-title">
                        <?php
                        if ($this->session->userdata('bahasa') == 'id') {
                            echo 'Pos Populer';
                        } else {
                            echo 'Popular Post ';
                        }
                        ?>
                    </h3> 
                </div>
                <div class="wi-content wi-recent">
                    <ul>
                        <?php
                        $data_slider = $this->model_utama->view_ordering_limit('berita', 'dibaca', 'desc', 0, 5);
                        foreach ($data_slider->result_array() as $row) {
                            if ($this->session->userdata('bahasa') == 'id') {
                                if($row['judul']!=''){
                            ?>
                                    <li><a href='<?php echo base_url()."home/news_detail/".$row['judul_seo'] ?>'><?php echo $row['judul'] ?></a></li>
                            <?php
                                } else {
                                    
                                }
                            } else {
                                if($row['judul_e']!=''){
                            ?>
                                    <li><a href='<?php echo base_url()."home/news_detail/".$row['judul_seo'] ?>'><?php echo $row['judul_e'] ?></a></li>
                            <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.wi-content -->
            </div>
            <!--     /.wi-side -->
        </div>
        <!-- /.widget -->
        <div class="widget">
            <div class="wi-side">
                <div class="wi-border">
                    <h3 class="wi-border-title">Tags</h3> </div>
                <div class="wi-content wi-tags">
                    <ul>
                        <?php
                        $data_tag = $this->model_utama->view('tag');
                        foreach ($data_tag->result_array() as $row) {
                            ?>
                        <li><a href="<?php echo base_url(); ?>home/tag/<?php echo $row['nama_tag']; ?>">
                                <?php
                                if ($this->session->userdata('bahasa') == 'id') {
                                    echo $row['nama_tag'];
                                }else{
                                    echo $row['nama_tag_e'];
                                }
                                ?>
                                </a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.wi-content -->
            </div>
            <!--     /.wi-side -->
        </div>
        <!-- /.widget -->
    </div>
    <!-- /.col- -->
</aside>
<!-- /.sidebar -->
