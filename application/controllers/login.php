<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	
	public function index(){
		session_destroy();
		$this->load->view('contenido');
		$this->load->view('inicio/login');
	}

	function validar(){
		$usuario=$_POST['user'];
		$contra=$_POST['pass'];
		$this->load->model("buscador");
		$persona = $this->buscador->validarUsuario($usuario,$contra);
		if($persona!=null){
			$nombre=$persona['nombre'];
			$perfil=$persona['perfil'];
			$usuario=$persona['usuario'];
			$_SESSION["sesion"]=true;
			$_SESSION["nombre"]=strtoupper($nombre);
			$_SESSION["usuario"]=$usuario;
			$_SESSION["perfil"]=$perfil;
			redirect(site_url("login/menu"));

		}else{

			redirect(site_url("login"));
		}
	}

	function menu(){
		if(isset($_SESSION["sesion"])){
			$data["nombre"]=$_SESSION["nombre"];
			$data["usuario"]=$_SESSION["usuario"];
			$data["perfil"]=$_SESSION["perfil"];
			$this->load->model("buscador");
			$usuario=$_SESSION["usuario"];
			$clientes=$this->buscador->clientes($usuario);	
			$data["cliente"]=$clientes;
			$this->load->view("contenido");
			$this->load->view("layout/layout_horizontal",$data);
			$this->load->view("layout/layout_vertical");
			$this->load->view("vfunciones/menu",$data);
		}else{
			redirect(site_url("login"));
		}
	}

	
	
	
}

?>