<?php
  class home extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('blog_model');
    }
    function index ()
    {
    $data['title'] = "I Challenge You";
    $data ['posts'] = $this->blog_model->getPosts();
    $this->load->view('Templates/header', $data); 
    $this->load->view('home_view', $data);
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