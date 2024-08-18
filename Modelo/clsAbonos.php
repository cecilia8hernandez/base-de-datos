<?php
include_once 'Modelo/clsconexion.php';
//Este es el modelo clsBecas para guardar en la tabla tblbecas

class clsAbonos extends clsconexion
{
	
	public function GuardarAbonos($idCliente,$idPres,$Abono,$Fecha)
	{
		$sql = "CALL spInsertarAbono('$idCliente','$idPres','$Abono','$Fecha');";
       
		$this->conectar->query($sql);
	}
	
}

?>