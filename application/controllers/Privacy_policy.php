<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller {
    function __construct() { 
        parent::__construct();
    } 
    public function index()
    {
        $data['seoData']=array(
            'meta_description'  => 'SRP Global Consultants | Privacy Policy',
            'meta_keyword'      => 'SRP Global Consultants | Privacy Policy',
            'meta_author'       => 'SRP Global Consultants | Privacy Policy',
            'title'             => 'SRP Global Consultants | Privacy Policy' 
        );
        $data['currentUrl']="privacypolicy";
        $this->load->view('header',$data);
        $this->load->view('privacy_policy');
        $this->load->view('footer');
    }
}
