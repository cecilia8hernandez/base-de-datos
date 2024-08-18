<?php
include_once 'Modelo/clsconexion.php';
//Este es el modelo clsClientes para guardar en la tabla tblclientes

class clsClientes extends clsconexion
{
	
	public function GuardarClientes($Nombre,$AP,$AM,$contraseña,$tipousuario)
	{
		$sql = "CALL spInsertarClientes('$Nombre','$AP','$AM','$contraseña','$tipousuario');";
       
		$this->conectar->query($sql);
	}
	
	
	private function LiberarResultados(){
		while ($this->conectar->more_results() && $this->conectar->next_result()) {
			$resultado= $this->conectar->store_result();
			if($resultado){
				$resultado->free();
			}
		}
	}
}

?>