<?php
include_once('Modelo/clsLogin.php');

class controladorlogin
{
	private $vista;
	
	public function Acceso()
	{
		$login=new clsLogin();
		if(empty($_POST))
		{
			
			$vista="Vistas/Acceso/frmLogin.php";
			include_once("Vistas/frmplantillaprincipal.php");

		}
		else
		{
			$nombre=$_POST['txtNombre'];
			$contraseña=$_POST['txtcontraseña'];
			$datos=$login->Acceder($nombre,$contraseña);
			if($datos->num_rows > 0)
			{
				$vista="Vistas/Principal/frmcontenidoprivado.php";
			    include_once("Vistas/frmplantillaprivada.php");
			}
			else
			{
				$vista="Vistas/Principal/frmcontenidopublico.php";
			    include_once("Vistas/frmplantillapublica.php");
			}

					
		}

	}
	public function CerrarSesion()
	{
		//aqui se elimina la sesion
		$vista="Vistas/Principal/frmcontenidopublico.php";
	    include_once("Vistas/frmplantillaprincipal.php");
	}
	
}
?>