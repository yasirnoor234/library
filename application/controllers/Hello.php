<?php 

    class Hello extends CI_Controller
    {
        public function index()
        {
            echo "<h1>Hello World</h1>";
            echo "<p>Stay tune for next video</p>";
        }
        public function Codeigniter()
        {
            $this->load->view('header');
            $this->load->view('hello_message');
            $this->load->view('footer');
        }
        public function Pakistan($name)
        {
            echo "<h1>Welcome</h1>";
            echo "<h2>Name : $name</h2>";
        }
    
    
    }

?>