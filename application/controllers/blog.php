<?php
class Blog extends Controller{
        function Blog(){
                parent::Controller();
        }
        function index(){
              $data['title'] = "My World";
              $data['heading'] = "My World Heading";
              $data['todo'] = array('clean place', 'my place', 'your place');

              $this->load->view('blog_view', $data);

        }
}
?>
