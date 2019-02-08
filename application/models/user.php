<?php
    
    class User extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function user_verify($username,$passwrod)
        {
            $this->db->select();
            $this->db->from('user');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1)
            {
                return $query->result_array();
            }
            else{
                return false;
            }
        }
        
    }

?>