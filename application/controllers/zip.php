<?php
  /**
   *
   */
  class Zip extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->library('zip');
    }
    function index()
    {
        //Function Oriented
        //OOP
        //React (Artificial Intelligence)
        //React Facebook
        //Google Angular - AJAX

        $file = "data.txt";
        $data = "Codeigniter Tuotrial";

        $this->zip->add_data($file,$data);
        //$this->zip->download('Backup.zip')
        $this->zip->archive('server_backup.zip');
    }
    // Moore Automta theory
    /*
      Computer performance 18 months (double)
      price divide
    */
  }

 ?>
