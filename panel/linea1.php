<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');
		$this->load->model('Tabla_usuario');
	}

	public function index()	{
		if($this->session->is_logged==TRUE){
			$this->load->view('panel/dashboard');
		//$this->load->view('usuario/login');
	}//end

	public function validar(){
			
			$correo= $this->input->post('email');
			$pass = $this->input->post('password');


			$validacion = $this->Tabla_usuario->validar_usuario($correo, $pass);
			if($validacion == NULL){
				redirect(base_url('index.php/principal'.$this->proy->PAGINA_LOGIN));

			}//end if no valido
			else{
				$this->load->model('Tabla_usuario');
				$usuario = $this->Tabla_usuario->select(array('email_usuario' => $correo));
				$this->session->is_logged = TRUE;
				$this->session->id_usuario = $usuario[0]->id_usuario;
				$this->session->nombre_usuario=  $usuario[0]->nombre_usuario;
				$this->session->nombre_completo= $usuario[0]->nombre_usuario.' '.$usuario[0]->ap_parteno.' '.$usuario[0]->ap_materno;
				$this->session->email_usuario= $usuario[0]->email_usuario;

				redirect(base_url('index.php/principal/'.$this->proy->TAREA_DASHBOARD));

			}
	}//end validar

}//end class Inicio
