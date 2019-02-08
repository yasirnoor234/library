<?php

    class Verify extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('user');
        }
        function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $answer = $this->user->user_verify($username,$password);
            
            if($answer)
            {
                //echo $answer[0]['username'];
                $data = array(
                        'username' => $answer[0]['username'];
                    );
                $this->session->set_userdata($data);
               echo "Login Successful";
                
            }
            else
            {
                echo "Login Credentials are wrong";
            }
        }
        function logout()
        {
            $this->session->unset_userdata('username');
            echo "Logout Successfully";
        }
    }
?>