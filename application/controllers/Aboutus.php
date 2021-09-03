<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
    function __construct() { 
        parent::__construct();
    } 
    public function index()
    {
        $data['seoData']=array(
            'meta_description'  => 'SRP Global Consultants | About Us',
            'meta_keyword'      => 'SRP Global Consultants | About Us',
            'meta_author'       => 'SRP Global Consultants | About Us',
            'title'             => 'SRP Global Consultants | About Us' 
        );
        $data['currentUrl']="aboutus";
        $this->load->view('header',$data);
        $this->load->view('aboutus',$data);
        $this->load->view('footer');
    }
}
