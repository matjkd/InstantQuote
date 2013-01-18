<?php

class Content_model extends CI_Model {

	 function __construct()
    {
        parent::__construct();
      
    }
	function get_content($title)
	{
			
		$this->db->where('menu', $title);
		$query = $this->db->get('content');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
		
	}
	
	 /**
     *
     * @param type $filename
     * @param type $blog_id
     * @return type 
     */
    function add_file($filename, $blog_id) {
        $content_update = array(
            'news_image' => $filename
        );

        $this->db->where('content_id', $blog_id);
        $update = $this->db->update('content', $content_update);
        return $update;
    }
	
	 function edit_content($id) {


        $content_update = array(
            'content' => $this->input->post('content'),
            'menu' => $this->input->post('menu'),
          	'title' => $this->input->post('title'),
            'extra' => $this->input->post('extra'),
            'meta_desc' => $this->input->post('meta_desc'),
            'meta_title' => $this->input->post('meta_title'),
            'sidebox' => $this->input->post('sidebox'),
            'start_publish' => $this->input->post('startdate_unix'),
            'end_publish' => $this->input->post('enddate_unix')
			        );




        $this->db->where('content_id', $id);
        $update = $this->db->update('content', $content_update);
        return $update;
    }
	
	function get_all_news()
	{
			
		$this->db->where('content_type', 'news');
		$this->db->orderby('content_id', 'desc');
		$query = $this->db->get('content');
		if($query->num_rows > 0);
			{
				return $query->result();
			}
		
	}
	function get_news($id)
	{
			
		$this->db->where('menu', $id);
		$query = $this->db->get('content');
		if($query->num_rows > 0);
			{
				return $query->result();
			}
		
	}
	
	function get_service_groups()
	{
		
		$query = $this->db->get('service_groups');
		if($query->num_rows > 0);
			{
				return $query->result();
			}
	}
	
	function get_services()
	{
		$query = $this->db->get('services');
		if($query->num_rows > 0);
			{
				return $query->result();
			}
	}
	
	function latest_news()
	{
	$this->db->where('content_type', 'news');
	$this->db->orderby('content_id', 'desc');
	$this->db->limit(1);
		$query = $this->db->get('content');
		if($query->num_rows == 1);
			{
				return $query->result();
			}
	}
}