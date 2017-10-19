<?Php
class buscador extends CI_model {
    	function __construct()
    {
        parent::__construct();
    }

    function validarUsuario($user,$pass){
    	$query="SELECT id_usuario as usuario, nombre+' '+ap_paterno+' '+ap_materno as nombre, id_perfil as perfil  FROM usuarios WHERE Usuario = '".$user."' AND Password= '".$pass."'";
        $resultado=$this->db->query($query);
        return $resultado->row_array();
    }    

    function clientes($usuario){
        $query="SELECT SGC.id_cliente, SGC.cliente, US.id_usuario 
                    FROM SGI_Clientes as SGC 
                    INNER JOIN sgi_usuario_cliente as SUC ON (SGC.id_cliente = SUC.id_cliente) 
                    INNER JOIN usuarios as US ON (SUC.id_usuario = US.id_usuario)
                    where US.id_usuario = ".$usuario." AND SUC.activo=1 AND SGC.activo=1 AND US.activo=1
                    ORDER BY cliente asc";
        $resultado=$this->db->query($query);
        return $resultado->result_array();
    }

    function buscarclientes($cliente){
        $query="SELECT id_cliente, cliente FROM SGI_Clientes WHERE activo=1  ORDER BY cliente asc";
        $resultado=$this->db->query($query);
        return $resultado->row_array();
    }

}
?>