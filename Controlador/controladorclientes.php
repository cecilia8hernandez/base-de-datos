<?php

include_once('Modelo/clsClientes.php');

class controladorclientes
{
	private $vista;
	
	public function AltaClientes()
	{
		$Cliente=new clsClientes();//modelo clsClientes
		if(empty($_POST))
		{
			$vista="Vistas/Catalogos/frmCliente.php";
			include_once("Vistas/frmplantillaprivada.php");
		}
		else
		{  
			$Nombre=$_POST['txtNombre'];
			$AP=$_POST['txtAP'];
			$AM=$_POST['txtAM'];
			$contraseña=$_POST['txtcontraseña'];
			$tipousuario=$_POST['txtTipo'];
		
		$Cliente->GuardarClientes($Nombre,$AP,$AM,$contraseña,$tipousuario);//llamo a la funcion del modelo clsClientes
			
			$vista="Vistas/Catalogos/frmCliente.php";
			include_once("Vistas/frmplantillaprivada.php");
		}
	}
	
}
?>