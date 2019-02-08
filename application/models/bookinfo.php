<?php
    
    class BookInfo extends CI_Model
    {
        function __Construct()
        {
            parent::__construct();
        }
        function book_insert($data)
        {
            $this->db->insert('books',$data);
            return "Successfully Book Added";
        }
    }

?>