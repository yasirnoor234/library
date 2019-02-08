<?php 
    
    class Show extends CI_Controller
    {
        function index()
        {
            $some_var ='asd';
            if($some_var == '') //value and data type 
            {
                log_message('error','Some variable did not contain a value');
            }
            else
            {
                log_message('debug','Some variable was correctly set');        
            }
                
            log_message('info','The purpose of come variable is to provide some value');
        }
    }

?>