<?php

include_once 'Modelo/clsReportes.php';
include_once 'LibreriaFPDF/fpdf.php';

class controladorreportes
{
	private $vista;
	
	public function reportePrestamo()
	{	
	
		$presta=new clsReportes();//clase que esta en el modelo
        if(!empty($_POST))
		{
            //recibo la caja de texto del formulario html
            $id=$_POST['txtid'];
           
            // Crear el objeto FPDF
		    $pdf = new FPDF();
		
		    // Agregar una página
		    $pdf->AddPage();
		    $pdf->Cell(190,30,$pdf->Image('./img/prestamo.jpeg',130,12,60,30),0,1,'R');
		
		    // Establecer la fuente y el tamaño del título
		    $pdf->SetFont('Arial', 'B', 20);
            
		    $pdf->Cell(0, 20,utf8_decode('Reporte por ID'), 0, 1, 'C');

		    // Consulta a la base de datos
            
            $Consulta=$presta->ConsultaXprestamo($id);	 
               
		    //Centrar la tabla
            $pdf->SetLeftMargin(10);
            if ($Consulta->num_rows > 0) {
        
                // Establecer la fuente y el tamaño del encabezado de la tabla
                $pdf->SetFont('Arial', 'B', 10);

                // Imprimir los encabezados de la tabla
                $pdf->Cell(20, 10, 'id', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Nombre', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Apellido Paterno', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Apellido Materno', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Prestamo', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Fecha', 1, 1, 'C');
            
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 10);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) 
                {
                    $pdf->Cell(20, 10, $row["idprestamo"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["vchNombre"], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row["vchAP"], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row["vchAM"], 1, 0, 'C');
                    $pdf->Cell(20, 10, $row["vchprestamo"], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row["vchfecha"], 1, 1, 'C');
                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $presta->conectar->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {
                echo "No se encontraron registros.";
            }

           
            //******************	
            
           
        }else
        {
            $vista="Vistas/Reportes/frmReporteprestamo.php";
			include_once("Vistas/frmplantillaprivada.php");
        }

    }
    
    public function reporteAbonos()
    {
        $abono=new clsReportes();//clase que esta en el modelo
        if(!empty($_POST))
        {
            //recibo la caja de texto del formulario html
            $Nombre=$_POST['txtnombre'];
           
            // Crear el objeto FPDF
            $pdf = new FPDF();
        
            // Agregar una página
            $pdf->AddPage();
            $pdf->Cell(190,30,$pdf->Image('./img/prestamo.jpeg',130,12,60,30),0,1,'R');
        
            // Establecer la fuente y el tamaño del título
            $pdf->SetFont('Arial', 'B', 20);
            
            $pdf->Cell(0, 20,utf8_decode('Reporte por nombre del cliente'), 0, 1, 'C');

            // Consulta a la base de datos
            
            $Consulta=$abono->ConsultaXnombre($Nombre);  
            
            
            //Centrar la tabla
            $pdf->SetLeftMargin(20);
            if ($Consulta->num_rows > 0) {
        
                // Establecer la fuente y el tamaño del encabezado de la tabla
                $pdf->SetFont('Arial', 'B', 10);

                // Imprimir los encabezados de la tabla
                $pdf->Cell(30, 10, 'Nombre', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Apellido Paterno', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Apellido Materno', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Abono', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Fecha', 1, 1, 'C');
            
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 10);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) {
                    $pdf->Cell(30, 10, $row["vchNombre"], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row["vchAP"], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row["vchAM"], 1, 0, 'C');
                    $pdf->Cell(20, 10, $row["vchabono"], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row["vchfecha"], 1, 1, 'C');
                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $abono->conectar->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {
                echo "No se encontraron registros.";
            }

           
            //******************    
            
           
        }else
        {
            $vista="Vistas/Reportes/frmReportes.php";
            include_once("Vistas/frmplantillaprivada.php");
        }

    }
}
?>