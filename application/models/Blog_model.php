<?php 

class Blog_model extends CI_Model 
{ 
   

    public function insert($userData) { 
          
         $this->db->insert('blog', $userData);
            
        } 

        function get_posts($number = 10, $start = 0)
        {
            $this->db->select();
            $this->db->from('blog');
            $this->db->limit($number, $start);
            $query = $this->db->get();
            return $query->result_array();
        }

       
    
}
?>