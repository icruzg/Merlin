<?php if(!defined('BASEPATH')) exit ('No se puede acceder al escrip directamente');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){

		$this->load->view('home');
	}
}

?>