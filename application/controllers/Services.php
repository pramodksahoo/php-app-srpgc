<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    function __construct() { 
        parent::__construct();
    } 
    public function index()
    {
        $data['seoData']=array(
            'meta_description'  => 'SRP Global Consultants | Services',
            'meta_keyword'      => 'SRP Global Consultants | Services',
            'meta_author'       => 'SRP Global Consultants | Services',
            'title'             => 'SRP Global Consultants | Services' 
        );
        $data['currentUrl']="services";
        $this->load->view('header',$data);
        $this->load->view('service',$data);
        $this->load->view('footer');
    }
}
