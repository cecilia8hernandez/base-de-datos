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
					<li><a href="/SistemaClientes/index?clase=controladorprincipal&metodo=principal">Inicio</a></li>	
					<li><a href="/SistemaClientes/index?clase=controladorlogin&metodo=Acceso">Login</a></li>
					
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