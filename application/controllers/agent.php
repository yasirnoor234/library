<?php
  /**
   *
   */
  class Agent extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
    }
    function index()
    {
        if($this->agent->is_browser())
        {
            echo $this->agent->browser();
            echo "<br>";
            echo $this->agent->version();
        }
        if($this->agent->is_mobile())
        {

        }
    }
  }

 ?>
