<?php 
class my404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
		$this->load->helper("url");
    } 

    public function index() 
    { 
        redirect('users/index');
    } 
    } 
    ?>