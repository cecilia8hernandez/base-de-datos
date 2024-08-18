<?php
include_once 'Modelo/clsconexion.php';

class clsReportes extends clsconexion{

	
	public function ConsultaXprestamo($id)
	{
		$sql = "CALL spConsultaPorPrestamo('$id');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado; 
	}

	public function ConsultaXnombre($nombre)
	{
		$sql = "CALL spConsultaPorNombre('$nombre');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
}


?>