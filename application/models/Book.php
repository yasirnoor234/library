<?php 

class Book extends CI_Model
{
    public function get_book()
    {
        //SELECT * FROM Books;
        $this->db->select()->from('books');
        
        //$a=mysqli_query()
        $query = $this->db->get();
        
        //mysqli_fetch_array($a)
        return $query->result_array();
        
        
    }
} 

?>