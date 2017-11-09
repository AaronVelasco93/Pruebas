<?php
class Menu extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->helper('url_helper');

    }

    public function index(){

            $this->load->view('templates/header');
            $this->load->view('pages/menu.php');
            $this->load->view('templates/footer');
    }

}
