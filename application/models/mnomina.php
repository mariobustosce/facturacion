<?Php
class mnomina extends CI_model {
    	function __construct()
    {
        parent::__construct();
    }


    function totalesnomina(){
    	$query="SELECT cli.Cliente as nombrecliente ,n.EstadoNomina, n.FechaRegistro,n.idUserRn, us.Nombre,us.Ap_Paterno, us.Usuario,
                count(n.EstadoNomina) as ncontratos, 
                 sum(SueldoBase) as SueldoBase,
                 sum(SueldoBaseProp) as SueldoBasePropocional,
                 sum(TotalImponible) as TotalesImponibles,
                 sum(TotalHaber) as TotalHaberes,
                 sum(SueldoLiquido) as TotalesSueldoLiquido,
                 sum(CostoFinalCliente) as TotalCostoFinalCliente ,
                 sum(TotalCostoPersonal) as TotalCostoPersonal
                  FROM Nominas as n
                  left join SGI_Clientes as cli on(cli.ID_Cliente = n.idUserRn)
          left join Usuarios as us on(us.ID_Usuario = n.idUserRn)
                  group by cli.Cliente, n.EstadoNomina,  n.FechaRegistro, n.idUserRn, us.Nombre,us.Ap_Paterno, us.Usuario";
        $resultado=$this->db->query($query);
        return $resultado->result_array();
    }    

    function nominaingresada(){
      $query="SELECT ID_Nomina, CodNomina, FechaRegistro, EstadoNomina, Nombres, ApellidoP, ApellidoM, Rut, Supervisor, Cliente, Cadena, Local, Ciudad, Region, CargoTrabajador, Jornada, FormaPago, Banco, NCuentaB, CO, TipoContrato, FechaInicio, FechaTermina, DiasTrabajados, SueldoBase, SueldoBaseProp, Gratificacion, BonoCualitativo, BonoCuantitavo, Cumplimiento, Bonos, N_HorasExtras, ValorHorasExtras, Aguinaldo, TotalImponible, Colacion, Movilizacion, MovilizacionVariable, Viatico, TotalHaber, DescuentoPrevicional, SueldoLiquido, SIS, Mutual, SeguroCesantia, ProvisionVacaciones, ProvisionFiniquito, Banefe, TotalCostoPersonal, ComisionAgencia, CostoFinalCliente, Observacion, LlegadaFulltime, LlegadaPartime, LlegadaSupervisor, DocCelular, DocTablet, DocNotebook, DocCredencial, DocUniforme, DocEPP, DocClub360, DocCloud, DocIntranet, DocApenet FROM Nominas";
      $consulta = $this->db->query($query);
        $resultado = $consulta -> result_array();
        return $resultado;
    }


    

    function TotalCostoFinalClienteEstado($idcliente){
        $query="SELECT cli.Cliente,sum(n.CostoFinalCliente) as TotalCostoFinalCliente 
  FROM [RRHH_Chile].[dbo].[Nominas] as n
  left join [dbo].[Clientes] as cli on(cli.ID_Cliente = n.Cliente)
  group by cli.Cliente".$idcliente;
        $resultado=$this->db->query($query);
        return $resultado->row_array();
    }

    function Clientes(){
        $query="SELECT TOP 1000 [ID_Cliente]
      ,[Cliente] ,[Activo] ,[Es_Grupo] ,[CC] ,[Interno]
  FROM [RRHH_Chile].[dbo].[Clientes]";
        $resultado=$this->db->query($query);
        return $resultado->row_array();
    }

}