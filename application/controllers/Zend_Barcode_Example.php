<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zend_Barcode_Example extends CI_Controller {

	public function __construct() {
        parent::__construct();
        //load library
		$this->load->library('zend');
		//load in folder Zend
		$this->zend->load('Zend/Barcode');
    }

	public function index()
	{
		$this->load->view('barcode_form');
	}
	
	public function set_barcode()
	{
		//load the form input
		$code = $_POST['code'];
		//generate barcode
		Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
	}
	
}