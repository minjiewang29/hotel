<?php
class home extends CI_Controller {
    function index(){
        $this->output->cache(1);
        $data['page']='home';
        $this->load->view('header.php',$data);
        $this->load->view('home.php');
        $this->load->view('footer.php');
    }
}
