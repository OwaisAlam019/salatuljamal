<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
         parent::__construct();	 


			
	}

	function index()
	{
        $data['login']=$this->session->flashdata('loginflag');
        $this->load->view('login/login',$data);
    }
    
     //authentication
    function login()
    {
        if($this->input->post()!==NULL)
        {
            $this->load->model("reservation_model");
            $data['login']=$this->reservation_model->login($this->input->post());
            
            if($data['login']==true)
            {
                $this->session->set_userdata('username', $this->input->post('username'));
                $this->session->set_userdata('password', $this->input->post('password'));
                $this->session->set_flashdata('loginflag', 'true');
                $data['reservations']=$this->reservation_model->get_reservations();
                $this->load->view('admin/header');
                $this->load->view('admin/reservations',$data);
                $this->load->view('admin/footer',$data);
            }
            else
            {
                $this->session->set_flashdata('loginflag', 'false');
                redirect(base_url().'admin');
            }
        }
    }
    
    //to get list of reservations and display on admin panel
    function reservations()
	{
      $this->load->model("reservation_model");
      $data['reservations']=$this->reservation_model->get_reservations();
      $this->load->view('admin/header');
      $this->load->view('admin/reservations',$data);
      $this->load->view('admin/footer');        	
	}
    
    //to get details of a reservation when clicked by admin
    function details($id)
    {   
        $data['row_id']=$id;
        $this->load->model("reservation_model");
        $data['details']=$this->reservation_model->get_details($id);
        $details=$data['details'];
        echo "<pre>";
        var_dump($details);
        echo "</pre>";
        exit();
        $this->load->view('admin/header');
        $this->load->view('admin/details',$data);
        $this->load->view('admin/footer');   
    }

     function msg_details($id)
    {   
        $data['row_id']=$id;
        $this->load->model("reservation_model");
        $data['msg_details']=$this->reservation_model->msg_details($id);
        // echo "<pre>";
        // var_dump($details);
        // echo "</pre>";
        // exit();
        $this->load->view('admin/header');
        $this->load->view('admin/msg_details',$data);
        $this->load->view('admin/footer');   
    }
        function msg_delete($id)
    {   
        $data['row_id']=$id;
        $this->load->model("reservation_model");
        $data['msg_details']=$this->reservation_model->msg_delete($id);
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // exit();
        redirect(base_url().'admin');

        $this->load->view('admin/header');
        $this->load->view('admin/clientmessage',$data);
        $this->load->view('admin/footer');   
    }
    

    

 // to get list of client messages and display on admin panel
    function client_message()
    {
       // echo "string";
      $this->load->model("reservation_model");
      $data['clientmessage']=$this->reservation_model->get_client_message();
      // echo "<pre>";
      // var_dump($data);
      // echo "</pre>";
      // exit();
      $this->load->view('admin/header');
      $this->load->view('admin/clientmessage',$data);
      $this->load->view('admin/footer');            
    }
    








    //to mark a reservation as completed by admin
    function res_complete($id){
      $this->load->model("reservation_model");
      $this->reservation_model->res_complete($id);
      $this->get_reservations(); 
    }
    
    
    function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        $this->session->flashdata('loginflag','false');
        $this->admin();
    }
    
    function product()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add_product');
        $this->load->view('admin/footer');
    }
    
    function add_product()
    {
        
        if(!empty($_POST))
        {
            $this->load->model("reservation_model");
            $data['status']=$this->reservation_model->add_product($_POST);
            if($data['status']==TRUE)
            {
                $this->session->set_flashdata('status', 'inserted');    
            }
            redirect(base_url()."admin/product");
        }
    }
   
}
    
 ?>