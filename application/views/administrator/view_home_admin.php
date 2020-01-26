  <a style='color:#000' href='<?php echo base_url().$this->uri->segment(1); ?>/listberita'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Berita</span>
        <?php $jmla = $this->model_app->view('berita')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmla; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

  <a style='color:#000' href='<?php echo base_url().$this->uri->segment(1); ?>/project_finished'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-check-circle"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Proyek Selesai</span>
        <?php $jmlb = $this->model_app->view_where_ordering_1('project', array('status' => '1'), 'id_project', 'DESC')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlb; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

  <a style='color:#000' href='<?php echo base_url().$this->uri->segment(1); ?>/project_ongoing'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-hourglass-2"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Proyek Dalam Pengerjaan</span>
        <?php $jmlc = $this->model_app->view_where_ordering_1('project', array('status' => '0'), 'id_project', 'DESC')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmlc; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

  <a style='color:#000' href='<?php echo base_url().$this->uri->segment(1); ?>/manajemenuser'>
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Users</span>
        <?php $jmld = $this->model_app->view('users')->num_rows(); ?>
        <span class="info-box-number"><?php echo $jmld; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
  </a>

<section class="col-lg-7 connectedSortable">
  <?php 
    $jmlpesan = $this->model_app->view_where('hubungi', array('dibaca'=>'N'))->num_rows(); 
    $jmlberita = $this->model_app->view_where('komentar', array('aktif'=>'N'))->num_rows(); 
    $jmlvideo = $this->model_app->view_where('komentarvid', array('aktif'=>'N'))->num_rows(); 
  ?>
  <div class='box'>
    <div class='box-header'>
      <h3 class='box-title'>Application Buttons</h3>
    </div>
    <div class='box-body'>
      <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda 
          atau pilih ikon-ikon pada Control Panel di bawah ini : </p>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/identitaswebsite" class='btn btn-app'><i class='glyphicon glyphicon-th-list'></i> Identitas</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/footer" class='btn btn-app'><i class='glyphicon glyphicon-th-list'></i> Footer</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/halamanbaru" class='btn btn-app'><i class='glyphicon glyphicon-th-list'></i> Halaman Baru</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/sosmed" class='btn btn-app'><i class='glyphicon glyphicon-th-list'></i> Sosial Media</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/slide" class='btn btn-app'><i class='fa fa-edit'></i> Modul Slide</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/listberita" class='btn btn-app'><i class='glyphicon glyphicon-pencil'></i> Berita</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/listartikel" class='btn btn-app'><i class='glyphicon glyphicon-pencil'></i> Experience</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/kategoriberita" class='btn btn-app'><i class='glyphicon glyphicon-pencil'></i> Kategori</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/tagberita" class='btn btn-app'><i class='glyphicon glyphicon-pencil'></i> Tag</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/photo" class='btn btn-app'><i class='fa fa-file-image-o'></i> Photo</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/galleryvideo" class='btn btn-app'><i class='fa fa-file-image-o'></i> Video</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/project" class='btn btn-app'><i class='fa fa-list'></i> Modul Project</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_shipdesign/1" class='btn btn-app'><i class='glyphicon glyphicon-blackboard'></i> Ship Design</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_konsultasi/1" class='btn btn-app'><i class='glyphicon glyphicon-blackboard'></i> Konsultasi</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_ispscode/1" class='btn btn-app'><i class='glyphicon glyphicon-blackboard'></i> ISPS Code</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_supervisi/1" class='btn btn-app'><i class='glyphicon glyphicon-blackboard'></i> Super Visi</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/lowongan" class='btn btn-app'><i class='fa fa-black-tie'></i> Lowongan</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/document" class='btn btn-app'><i class='fa fa-black-tie'></i> Dokumen</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_visimisi" class='btn btn-app'><i class='fa fa-info-circle'></i> Visi Misi</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_companymoto" class='btn btn-app'><i class='fa fa-info-circle'></i> Moto</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_history" class='btn btn-app'><i class='fa fa-info-circle'></i> History</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/achievement" class='btn btn-app'><i class='fa fa-info-circle'></i> Achievement</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_qualitypolice" class='btn btn-app'><i class='fa fa-info-circle'></i> Quality Police</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/manajemenuser" class='btn btn-app'><i class='fa fa-users'></i> Users</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/client/<?php echo $this->session->username; ?>" class='btn btn-app'><i class='fa fa-envelope-o'></i> Manajemen Client</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/pesanmasuk/<?php echo $this->session->username; ?>" class='btn btn-app'><i class='fa fa-envelope-o'></i> Manajemen Pesan</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/edit_manajemenuser/<?php echo $this->session->username; ?>" class='btn btn-app'><i class='fa fa-edit'></i> Edit Profile</a>
