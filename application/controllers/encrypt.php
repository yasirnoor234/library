<?php
  /**
   *
   */
  class Encrypt extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('encrypt');
    }
    function index()
    {
        $this->load->view('encrypt_form');
    }
    function encoder()
    {
        $message = $this->input->post('message');
        $data['key'] = $this->encrypt->encode('message');
        $this->load->view('encrypt_form',$data);
    }
    function decoder()
    {
        $message = $this->input->post('message');
        $data['key1'] = $this->encrypt->decode('message');
        $this->load->view('encrypt_form',$data);
    }
  }

?>
