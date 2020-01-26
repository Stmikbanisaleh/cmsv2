<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        // load library text string
        $this->load->helper(array('string', 'text'));
    }

    function lang() {
        $data = $this->uri->segment(3);
        if ($data == 'id') {
            $this->session->set_userdata('bahasa', 'en');
            $this->template->load('template', 'frontend/home');
        } else {
            $this->session->set_userdata('bahasa', 'id');
            $this->template->load('template', 'frontend/home');
        }
    }

    public function index() {

        $this->template->load('template', 'frontend/home');
    }

    public function visi_misi() {
        $data['judul_head'] = 'Visi dan Misi';
        $data['judul_head_e'] = 'Vision and Mission';
        $this->template->load('template2', 'frontend/vision_and_mission', $data);
    }

    public function moto() {
        $data['judul_head'] = 'Moto Perusahaan';
        $data['judul_head_e'] = 'Company Motto';
        $this->template->load('template2', 'frontend/moto', $data);
    }

    public function history() {
        $data['judul_head'] = 'Sejarah';
        $data['judul_head_e'] = 'History';
        $this->template->load('template2', 'frontend/history', $data);
    }

    public function achivment() {
        $data['judul_head'] = 'Prestasi';
        $data['judul_head_e'] = 'Achievement';
        $this->template->load('template3', 'frontend/achivment', $data);
    }
    
    public function detail_achievement() {
        $data['judul_head'] = 'Pencapaian';
        $data['judul_head_e'] = 'Achievement';
        $data['table'] = 'achievement';
        $data['field_id'] = 'id_achievement';
        $data['url_folder'] = 'asset/front/img/achievement/';
        $data['id'] = 1;
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/detail/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/detail/detail_e', $data);
        }
        
    }

    public function quality_policy() {
        $data['judul_head'] = 'Kebijakan Mutu';
        $data['judul_head_e'] = 'Quality Police';
        $this->template->load('template2', 'frontend/quality_policy', $data);
    }

    public function our_product() {
        $data['judul_head'] = 'Proyek Kami';
        $data['judul_head_e'] = 'Our Project';
        $this->template->load('template3', 'frontend/our_product', $data);
    }

    public function our_photos() {
        if($this->uri->segment(3)!=''){
            
            $data['judul_head'] = 'Foto Kami';
            $data['judul_head_e'] = 'Our Photo';
            $this->template->load('template3', 'frontend/our_photos', $data);
        }else{
            $data['judul_head'] = 'Album';
            $data['judul_head_e'] = 'Album';
            $this->template->load('template3', 'frontend/album', $data);
        }
    }

    public function our_videos() {
        $data['judul_head'] = 'Video Kami';
        $data['judul_head_e'] = 'Our Video';
        $this->template->load('template3', 'frontend/our_videos', $data);
    }

    public function career() {
        $data['judul_head'] = 'Karir';
        $data['judul_head_e'] = 'Career';
        $this->template->load('template2', 'frontend/career', $data);
    }

    public function contact() {
        if (isset($_POST['submit'])) {
            $this->load->model('admin_model');
            $data = array('nama' => $this->db->escape_str($this->input->post('name')),
                'email' => $this->db->escape_str($this->input->post('email')),
                'subjek' => $this->db->escape_str($this->input->post('subject')),
                'pesan' => $this->db->escape_str($this->input->post('message')),
                'tanggal' => date('Y-m-d'),
                'jam' => date('H:i:s')
            );
            $query = $this->model_app->insert('hubungi', $data);
            if($query){
                $data['hasil'] =1;
            } else {
                $data['hasil'] =0;
            }
            $data['judul_head'] = 'Kontak';
            $data['judul_head_e'] = 'Contact';
            $this->template->load('template2', 'frontend/contact', $data);
        }else{
        $data['hasil'] =0;
        $data['judul_head'] = 'Kontak';
        $data['judul_head_e'] = 'Contact';
        $this->template->load('template2', 'frontend/contact', $data);
        }
    }

    public function news() {
                //konfigurasi pagination
        $config['base_url'] = site_url('home/news'); //site url
        $config['total_rows'] = $this->model_utama->view_where_pagination1_count('berita', array('status' => 'Y'), 'id_berita', 'desc', $config["per_page"], $data['page']); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        $data['data'] = $this->model_utama->view_where_pagination1('berita', array('status' => 'Y'), 'id_berita', 'desc', $config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'berita';
        $data['function'] = 'news_detail';
        $data['judul_head'] = 'Berita';
        $data['judul_head_e'] = 'News';
        $data['url'] = 'asset/foto_berita/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/article', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/article_e', $data);
        }
        
    }

    public function article() {
        //konfigurasi pagination
        $config['base_url'] = site_url('home/article'); //site url
        $config['total_rows'] = $this->model_utama->view_where_pagination1_count('artikel', array('status' => 'Y'), 'id_artikel', 'desc', $config["per_page"], $data['page']); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        $data['data'] = $this->model_utama->view_where_pagination1('artikel', array('status' => 'Y'), 'id_artikel', 'desc', $config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'artikel';
        $data['function'] = 'article_detail';
        $data['judul_head'] = 'Artikel';
        $data['judul_head_e'] = 'Article';
        $data['url'] = 'asset/foto_artikel/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/article', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/article_e', $data);
        }
        
    }

    public function news_detail() {
        $data['judul_head'] = 'Berita';
        $data['judul_head_e'] = 'News';
        $data['table'] = 'berita';
        $data['url_folder'] = 'asset/foto_berita/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/detail_e', $data);
        }
        
    }

    public function article_detail() {
        $data['judul_head'] = 'Artikel';
        $data['judul_head_e'] = 'Article';
        $data['table'] = 'artikel';
        $data['url_folder'] = 'asset/foto_artikel/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/detail_e', $data);
        }
        
    }
    
        public function finished() {
        //konfigurasi pagination
        $config['base_url'] = site_url('home/finished'); //site url
        $config['total_rows'] = $this->model_utama->view_where_pagination1_count('project', array('status' => '1'), 'id_project', 'asc', $config["per_page"], $data['page']); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        $data['data'] = $this->model_utama->view_where_pagination1('project', array('status' => '1'), 'id_project', 'asc', $config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'project';
        $data['function'] = 'finished_detail';
        $data['judul_head'] = 'Layanan Selesai';
        $data['judul_head_e'] = 'Service Finished';
        $data['url_folder'] = 'asset/foto_project/';
        
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/experience', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/experience_e', $data);
        }
        
    }
    
        public function finished_detail() {
        $data['judul_head'] = 'Layanan Selesai';
        $data['judul_head_e'] = 'Service Finished';
        $data['table'] = 'project';
        $data['url_folder'] = 'asset/foto_project/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/experience_detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/experience_detail_e', $data);
        }
        
    }
    
    public function on_progres() {
        //konfigurasi pagination
        $config['base_url'] = site_url('home/on_progres'); //site url
        $config['total_rows'] = $this->model_utama->view_where_pagination1_count('project', array('status' => '0'), 'id_project', 'asc', $config["per_page"], $data['page']); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        $data['data'] = $this->model_utama->view_where_pagination1('project', array('status' => '0'), 'id_project', 'asc', $config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'project';
        $data['function'] = 'on_progres_detail';
        $data['judul_head'] = 'Dalam Pengerjaan';
        $data['judul_head_e'] = 'On Going';
        $data['url_folder'] = 'asset/foto_project/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/experience', $data);
        }else{
            $this->template->load('template_news', 'frontend/news_article/experience_e', $data);
        }
        
    }
    
        public function on_progres_detail() {
        $data['judul_head'] = 'Layanan Selesai';
        $data['judul_head_e'] = 'Service Finished';
        $data['table'] = 'project';
        $data['url_folder'] = 'asset/foto_project/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/experience_detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/experience_detail_e', $data);
        }
        
    }
    
    public function ship_design() {
        $data['judul_head'] = 'Desain Kapal';
        $data['judul_head_e'] = 'Ship Design';
        $data['table'] = 'shipdesign';
        $data['field_id'] = 'id_shipdesign';
        $data['id'] = 1;
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/services/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/services/detail_e', $data);
        }
        
    }
    
    public function konsultasi() {
        $data['judul_head'] = 'Konsultasi';
        $data['judul_head_e'] = 'consultation';
        $data['table'] = 'konsultasi';
        $data['field_id'] = 'id_konsultasi';
        $data['id'] = 1;
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/services/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/services/detail_e', $data);
        }
        
    }
    
    public function isps_code() {
        $data['judul_head'] = 'ISPS Code';
        $data['judul_head_e'] = 'ISPS Code';
        $data['table'] = 'ispscode';
        $data['field_id'] = 'id_ispscode';
        $data['id'] = 1;
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/services/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/services/detail_e', $data);
        }
        
    }
    
    public function supervisi() {
        $data['judul_head'] = 'Super Visi';
        $data['judul_head_e'] = 'Super Vision';
        $data['table'] = 'supervisi';
        $data['field_id'] = 'id_supervisi';
        $data['id'] = 1;
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/services/detail', $data);
        } else {
            $this->template->load('template_news', 'frontend/services/detail_e', $data);
        }
        
    }
    
    public function slide() {
        $data['judul_head'] = 'Slide';
        $data['judul_head_e'] = 'Slide';
        $data['table'] = 'slider';
        $data['field_id'] = 'id_slider';
        $data['url_folder'] = 'asset/front/img/slides/flexslider/';
        $data['id'] = 1;
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/news_article/detail_slide', $data);
        } else {
            $this->template->load('template_news', 'frontend/news_article/detail_slide_e', $data);
        }
        
    }
    
    public function kategori() {
                //konfigurasi pagination
//        $kategori_seo = urldecode($this->uri->segment(3));
//        $hasil_kategori = $this->model_utama->view_kategori_id(array('kategori_seo' => 'teknologi'));
//        echo $hasil_kategori;
        $id_kategori = $this->uri->segment(3);
        $config['base_url'] = site_url('home/news'); //site url
        $config['total_rows'] = $this->model_utama->view_where_pagination1_count('berita', array('aktif' => 'Y', 'id_kategori'=>$id_kategori), 'id_berita', 'desc', $config["per_page"], $data['page']); //total row
        $this->model_utama->view_where_count('berita', array('aktif' => 'Y', 'id_kategori' => $row['id_kategori']));
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data['data'] = $this->model_utama->view_where_pagination1('berita', array('aktif' => 'Y', 'id_kategori'=>$this->uri->segment(3)), 'id_berita', 'desc', $config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'berita';
        $data['function'] = 'news_detail';
        $data['judul_head'] = 'Berita';
        $data['judul_head_e'] = 'News';
        $data['url'] = 'asset/foto_berita/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/tag-kategori/list', $data);
        } else {
            $this->template->load('template_news', 'frontend/tag-kategori/list_e', $data);
        }
    }
        
        public function tag() {
        //konfigurasi pagination
        $tag = urldecode($this->uri->segment(3));
        //$hasil_kategori = $this->model_utama->view_kategori_id(array('kategori_seo' => 'teknologi'));
        //echo $hasil_kategori;
        $config['base_url'] = site_url('home/news'); //site url
        $hasil_a = $this->db->query("select * from berita where status ='Y' AND tag like '%$tag%' order by id_berita desc ");
        $b =  $hasil_a->num_rows();
        $config['total_rows'] = $b;
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data['data'] = $this->db->query("select * from berita where status ='Y' AND tag like '%$tag%' order by id_berita desc ");
        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'berita';
        $data['function'] = 'news_detail';
        $data['judul_head'] = 'Berita';
        $data['judul_head_e'] = 'News';
        $data['url'] = 'asset/foto_berita/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/tag-kategori/list', $data);
        } else {
            $this->template->load('template_news', 'frontend/tag-kategori/list_e', $data);
        }
        
    }
    
    public function search() {
        //konfigurasi pagination
        $tag = urldecode($this->uri->segment(3));
        //$hasil_kategori = $this->model_utama->view_kategori_id(array('kategori_seo' => 'teknologi'));
        //echo $hasil_kategori;
        $config['base_url'] = site_url('home/news'); //site url
        $hasil_a = $this->db->query("select * from berita where status ='Y' AND tag like '%$tag%' order by id_berita desc ");
        $b =  $hasil_a->num_rows();
        $config['total_rows'] = $b;
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        $config['num_tag_open']     = '';
        $config['num_tag_close']    = '';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['next_tag_open']    = '';
        $config['next_tagl_close']  = '';
        $config['prev_tag_open']    = '';
        $config['prev_tagl_close']  = '';
        $config['first_tag_open']   = '';
        $config['first_tagl_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tagl_close']  = '';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data['data'] = $this->db->query("select * from berita where status ='Y' AND tag like '%$tag%' order by id_berita desc ");
        $data['pagination'] = $this->pagination->create_links();
        
        $data['table'] = 'berita';
        $data['function'] = 'news_detail';
        $data['judul_head'] = 'Berita';
        $data['judul_head_e'] = 'News';
        $data['url'] = 'asset/foto_berita/';
        if ($this->session->userdata('bahasa') == 'id') {
            $this->template->load('template_news', 'frontend/tag-kategori/list', $data);
        } else {
            $this->template->load('template_news', 'frontend/tag-kategori/list_e', $data);
        }
        
    }
     
}
