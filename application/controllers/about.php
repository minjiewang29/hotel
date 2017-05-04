<?php
class about extends CI_Controller {
    function index(){
        //$this->output->cache(1);
        $this->load->view('header.php');
        $this->load->view('about.php');
        $this->load->view('footer.php');
    }
}
