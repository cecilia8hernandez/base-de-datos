<?php


include_once 'LibreriaFPDF/fpdf.php';

class controladorprincipal
{
	private $vista;

	public function principal()
	{	
		$vista="Vistas/Principal/frmcontenidoprincipal.php";
        include_once("Vistas/frmplantillaprincipal.php");
    }
	
	
	public function publico()
	{	
		$vista="Vistas/Principal/frmcontenidopublico.php";
        include_once("Vistas/frmplantillapublica.php");
    }
    public function privado()
	{	
		$vista="Vistas/Principal/frmcontenidoprivado.php";
        include_once("Vistas/frmplantillaprivada.php");
    }
}
?>