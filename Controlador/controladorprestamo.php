<?php

include_once('Modelo/clsPrestamos.php');

class controladorprestamo
{
	private $vista;
	 
	public function AltaPrestamo()
	{
		$prestamo=new clsPrestamos();//modelo clsPrestamos
		if(empty($_POST))
		{
			
			$vista="Vistas/Catalogos/frmPrestamos.php";
			include_once("Vistas/frmplantillaprivada.php");
		}
		else
		{
			$Prestamo=$_POST['txtPrestamo'];
			$idclie=$_POST['txtIdCliente'];
			$Fecha=$_POST['txtFecha'];
			

			$prestamo->GuardarPrestamos($Prestamo,$idclie,$Fecha);//llamo a la funcion del modelo clsPrestamos
			
			$vista="Vistas/Catalogos/frmCliente.php";
			include_once("Vistas/frmplantillaprivada.php");
		}
	}

}
?>