<?php

  class Cache extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->driver('cache',array('adapter' => 'apc', 'backup' => 'file'));
    }
    function index()
    {
      $this->output->cache(1);
      $this->output->delete_cache();
      $this->load->view('cache');
    }
  }

 ?>
