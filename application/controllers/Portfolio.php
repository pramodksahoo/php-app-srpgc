<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    function __construct() { 
        parent::__construct();
    } 
    public function index()
    {
        $data['seoData']=array(
            'meta_description'  => 'SRP Global Consultants | Portfolio',
            'meta_keyword'      => 'SRP Global Consultants | Portfolio',
            'meta_author'       => 'SRP Global Consultants | Portfolio',
            'title'             => 'SRP Global Consultants | Portfolio' 
        );
        $data['currentUrl']="portfolio";
        $this->load->view('header',$data);
        $this->load->view('portfolio',$data);
        $this->load->view('footer');
    }
}
