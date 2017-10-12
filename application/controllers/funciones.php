<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class funciones extends CI_Controller {
	public function index(){		
	}

	function buscarClientes(){
		if(isset($_SESSION["sesion"])){
			if(isset($_POST['cliente'])){
				$data["nombre"]=$_SESSION["nombre"];
				$data["usuario"]=$_SESSION["usuario"];
				$data["perfil"]=$_SESSION["perfil"];
				$this->load->model("buscador");
				$clientes=$this->buscador->clientes();
				$cli=$_POST['cliente'];
				$cuenta=$this->buscador->buscarclientes($cli);		
				$data["cliente"]=$clientes;
				$data["cuenta"]=$cuenta;
				$this->load->view("contenido");
				$this->load->view("layout/layout_horizontal",$data);
				$this->load->view("layout/layout_vertical");
				$this->load->view("vfunciones/factura_cliente",$data);
			}else{
				redirect(site_url("login/menu"));
			}			
		}else{
			redirect(site_url("login"));
		}
	}
	
	function cgastos(){
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
			$this->load->view("vfunciones/gastos",$data);
		}else{
			redirect(site_url("login"));
		}
	}
	function cremuneraciones(){
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
			$this->load->view("vfunciones/remuneraciones",$data);
		}else{
			redirect(site_url("login"));
		}
	}
	function cnomina(){
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
			$this->load->view("vfunciones/nomina",$data);
		}else{
			redirect(site_url("login"));
		}
	}
	function csistemas(){
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
			$this->load->view("vfunciones/sistemas",$data);
		}else{
			redirect(site_url("login"));
		}
	}
	function ctelefonia(){
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
			$this->load->view("vfunciones/telefonia",$data);
		}else{
			redirect(site_url("login"));
		}
	}
	function cbodega(){
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
			$this->load->view("vfunciones/bodega",$data);
		}else{
			redirect(site_url("login"));
		}
	}

	function cchileexpress(){
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
			$this->load->view("vfunciones/chileexpress",$data);
		}else{
			redirect(site_url("login"));
		}
	}

	function creliquidaciones(){
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
			$this->load->view("vfunciones/reliquidaciones",$data);
		}else{
			redirect(site_url("login"));
		}
	}
	function cproyectos(){
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
			$this->load->view("vfunciones/proyectos",$data);
		}else{
			redirect(site_url("login"));
		}
	}

}

?>