<!--      <a href="<?php echo base_url().$this->uri->segment(1); ?>/identitaswebsite" class='btn btn-app'><i class='fa fa-th'></i> Identitas</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/menuwebsite" class='btn btn-app'><i class='fa fa-th-large'></i> Menu</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/halamanbaru" class='btn btn-app'><i class='fa fa-file-text'></i> Halaman</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/listberita" class='btn btn-app'><i class='fa fa-television'></i> Berita</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/kategoriberita" class='btn btn-app'><i class='fa fa-bars'></i> Kategori</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/tagberita" class='btn btn-app'><i class='fa fa-tag'></i> Tag Berita</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/komentarberita" class='btn btn-app'><span class='badge bg-green'><?php echo $jmlberita; ?></span><i class='fa fa-comments'></i> Komen. Berita</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/sensorkomentar" class='btn btn-app'><i class='fa fa-bell-slash'></i> Sensor</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/album" class='btn btn-app'><i class='fa fa-camera-retro'></i> Album</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/gallery" class='btn btn-app'><i class='fa fa-camera'></i> Gallery</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/playlist" class='btn btn-app'><i class='fa fa-caret-square-o-right'></i> Playlist</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/video" class='btn btn-app'><i class='fa fa-play'></i> Video</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/tagvideo" class='btn btn-app'><i class='fa fa-tags'></i> Tag Video</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/komentarvideo" class='btn btn-app'><span class='badge bg-blue'><?php echo $jmlvideo; ?></span><i class='fa fa-comments-o'></i> Komen. Video</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/iklanatas" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Atas</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/iklansidebar" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Sidebar</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/iklanhome" class='btn btn-app'><i class='fa fa-file-image-o'></i> Ads Tengah</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/logowebsite" class='btn btn-app'><i class='fa fa-circle-thin'></i> Logo</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/templatewebsite" class='btn btn-app'><i class='fa fa-file'></i> Template</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/background" class='btn btn-app'><i class='fa fa-circle'></i> Background</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/agenda" class='btn btn-app'><i class='fa fa-calendar-minus-o'></i> Agenda</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/agenda" class='btn btn-app'><i class='fa fa-calendar-minus-o'></i> Sekilas Info</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/jajakpendapat" class='btn btn-app'><i class='fa fa-bar-chart-o'></i> Polling</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/ym" class='btn btn-app'><i class='fa fa-yahoo'></i> YM</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/download" class='btn btn-app'><i class='fa fa-download'></i> Download</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/alamat" class='btn btn-app'><i class='fa fa-bed'></i> Alamat</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/pesanmasuk" class='btn btn-app'><span class='badge bg-yellow'><?php echo $jmlpesan; ?></span><i class='fa fa-envelope'></i> Pesan</a>
      <a href="<?php echo base_url().$this->uri->segment(1); ?>/manajemenuser" class='btn btn-app'><i class='fa fa-users'></i> Users</a>-->
    </div>
  </div>
</section><!-- /.Left col -->

<section class="col-lg-5 connectedSortable">
    <?php include "grafik.php"; ?>
</section><!-- right col -->
