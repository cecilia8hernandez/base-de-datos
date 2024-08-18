<?php
include_once 'Modelo/clsconexion.php';
//Este es el modelo clsClientes para guardar en la tabla tblclientes

class clsPrestamos extends clsconexion
{
	
	public function GuardarPrestamos($Prestamo,$idclie,$Fecha)
	{
		$sql = "CALL spInsertarPrestamos('$Prestamo','$idclie','$Fecha');";
       
		$this->conectar->query($sql);
	}
	
}

?>