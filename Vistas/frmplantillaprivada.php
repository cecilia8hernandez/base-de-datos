
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<link rel="stylesheet" href="Estilos/completo2.css">
  <link rel="stylesheet" href="Estilos/formularios.css">

</head>
<body>
    
    <header>
    
		<div id="main-menu">
        
			<nav id="menu-area">
                      
				<ul>
                <div class="logo">
                    <img src="img/logo.jpeg" alt="Logo">
                </div>  
					<li><a href="/SistemaClientes/index?clase=controladorprincipal&metodo=privado">Inicio</a></li>
					<li><a href="#">Catalogos</a>
						<ul class="submenu-1">
								<li><a href="/SistemaClientes/index?clase=controladorclientes&metodo=AltaClientes">Registro de Clientes</a></li>
								<li><a href="/SistemaClientes/index?clase=controladorprestamo&metodo=AltaPrestamo">Registro de Prestamos</a></li>
						</ul>
					</li>
                    <li><a href="">Reportes</a>
						<ul class="submenu-1">
							
							<li><a href="/SistemaClientes/index?clase=controladorreportes&metodo=reportePrestamo">Reporte de Prestamos</a></li>
							<li><a href="/SistemaClientes/index?clase=controladorreportes&metodo=reporteAbonos">Reporte de Abono</a></li>
							
						</ul>
					</li>
					<li><a href="/SistemaClientes/index?clase=controladorlogin&metodo=CerrarSesion">Cerrar sesión</a></li>
				</ul>
			</nav>
		</div>
	</header>  

     <!-- Este es el cuerpo -->
     <?php include_once($vista); ?> 


<!-- Este es el pie de la pagina -->
<br></br>


</body>
</html>
