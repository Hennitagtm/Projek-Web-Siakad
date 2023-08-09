<?php
class Belajar extends CI_Controller {
  public function _construct()
  {
  	parent::_construct();
    $this->load->model('post');
  }
  
  public function index()
  {
    //echo 'Hello World!';//before
    $this->load->view('blogview');//after
  }
}