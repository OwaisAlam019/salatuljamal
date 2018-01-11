<?php 

class Messages extends CI_controller
{

	function __construct()
	{
         parent::__construct();	 

        if(!isset($_SESSION["username"]))
    	    redirect(base_url()."admin");

         $this->load->model("messages_model");
	}

	function index()
    {
     
      $data['clientmessage']=$this->messages_model->get_client_message();
      $data['status']=$this->session->flashdata('status');
      $this->load->view('admin/header');
      $this->load->view('admin/aside');
      $this->load->view('admin/clientmessage',$data);
      $this->load->view('admin/footer');            
    }

	 function details($id)
    {   
        $data['row_id']=$id;
        $data['msg_details']=$this->messages_model->msg_details($id);
        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('admin/msg_details',$data);
        $this->load->view('admin/footer');   
    }


    function delete($id)
    {   
        $data['row_id']=$id;
        $data['msg_details']=$this->messages_model->msg_delete($id);
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // exit();
        $this->session->set_flashdata("status","Message has been deleted");
        redirect(base_url().'/messages');
    }
    

}