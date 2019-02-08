<?php 

    class Store extends CI_Controller
    {
        public function index()
        {
            $this->load->model('Book');
            $data['result'] = $this->Book->get_book(); 
            
            $this->load->view('display',$data);
           // echo '<pre>';
           // echo print_r($data['result']);
           // echo '</pre>';

        }
    }
?>