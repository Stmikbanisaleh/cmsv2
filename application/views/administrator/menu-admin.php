        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            <?php $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
                  if (trim($usr['foto'])==''){ $foto = 'blank.png'; }else{ $foto = $usr['foto']; } ?>
            <img src="<?php echo base_url(); ?>/asset/foto_user/<?php echo $foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <?php echo "<p>$usr[nama_lengkap]</p>"; ?>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <span class='uppercase'><?php echo $this->session->level; ?></span></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Menu Utama</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("identitaswebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/identitaswebsite'><i class='fa fa-circle-o'></i> Identitas Website</a></li>";
                }
                
                $cek=$this->model_app->umenu_akses("footer",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/footer'><i class='fa fa-circle-o'></i> Footer</a></li>";
                }

                $cek=$this->model_app->umenu_akses("halamanbaru",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/halamanbaru'><i class='fa fa-circle-o'></i> Halaman Baru</a></li>";
                }
                $cek=$this->model_app->umenu_akses("sosmed",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/sosmed'><i class='fa fa-circle-o'></i> Social Media</a></li>";
                }
              ?>
              </ul>
            </li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/slide"><i class="fa fa-edit"></i> <span>Modul Slide</span></a></li>
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Berita dan Experience</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("listberita",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/listberita'><i class='fa fa-circle-o'></i> Berita</a></li>";
                }
              
                $cek=$this->model_app->umenu_akses("artikel",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/listartikel'><i class='fa fa-circle-o'></i> Experience</a></li>";
                }

                $cek=$this->model_app->umenu_akses("kategoriberita",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/kategoriberita'><i class='fa fa-circle-o'></i> Kategori Berita</a></li>";
                }

                $cek=$this->model_app->umenu_akses("tagberita",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/tagberita'><i class='fa fa-circle-o'></i> Tag Berita</a></li>";
                }
//
//                $cek=$this->model_app->umenu_akses("komentarberita",$this->session->id_session);
//                if($cek==1 OR $this->session->level=='admin'){
//                  echo "<li><a href='".base_url().$this->uri->segment(1)."/komentarberita'><i class='fa fa-circle-o'></i> Komentar Berita</a></li>";
//                }
//
//                $cek=$this->model_app->umenu_akses("sensorkomentar",$this->session->id_session);
//                if($cek==1 OR $this->session->level=='admin'){
//                  echo "<li><a href='".base_url().$this->uri->segment(1)."/sensorkomentar'><i class='fa fa-circle-o'></i> Sensor Komentar</a></li>";
//                }
//
//                $cek=$this->model_app->umenu_akses("album",$this->session->id_session);
//                if($cek==1 OR $this->session->level=='admin'){
//                  echo "<li><a href='".base_url().$this->uri->segment(1)."/album'><i class='fa fa-circle-o'></i> Berita Foto</a></li>";
//                }
//
//                $cek=$this->model_app->umenu_akses("gallery",$this->session->id_session);
//                if($cek==1 OR $this->session->level=='admin'){
//                  echo "<li><a href='".base_url().$this->uri->segment(1)."/gallery'><i class='fa fa-circle-o'></i> Gallery Berita Foto</a></li>";
//                }
              ?>
              </ul>
            </li>
            
<!--            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-play"></i> <span>Modul Video</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("playlist",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/playlist'><i class='fa fa-circle-o'></i> Playlist Video</a></li>";
                }

                $cek=$this->model_app->umenu_akses("video",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/video'><i class='fa fa-circle-o'></i> Video</a></li>";
                }

                $cek=$this->model_app->umenu_akses("tagvideo",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/tagvideo'><i class='fa fa-circle-o'></i> Tag Video</a></li>";
                }

                $cek=$this->model_app->umenu_akses("komentarvideo",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/komentarvideo'><i class='fa fa-circle-o'></i> Komentar Video</a></li>";
                }
              ?>
              </ul>
            </li>-->

<!--            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-blackboard"></i> <span>Modul Iklan</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("iklanatas",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/iklanatas'><i class='fa fa-circle-o'></i> Iklan Atas</a></li>";
                }

                $cek=$this->model_app->umenu_akses("iklanhome",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/iklanhome'><i class='fa fa-circle-o'></i> Iklan Home</a></li>";
                }

                $cek=$this->model_app->umenu_akses("iklansidebar",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/iklansidebar'><i class='fa fa-circle-o'></i> Iklan Sidebar</a></li>";
                }

                $cek=$this->model_app->umenu_akses("banner",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/banner'><i class='fa fa-circle-o'></i> Iklan Link</a></li>";
                }
              ?>
              </ul>
            </li>
            -->
<!--            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-object-align-left"></i> <span>Modul Web</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("logowebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/logowebsite'><i class='fa fa-circle-o'></i> Logo Website</a></li>";
                }

                $cek=$this->model_app->umenu_akses("templatewebsite",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/templatewebsite'><i class='fa fa-circle-o'></i> Template Website</a></li>";
                }

                $cek=$this->model_app->umenu_akses("background",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/background'><i class='fa fa-circle-o'></i> Background Website</a></li>";
                }
              ?>
              </ul>
            </li>-->

