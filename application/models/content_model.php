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
	
	function get_content_by_category($category) {
		$this->db->where('category', $category);
		
		$query = $this->db->get('content');
		if($query->num_rows > 0)
			{
				return $query->result();
			}
	}
	
	
	function get_random_content($category) {
		$this->db->where('category', $category);
		
		$this->db->order_by('content_id', 'RANDOM');
		$this->db->limit(1);
		$query = $this->db->get('content');
		if($query->num_rows == 1)
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
          	'town' => $this->input->post('town'),
          	'sale_price' => $this->input->post('sale_price'),
          	'sale_price_leasehold' => $this->input->post('sale_price_leasehold'),
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
	function add_content() {

        //process menu link
        $menu_link = $this->input->post('menu');
        $search = array(" ");
        $replace = "-";
        if ($menu_link == NULL) {

            $subject = set_value('title');
            $menu_link = str_replace($search, $replace, $subject);
        } else {
            $subject = $this->input->post('menu');
            $menu_link = str_replace($search, $replace, $subject);
        }

        // build array for the model
        $name = "" . $this->session->userdata('firstname') . " " . $this->session->userdata('lastname') . "";

        $now = time();
        $datetime = $now;
        $form_data = array(
            'title' => set_value('title'),
            'content' => $this->input->post('content'),
            'menu' => $menu_link,
            'town' => $this->input->post('town'),
            'sale_price' => $this->input->post('sale_price'),
            'sale_price_leasehold' => $this->input->post('sale_price_leasehold'),
            'category' => set_value('category'),
            'added_by' => $name,
            'meta_desc' => $this->input->post('meta_desc'),
            'meta_title' => $this->input->post('meta_title'),
              'main_content' => $this->input->post('main_content'),
            'date_added' => $datetime
        );
        $insert = $this->db->insert('content', $form_data);
        return $insert;
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