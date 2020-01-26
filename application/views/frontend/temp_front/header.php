<header class="clearfix header" data-spy="affix" data-offset-top="60">
    <div class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="logo">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <img alt="Logo" src='<?php echo base_url(); ?>asset/front/img/logo_header.png' width='260' height='50'>
                    </a>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                        <?php 
                        if($this->session->userdata('bahasa')=='id'){
                            echo "
                             <li>
                        <li class='last'><a class='' href=#>Tentang</a>
                            <ul>
                                <li>
                                    <li class='last'><a class='' href='#'>Profile Perusahaan</a>
                                        <ul>
                                            <li>
                                                <li class='last'><a href='".base_url()."home/visi_misi'>Visi Misi</a></li>
                                                <li class='last'><a href='".base_url()."home/moto'>Moto Perusahaan</a></li>
                                                <li class='last'><a href='".base_url()."home/history'>Sejarah Perusahaan</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class='last'><a href='".base_url()."home/achivment'>Pencapaian</a></li>
                                    <li class='last'><a href='".base_url()."home/quality_policy'>Kualiti Polisi</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class='last'>
                            <a class='' href='#'>Jasa Kami</a>
                            <ul>
                                <li>
                                    <li class='last'><a href='".base_url()."home/finished'>Selesai</a></li>
                                    <li class='last'><a href='".base_url()."home/on_progres'>Dalam Pengerjaan</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href='".base_url()."home/article'>Artikel</a></li>
                        <li><a href='".base_url()."home/news'>Berita</a></li>
                        <li class='last'>
                            <a class='' href='#'>Galleri</a>
                            <ul>
                                <li>
                                    <li class='last'><a href='".base_url()."home/our_photos'>Foto Kami</a></li>
                                    <li class='last'><a href='".base_url()."home/our_videos'>Video Kami</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href='".base_url()."home/career'>Karir</a></li>
                        <li><a href='".base_url()."home/contact'>Kontak Kami</a></li>
                        <li class='lang-switch'><a href='".base_url()."home/lang/id'><img id='bahasa' alt='english' src='".base_url()."asset/images/uk.png'></a></li>

                                 </li>";
                        }else {
                            echo "
                                                              <li>
                                                               <li class='last'><a class='' href=#>About</a>
                                                                   <ul>
                                                                       <li>
                                                                           <li class='last'><a class='' href='#'>Company Profile</a>
                                                                               <ul>
                                                                                   <li>
                                                                                       <li class='last'><a href='".base_url()."home/visi_misi'>Vision And Mission</a></li>
                                                                                       <li class='last'><a href='".base_url()."home/moto'>Company Motto</a></li>
                                                                                       <li class='last'><a href='".base_url()."home/history'>History</a></li>
                                                                                   </li>
                                                                               </ul>
                                                                           </li>
                                                                           <li class='last'><a href='".base_url()."home/achivment'>Achievment</a></li>
                                                                           <li class='last'><a href='".base_url()."home/quality_policy'>Quality Policy</a></li>
                                                                       </li>
                                                                   </ul>
                                                               </li>
                                                               <li class='last'>
                                                                   <a class='' href='#'>Our Services</a>
                                                                   <ul>
                                                                       <li>
                                                                           <li class='last'><a href='".base_url()."home/finished'>Finished</a></li>
                                                                           <li class='last'><a href='".base_url()."home/on_progres'>On Progres</a></li>
                                                                       </li>
                                                                   </ul>
                                                               </li>
                                                               <li><a href='".base_url()."home/article'>Experience</a></li>
                                                               <li><a href='".base_url()."home/news'>News</a></li>
                                                               <li class='last'>
                                                                   <a class='' href='#'>Gallery</a>
                                                                   <ul>
                                                                       <li>
                                                                           <li class='last'><a href='".base_url()."home/our_photos'>Our Photo</a></li>
                                                                           <li class='last'><a href='".base_url()."home/our_videos'>Our Video</a></li>
                                                                       </li>
                                                                   </ul>
                                                               </li>
                                                               <li><a href='".base_url()."home/career'>Carrer</a></li>   
                                                               <li><a href='".base_url()."home/contact'>Contact Us</a></li>                         
                                                               <li class='lang-switch'><a href='".base_url()."home/lang/uk'><img id='bahasa' alt='INA' src='".base_url()."asset/images/indonesia.png'></a></li>";
                        }
                        ?>
                  
                </ul>
                <!-- End Navigation List -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <?php
                    if ($this->session->userdata('bahasa') == 'id') {
                        echo "
                             <li>
                        <li class='last'><a class='' href=#>Tentang</a>
                            <ul>
                                <li>
                                    <li class='last'><a class='' href='#'>Profile Perusahaan</a>
                                        <ul>
                                            <li>
                                                <li class='last'><a href='" . base_url() . "home/visi_misi'>Visi Misi</a></li>
                                                <li class='last'><a href='" . base_url() . "home/moto'>Moto Perusahaan</a></li>
                                                <li class='last'><a href='" . base_url() . "home/history'>Sejarah Perusahaan</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class='last'><a href='" . base_url() . "home/achivment'>Pencapaian</a></li>
                                    <li class='last'><a href='" . base_url() . "home/quality_policy'>Kualiti Polisi</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class='last'>
                            <a class='' href='#'>Jasa Kami</a>
                            <ul>
                                <li>
                                    <li class='last'><a href='" . base_url() . "home/finished'>Selesai</a></li>
                                    <li class='last'><a href='" . base_url() . "home/on_progres'>Dalam Pengerjaan</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href='" . base_url() . "home/article'>Artikel</a></li>
                        <li><a href='" . base_url() . "home/news'>Berita</a></li>
                        <li class='last'>
                            <a class='' href='#'>Galleri</a>
                            <ul>
                                <li>
                                    <li class='last'><a href='" . base_url() . "home/our_photos'>Foto Kami</a></li>
                                    <li class='last'><a href='" . base_url() . "home/our_videos'>Video Kami</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href='" . base_url() . "home/career'>Karir</a></li>
                        <li><a href='" . base_url() . "home/contact'>Kontak Kami</a></li>
                        <li class='lang-switch'><a href='" . base_url() . "home/lang/id'><img id='bahasa' alt='english' src='" . base_url() . "asset/images/uk.png'></a></li>

                                 </li>";
                    } else {
                        echo "
                                                              <li>
                                                               <li class='last'><a class='' href=#>About</a>
                                                                   <ul>
                                                                       <li>
                                                                           <li class='last'><a class='' href='#'>Company Profile</a>
                                                                               <ul>
                                                                                   <li>
                                                                                       <li class='last'><a href='" . base_url() . "home/visi_misi'>Vision And Mission</a></li>
                                                                                       <li class='last'><a href='" . base_url() . "home/moto'>Company Motto</a></li>
                                                                                       <li class='last'><a href='" . base_url() . "home/history'>History</a></li>
                                                                                   </li>
                                                                               </ul>
                                                                           </li>
                                                                           <li class='last'><a href='" . base_url() . "home/achivment'>Achievment</a></li>
                                                                           <li class='last'><a href='" . base_url() . "home/quality_policy'>Quality Policy</a></li>
                                                                       </li>
                                                                   </ul>
                                                               </li>
                                                               <li class='last'>
                                                                   <a class='' href='#'>Our Services</a>
                                                                   <ul>
                                                                       <li>
                                                                           <li class='last'><a href='" . base_url() . "home/finished'>Finished</a></li>
                                                                           <li class='last'><a href='" . base_url() . "home/on_progres'>On Progres</a></li>
                                                                       </li>
                                                                   </ul>
                                                               </li>
                                                               <li><a href='" . base_url() . "home/article'>Experience</a></li>
                                                               <li><a href='" . base_url() . "home/news'>News</a></li>
                                                               <li class='last'>
                                                                   <a class='' href='#'>Gallery</a>
                                                                   <ul>
                                                                       <li>
                                                                           <li class='last'><a href='" . base_url() . "home/our_photos'>Our Photo</a></li>
                                                                           <li class='last'><a href='" . base_url() . "home/our_videos'>Our Video</a></li>
                                                                       </li>
                                                                   </ul>
                                                               </li>
                                                               <li><a href='" . base_url() . "home/career'>Carrer</a></li>   
                                                               <li><a href='" . base_url() . "home/contact'>Contact Us</a></li>                         
                                                               <li class='lang-switch'><a href='" . base_url() . "home/lang/uk'><img id='bahasa' alt='INA' src='" . base_url() . "asset/images/indonesia.png'></a></li>";
                    }
                    ?>
        </ul>
        <!-- /.wpb-mobile-menu -->
    </div>
    
</header>