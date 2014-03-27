<?php
  class challenges extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('blog_model');
    }
    function index ()
    {
    $data['title'] = "Chose Your Challenge";
    $data ['posts'] = $this->blog_model->getPosts();
    $this->load->view('Templates/header', $data); 
    $this->load->view('challenges_view', $data);
    $this->load->view('Templates/footer', $data);
    }

    function post ($id)
    {
      $this->load->helper('form');
      $data['title'] = "Comment";
      $data ['posts'] = $this->blog_model->getPost($id);
      $data ['comment'] = $this->blog_model->get_comment($id);
      $this->load->view('Templates/header', $data); 
      $this->load->view('blog_single_view', $data);
      $this->load->view('Templates/footer', $data);
    }

    function comment ($id)
    {
      $this->blog_model->create_comment($id);
      $this->post($id);
  }
}