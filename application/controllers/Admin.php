<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
         parent::__construct();	 
         $this->load->model("reservation_model");
          $this->load->model("messages_model");

	}


    function index()
    {  
    
    $data["reservations"]=$this->reservation_model->count();
    $data["messages"]=$this->messages_model->count();
    if(isset($_SESSION['username']))
        {
            
             $this->load->view('admin/header');
             $this->load->view('admin/aside');
             $this->load->view('admin/dashboard',$data);
             $this->load->view('admin/footer');
         }
       else if(!empty($_POST))
        {
            if ($_POST["username"]=='admin' && $_POST['password']=='admin') {
                $_SESSION['username']=$_POST["username"];
                $_SESSION['password']=$_POST["password"];
                
                $this->load->view('admin/header');
                $this->load->view('admin/aside');
                $this->load->view('admin/dashboard',$data);
                $this->load->view('admin/footer');    
                }
                else
                    redirect(base_url().'/admin');
        }
        else
            $this->load->view('login/login');
                    
    }
    function logout()
    {
        session_destroy();
        redirect(base_url().'admin');
        
    }

    
    

 // to get list of client messages and display on admin panel
    
    
    
    
    function product()
    {
         if(!isset($_SESSION["username"]))
            redirect(base_url()."admin");

        $this->load->view('admin/header');
        $this->load->view('admin/aside');
        $this->load->view('admin/add_product');
        $this->load->view('admin/footer');
    }
    
    function add_product()
    {
         if(!isset($_SESSION["username"]))
            redirect(base_url()."admin");
        
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