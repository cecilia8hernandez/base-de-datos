<?php
include_once 'Modelo/clsconexion.php';
//Este es el modelo cls para guardar en la tabla tblbecas

class clsLogin extends clsconexion
{
	
	public function Acceder($Nombre,$contraseña)
	{
		$sql = "CALL sploginUsuarios('$Nombre','$contraseña');";
		$resultado =$this->conectar->query($sql);	
		return $resultado;  
	}
	
}

?>