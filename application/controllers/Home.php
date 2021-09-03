<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() { 
        parent::__construct();
    } 
    public function index()
    {
        $data['seoData']=array(
            'meta_description'=> 'SRP Global Consultants',
            'meta_keyword'=> 'SRP Global Consultants',
            'meta_author'=> 'SRP Global Consultants',
            'title'=> 'SRP Global Consultants | Accounting, Auditing, Taxation & Company Law Consultancy Firm' 
        );
        $data['currentUrl']="home";
        $this->load->view('header',$data);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }
}
