<?php 

    class Insert extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper(array('html','form'));
            $this->load->model('BookInfo');
        } 
        function index()
        {
            if($_POST)
            {
                $data = array(
                    'name' => $this->input->post('name'),
                    'author' => $this->input->post('author')
                    
                );
               echo $this->bookinfo->book_insert($data);
                 
            }
            else
            {
                $this->load->view('Insert-form');
            }
        }
    }

?>