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
       $data['submitted']=$this->session->flashdata('submitted');
       $this->load->view('template/header');
       $this->load->view('template/index');
       $this->load->view('template/footer',$data);        	
	}
    

    
    //to navigate through different pages from home
    function pages($page)
	{
        //$data['products']=$this->reservation_model->get_products();
        $data['submitted']=$this->session->flashdata('submitted');
        $this->load->view('template/header');
        $this->load->view('template/'.$page,$data); 
        $this->load->view('template/footer');
        
	}
    
    // function product_detail($id)
    // {
    //    $p=NULL;
        
    //     $data['ptv']=$this->reservation_model->product_detail($id);
    //     $this->session->set_userdata($data['ptv']);
       
    //     //product to view
    
    //     $this->load->view('template/header');
    //     $this->load->view('template/shop-detail',$data); 
    //     $this->load->view('template/footer');
        
    // }
    
    
    //to get the 'make a reservation' form
    function load_modal()
    {
        return $this->load->view('template/reservation');
    }
    
    //to submit the reservation details
    function submit()
    {
         if(!empty($_POST))
        {
            $data['status']=$this->reservation_model->submit_msg($_POST);
            if($data['status']==TRUE)
            {
                $this->session->set_flashdata('submitted', 'Your message has been sent');    
            }
            else
                $this->session->set_flashdata('submitted', 'Message has not sent, please try again');    
        }
        
     redirect(base_url()."main/pages/contact");
    }

}
?>