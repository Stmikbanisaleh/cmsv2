<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

    public function index() {
        $this->template->load('template2', 'frontend/career');
    }

}
