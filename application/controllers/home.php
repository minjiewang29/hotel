<?php
class home extends CI_Controller {
    function index(){
        //$this->output->cache(1);
        $this->load->view('header.php');
        $this->load->view('home.php');
        $this->load->view('footer.php');
    }
}
