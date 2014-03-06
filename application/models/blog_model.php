<?php
   class Blog_model extends CI_MODEL {
   	function getPosts()
   	{
   		$query = $this->db->get ('DATA');
   		return $query->result_array();
   	}

   	public function create_post()
   	{
   		$data['title'] = $this->input->post('title');
   		$data['content'] = $this->input->post('content');
         $data['categories'] = $this->input->post('categories');

   		return $this->db->insert('DATA', $data);
   	}
   
      function getPost($id) 
      { 
          $query = $this->db->get_where('DATA', array('id' => $id)); 
         return $query->result_array(); 
      }  

      function update_post($id)
      { 
         $data['title'] = $this->input->post('title'); 
         $data['content'] = $this->input->post('content'); 
         $data['categories'] = $this->input->post('categories'); 
         $this->db->where('id', $id); 
         $this->db->update('DATA', $data); 
      }

      function delete_post($id) 
      { 
         $this->db->delete('DATA', array('id' => $id)); 
      }
   }

