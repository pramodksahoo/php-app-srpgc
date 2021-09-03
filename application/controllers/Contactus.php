<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contactus extends CI_Controller {
    function __construct() { 
        parent::__construct();
        $this->load->library('form_validation');
    } 
    public function index()
    {
        $data['seoData']=array(
                'meta_description'  => 'SRP Global Consultants | Contact Us',
                'meta_keyword'      => 'SRP Global Consultants | Contact Us',
                'meta_author'       => 'SRP Global Consultants | Contact Us',
                'title'             => 'SRP Global Consultants | Contact Us' 
        );
        $data['currentUrl']="contactus";
        $this->load->view('header',$data);
        $this->load->view('contactus');
        $this->load->view('footer');
    }
    public function hjsca(){   
       if($this->input->post('g-recaptcha-response')!=''){
            $this->form_validation->set_rules('name', 'Username', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
            $this->form_validation->set_rules('mobileno', 'Contact No', 'trim|required');
            $this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[10]');
            if ($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            } else{
                $quickdemoarray=array(
                    'name'          => strip_tags($this->input->post('name')),
                    'emailid'       => strip_tags($this->input->post('email')),
                    'subject'       => strip_tags($this->input->post('subject')),
                    'message'       => strip_tags($this->input->post('message')),
                    'contactno'     => strip_tags($this->input->post('mobileno'))
                );
                $email_setting  = array('mailtype'=>'html');
                $this->email->initialize($email_setting);
                $this->email->from(get_instance()->config->item('noreplay_mail'), 'SRPGC');
                $this->email->to('enquiry@srpgc.com');
                $this->email->subject('Quick Demo');
                $body = $this->load->view('template/contactus',$quickdemoarray,TRUE);
                $this->email->message($body);
                if($this->email->send()){  
                    echo 'Email sent';
                } else{
                    echo 'Something went wrong, please try after some time.';
                }
            }
        } else {
            echo 'recaptchablank';
        }   
    }
}
