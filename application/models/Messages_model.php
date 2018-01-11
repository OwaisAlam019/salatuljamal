<?php 
/**
* 
*/
class Messages_model extends CI_model
{
	
	function __construct()
	{
		
	}

    function count()
    {
        return $this->db->count_all("client_message");
    }

	 function submit_msg($data){

		$status = $this->db->insert('client_message',
                array( 'name'      => $data['contact-name'],
				       'email'     => $data['contact-email'],
					   'phone'     => $data['contact-phone'],
                       'subject'   => $data['contact-subject'],
					   'msg'       => $data['contact-message'],         
                                            ));
        return $status;
    }


    function msg_delete($id) {

    $this->db->where( 'msg_id',$id);
    $this->db->delete('client_message');
    
    }



  public function get_client_message()
    {
        // $this->db->select('msg_id,name,email,phone,subject,msg');
        // $this->db->from('client_message');
        // $this->db->join('customer', 'customer.id = reservations.customer_id');
        $query=$this->db->get("client_message");
        return $query->result_array();

    }

     public function msg_details($id)
    {
        // $this->db->select('msg_id,name,email,phone,subject,msg');
        // $this->db->from('client_message');
        // $this->db->join('customer', 'customer.id = reservations.customer_id');
        $this->db->where('msg_id',$id);
        $query=$this->db->get("client_message");
        return $query->row();

    }

}