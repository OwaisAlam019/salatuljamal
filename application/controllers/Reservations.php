<?php 

class Reservations extends CI_Controller
{
	
	function __construct()
	{
         parent::__construct();	

         if(!isset($_SESSION["username"]))
            redirect(base_url()."admin");
          $this->load->model("reservation_model");

	}


	function index()
	{

      $this->load->model("reservation_model");
      $data['reservations']=$this->reservation_model->get_reservations();
      $data['status']=$this->session->flashdata('status');
      $this->load->view('admin/header');
      $this->load->view('admin/aside');
      $this->load->view('admin/reservations',$data);
      $this->load->view('admin/footer');
	}

     //to get details of a reservation when clicked by admin
    function details($id)
    {   
         if(!isset($_SESSION["username"]))
            redirect(base_url()."admin");

        $data['row_id']=$id;
        $this->load->model("reservation_model");
        $data['details']=$this->reservation_model->get_details($id);
        $details=$data['details'];
        // echo "<pre>";
        // var_dump($details);
        // echo "</pre>";
        // exit();
        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('admin/details',$data);
        $this->load->view('admin/footer');   
    }

	 //to mark a reservation as completed by admin
    function completed($id)
    {
      $status = $this->reservation_model->completed($id);
      if($status)
           $this->session->set_flashdata("status","Reservation marked as completed");
      
      redirect(base_url()."reservations");
    }

    function update($id){

      if(isset($_POST))
      {

        $update_status["status"]=$this->reservation_model->update($id,$_POST);
        if($update_status["status"])
           $this->session->set_flashdata("status","Reservation updated successfully..!!");

      }
      redirect(base_url().'reservations');
     
    }

    function submit ()
    {
    	if(isset($_POST)){
            $this->load->model("reservation_model");
            $data['status']=$this->reservation_model->submit_reservation($_POST);
            if($data['status']==TRUE)
            {
                $this->session->set_flashdata('submitted', 'Your reservation completed, we will contact you soon');    
            }
        }

            redirect(base_url());
    }

	function add()
	{

	}

}