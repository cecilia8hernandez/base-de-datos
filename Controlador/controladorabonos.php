<?php

include_once('Modelo/clsAbonos.php');

class controladorabonos
{
	private $vista;
	
	public function AltaAbonos()
	{
		$abono=new clsAbonos();//modelo clsAbono
		if(empty($_POST))
		{
			
			$vista="Vistas/Catalogos/frmAbonos.php";
			include_once("Vistas/frmplantillapublica.php");
		}
		else
		{
			$idCliente=$_POST['txtidCliente'];
			$idPres=$_POST['txtidPrestamo'];
			$Abono=$_POST['txtAbono'];
			$Fecha=$_POST['txtFecha'];
			
			$abono->GuardarAbonos($idCliente,$idPres,$Abono,$Fecha);//llamo a la funcion del modelo clsAbonos
			
			$vista="Vistas/Catalogos/frmAbonos.php";
			include_once("Vistas/frmplantillapublica.php");
		}
	}
	
}
?>