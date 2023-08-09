<?php
class Page extends CI_Controller {

    public function index()
    {
        $data['page_title']='Your title';
        $data->load->view('header');
        $data->load->view('menu');
        $data->load->view('content', $data);
        $data->load->view('footer');
    }
}