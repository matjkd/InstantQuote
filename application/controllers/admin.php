<?php
class Admin extends MY_Controller

{
function __construct()
	{
		parent::__construct();
                $this->load->model('admin_model');
				 $this->load->model('gallery_model');
                 $this->load->model('content_model');
				  $this->load->library('s3');
		$this->load->library(array('encrypt', 'form_validation'));
		$this->is_logged_in();
	}
        function index()
        {

            $data['purchasefees'] = $this->admin_model->get_fees('purchasefee');
            $data['salefees'] = $this->admin_model->get_fees('salefee');
            $data['stampfees'] = $this->admin_model->get_fees('stampfee');
            $data['landfees'] = $this->admin_model->get_fees('landfee');
            $data['variables'] = $this->admin_model->get_variables();

            $data['title'] = "Calculator Admin";
            $data['main_content'] = "admin/fees";
            $this->load->vars($data);
            $this->load->view('template/bootstrap');

        }

        function add_fee()
        {

            $this->admin_model->add_fee();
            redirect('admin');
        }

        function delete_fee($id)
        {

          $this->admin_model->delete_fee($id);
           redirect('admin');
        }

        function edit_variable()
        {
            $data['id'] = $this->input->post('id');
            $data['field'] = $this->input->post('elementid');
            $data['value'] = $this->input->post('value');
            $this->admin_model->edit_variable($data['id'], $data['field'], $data['value']);

            $update = $this->input->post('value');


           


		$this->output->set_output($update);
        }
        
        function content()
		{
		if(($this->uri->segment(3))<1)
				{
					$id = 1;
				}
			else
				{
					$id = $this->uri->segment(3);
				}
			$data['content'] =	$this->content_model->get_content($id);
			$data['main'] = "pages/dynamic";
			$data['edit'] = "admin/edit/$id";
			$this->load->vars($data);
			  $this->load->view('template/ker');
			
			
			
		}
		
		 function add_content() {
        $data['main'] = "admin/add_content";
        //$data['pages'] = $this->content_model->get_all_content();

        $this->load->vars($data);
        $this->load->view('template/ker');
    }
		 
		  function add_local() {
        $data['main_content'] = "admin/add_local";
        //$data['pages'] = $this->content_model->get_all_content();

        $this->load->vars($data);
        $this->load->view('template/bootstrap');
    }
		  
		  
		   function submit_content() {
        $this->form_validation->set_rules('title', 'Title', 'trim|max_length[255]|required');
        $this->form_validation->set_rules('content', 'Content', 'trim');
        $this->form_validation->set_rules('menu', 'menu', 'trim');
        $this->form_validation->set_rules('category', 'Category', 'trim|max_length[11]');
        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn'\t been passed
            echo "validation error";
        } else { // passed validation proceed to post success logic
            if ($this->content_model->add_content()) { // the information has therefore been successfully saved in the db
                //now process the image
                // run insert model to write data to db
                //upload file
                //retrieve uploaded file
                $this->upload_image();




                redirect('/admin');   // or whatever logic needs to occur
            } else {
                echo 'An error occurred saving your information. Please try again later';
                // Or whatever error handling is necessary
            }
        }
    }
	function edit()
	{
		
		
		$id = $this->uri->segment(3);
		$data['menu'] = $id;
		$data['page'] = $id;
		$data['content'] =	$this->content_model->get_content($id);
		
		$data['main_content'] = "admin/edit_content";
		
		if($data['menu'] == 'services')
			{
				$data['service_groups'] = $this->content_model->get_service_groups();
				$data['services'] = $this->content_model->get_services();
			} 
	
		$this->load->vars($data);
		  $this->load->view('template/bootstrap');
	}
	function edit_content() {
        $this->form_validation->set_rules('title', 'title', 'trim');
        $this->form_validation->set_rules('menu', 'menu', 'trim|required');
        if ($this->form_validation->run() == FALSE) { // validation hasn'\t been passed
            echo "validation error";
        } else { // passed validation proceed to post success logic
            $id = $this->uri->segment(3);
            $this->content_model->edit_content($id);


            $this->upload_image($id);



           redirect("admin/edit/".set_value('menu'));
        }
    }
	function create_page()
	{
		
		
		
	}
	
	 function upload_image($id = 0) {

        $this->gallery_model->do_upload();


        if (!empty($_FILES) && $_FILES['file']['error'] != 4) {

            $fileName = $_FILES['file']['name'];
            $tmpName = $_FILES['file']['tmp_name'];
            $fileName = str_replace(" ", "_", $fileName);
            $filelocation = $fileName;

            $thefile = file_get_contents($tmpName, true);

            //add filename into database
            //get blog id
            if ($id == 0) {
                $blog_id = mysql_insert_id();
            } else {
                $blog_id = $id;
            }
            $this->content_model->add_file($fileName, $blog_id);
            //move the file
echo $this->bucket;
            if ($this->s3->putObject($thefile, $this->bucket, $filelocation, S3:: ACL_PUBLIC_READ)) {
                echo "We successfully uploaded your file.";
                $this->session->set_flashdata('message', 'News Added and file uploaded successfully');
            } else {
                echo "Something went wrong while uploading your file... sorry.";
                $this->session->set_flashdata('message', 'News Added, but your file did not upload');
            }

            //uploadthumb
            $thumblocation = base_url() . 'images/temp/thumbs/' . $fileName;
            $newfilename = "thumb_" . $fileName;


            $newfile = file_get_contents($thumblocation, true);

            if ($this->s3->putObject($newfile, $this->bucket, $newfilename, S3:: ACL_PUBLIC_READ)) {
                echo "We successfully uploaded your file.";
                $this->session->set_flashdata('message', 'News Added and file uploaded successfully');
            } else {
                echo "Something went wrong while uploading your file... sorry.";
                $this->session->set_flashdata('message', 'News Added, but your file did not upload');
            }
//delete files from server
            $this->gallery_path = "./images/temp";
            unlink($this->gallery_path . '/' . $fileName . '');
            unlink($this->gallery_path . '/thumbs/' . $fileName . '');
        } else {

            $this->session->set_flashdata('message', 'News Added');
        }
    }

        function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
                $level = $this->session->userdata('role');

		if($is_logged_in==NULL || $level >> 1)
		{
                    echo $is_logged_in;
                    echo "not logged in";
		redirect('/');
		}
	}
}