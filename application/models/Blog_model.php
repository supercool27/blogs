<?php 

class Blog_model extends CI_Model 
{ 
   

    public function insert($userData) { 
          
          
     
            $this->db->insert('blog', $userData);
           
            
        } 
       
    
}
?>