<!--            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-blackboard"></i> <span>Modul Interaksi</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("agenda",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/agenda'><i class='fa fa-circle-o'></i> Agenda</a></li>";
                }

                $cek=$this->model_app->umenu_akses("sekilasinfo",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/sekilasinfo'><i class='fa fa-circle-o'></i> Sekilas Info</a></li>";
                }

                $cek=$this->model_app->umenu_akses("jajakpendapat",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/jajakpendapat'><i class='fa fa-circle-o'></i> Jajak Pendapat</a></li>";
                }

                $cek=$this->model_app->umenu_akses("ym",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/ym'><i class='fa fa-circle-o'></i> Yahoo Messanger</a></li>";
                }

                $cek=$this->model_app->umenu_akses("download",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/download'><i class='fa fa-circle-o'></i> Download Area</a></li>";
                }

                $cek=$this->model_app->umenu_akses("alamat",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/alamat'><i class='fa fa-circle-o'></i> Alamat Kontak</a></li>";
                }

                $cek=$this->model_app->umenu_akses("pesanmasuk",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/pesanmasuk'><i class='fa fa-circle-o'></i> Pesan Masuk</a></li>";
                }
              ?>
              </ul>
            </li>
			-->
            <li class="treeview">
              <a href="#"><i class="fa fa-file-image-o"></i> <span>Modul Gallery</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li>
                  <a href="#"><i class="fa fa-circle-o"></i>Manajemen Foto <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
			<?php
                            $cek=$this->model_app->umenu_akses("photo",$this->session->id_session);
                            if($cek==1 OR $this->session->level=='admin'){
                              echo "<li><a href='".base_url().$this->uri->segment(1)."/photo'><i class='fa fa-circle-o'></i>Foto</a></li>";
                            }

                            $cek=$this->model_app->umenu_akses("album",$this->session->id_session);
                            if($cek==1 OR $this->session->level=='admin'){
                              echo "<li><a href='".base_url().$this->uri->segment(1)."/album'><i class='fa fa-circle-o'></i> Album</a></li>";
                            }
                        ?>
                  </ul>
                </li>
              <?php
                

                $cek=$this->model_app->umenu_akses("gallery_videos",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/galleryvideo'><i class='fa fa-circle-o'></i> Manajemen Video</a></li>";
                }
              ?>
              </ul>
            </li>
<!--             <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-blackboard"></i> <span>Modul Project</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("project",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/project'><i class='fa fa-circle-o'></i> Project</a></li>";
                }
              ?>
              </ul>
            </li>-->
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/project"><i class="fa fa-list"></i> <span>Modul Project</span></a></li>
            <li class="treeview">
            <li class="treeview">
             <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-blackboard"></i> <span>Modul Services</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("shipdesign",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_shipdesign/1'><i class='fa fa-circle-o'></i> Ship Design & Analysis</a></li>";
                }
                $cek=$this->model_app->umenu_akses("konsultasi",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_konsultasi/1'><i class='fa fa-circle-o'></i> Konsultasi</a></li>";
                }
                $cek=$this->model_app->umenu_akses("ispscode",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_ispscode/1'><i class='fa fa-circle-o'></i>ISPS Code</a></li>";
                }
                $cek=$this->model_app->umenu_akses("supervisi",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_supervisi/1'><i class='fa fa-circle-o'></i>Supervisi</a></li>";
                }
              ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-black-tie"></i> <span>Modul Career</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("lowongan",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/lowongan'><i class='fa fa-circle-o'></i> Manajemen Lowongan</a></li>";
                }

                $cek=$this->model_app->umenu_akses("document",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/document'><i class='fa fa-circle-o'></i> Manajemen Dokumen</a></li>";
                }
              ?>
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#">
                <i class="fa  fa-info-circle"></i> <span>Modul About US</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Company Profile <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
					<?php
					$cek=$this->model_app->umenu_akses("edit_visimisi",$this->session->id_session);
					if($cek==1 OR $this->session->level=='admin'){
					  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_visimisi'><i class='fa fa-circle-o'></i>Manajemen Visi Misi</a></li>";
					}

					$cek=$this->model_app->umenu_akses("edit_companymoto",$this->session->id_session);
					if($cek==1 OR $this->session->level=='admin'){
					  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_companymoto'><i class='fa fa-circle-o'></i> Manajemen Moto</a></li>";
					}
					
					$cek=$this->model_app->umenu_akses("edit_history",$this->session->id_session);
					if($cek==1 OR $this->session->level=='admin'){
					  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_history'><i class='fa fa-circle-o'></i> Manajemen History</a></li>";
					}
					?>
                  </ul>
                </li>
				<?php
                $cek=$this->model_app->umenu_akses("achievement",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/achievement'><i class='fa fa-circle-o'></i> Manajemen Achievement</a></li>";
                }

                $cek=$this->model_app->umenu_akses("edit_qualitypolice",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url().$this->uri->segment(1)."/edit_qualitypolice'><i class='fa fa-circle-o'></i> Manajemen Quality Police</a></li>";
                }
				?>
              </ul>
            </li>
			
<!--            <li class="treeview">
              <a href="#"><i class="fa fa-users"></i> <span>Modul Users</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
//                $cek=$this->model_app->umenu_akses("manajemenuser",$this->session->id_session);
//                if($cek==1 OR $this->session->level=='admin'){
//                  echo "<li><a href='".base_url().$this->uri->segment(1)."/manajemenuser'><i class='fa fa-circle-o'></i> Manajemen User</a></li>";
//                }

//                $cek=$this->model_app->umenu_akses("manajemenmodul",$this->session->id_session);
//                if($cek==1 OR $this->session->level=='admin'){
//                  echo "<li><a href='".base_url().$this->uri->segment(1)."/manajemenmodul'><i class='fa fa-circle-o'></i> Manajemen Modul</a></li>";
//                }
              ?>
              </ul>
            </li>-->
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/manajemenuser"><i class="fa fa-users"></i> <span>Manajemen User</span></a></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/client/<?php echo $this->session->username; ?>"><i class="fa fa-hand-paper-o"></i> <span>Manajemen Client</span></a></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/pesanmasuk/<?php echo $this->session->username; ?>"><i class="fa fa-envelope-o"></i> <span>Manajemen Pesan</span></a></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>
            <li><a href="<?php echo base_url().$this->uri->segment(1); ?>/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>