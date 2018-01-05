<?php 

class Main extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model("reservation_model");
        $data['products']=$this->reservation_model->get_products();
    }

	function index()
	{
       $data['status']=$this->session->flashdata('status');
       $this->load->view('template/header');
       $this->load->view('template/index');
       $this->load->view('template/footer',$data);        	
	}
    

    
    //to navigate through different pages from home
    function pages($page)
	{
        $data['products']=$this->reservation_model->get_products();
        $this->load->view('template/header');
        $this->load->view('template/'.$page,$data); 
        $this->load->view('template/footer');
        
	}
    
    function product_detail($id)
    {
       $p=NULL;
        
        $data['ptv']=$this->reservation_model->product_detail($id);
        $this->session->set_userdata($data['ptv']);
       
        //product to view
    
        $this->load->view('template/header');
        $this->load->view('template/shop-detail',$data); 
        $this->load->view('template/footer');
        
    }
    
    
    //to get the 'make a reservation' form
    function load_modal()
    {
        return $this->load->view('template/reservation');
    }
    
    //to submit the reservation details
    function submit()
    {
        // var_dump($_POST);
        // exit();
        if(!empty($_POST))
        {
            if(isset($_POST["submit_type"])){
            $this->load->model("reservation_model");
            $data['status']=$this->reservation_model->submit_reservation($_POST);
            if($data['status']==TRUE)
            {
                $this->session->set_flashdata('status', 'inserted');    
            }
            }
            else
            {
                $this->load->model("reservation_model");
                $data['status']=$this->reservation_model->submit_msg($_POST);
                if($data['status']==TRUE)
                {
                    $this->session->set_flashdata('status', 'inserted');    
                }
            }
            redirect(base_url());
        }
    }












    
    //add to cart
    function add2cart($id)
    {
        $data["cart"]=array();
    $p=NULL;
        
      
    }
}
?>