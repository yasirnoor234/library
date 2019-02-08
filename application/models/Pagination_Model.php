<?php

    /**
     *
     */
    class Pagination_Model extends CI_Model
    {

      function __construct()
      {
        parent::__construct();
      }
      function total_record(')
      {
        # code...
        return $this->db->count_all('books');
      }
      function fetch_data($limit,$start)
      {
        # code...
        $this->db->limit($limit,$start);
        $query = $this->db->get('books');

        if($query->num_rows() >0)
        {
          foreach ($query->result() as $row) {
            # code...
            $data[] = $row;
          }
          return $data;
        }
      }
    }



?>
