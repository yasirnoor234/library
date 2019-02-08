<?php

    class Helper extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper(array('html','url','form'));
            //$this->load->helper('url');
            
        }
        public function index()
        {
            $this->load->view('Helper');
        }
    }

?>