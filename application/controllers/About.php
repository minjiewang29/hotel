<?php
class About extends CI_Controller {
    function index(){
        $data['title']="科特迪瓦，酒店，住宿，旅游，机场接送";
        $this->load->view('head.php',$data);
        $this->load->view('about.html');
        $this->load->view('footer.html');
    }
}
