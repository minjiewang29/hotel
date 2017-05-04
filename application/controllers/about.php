<?php
class about extends CI_Controller {
    function index(){
        //$this->output->cache(1);
        $data['page']='about';
        $this->load->view('header.php',$data);
        $this->load->view('about.php');
        $this->load->view('footer.php');
    }
}
