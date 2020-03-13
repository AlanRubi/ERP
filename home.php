<?php 
	session_start();
	if(!isset($_SESSION["autenticado"])){
		header("Location: index.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>ERP</title>
 		<link rel="stylesheet" href="css/estilos.css">
		 <script src="js/Chart.min.js"></script>
 	</head>
 	<body>
 		<section>
 			<nav>
 	<h2>WELCOME TO THE JUNGLE: <?php echo $_SESSION["usuario"]; ?></h2>
 				<ul>
 			<a href="?sec=inicio"><li>Inicio</li></a>
 			<a href="?sec=usu"><li>Usuario</li></a>
       <a href="?sec=ven"><li>Venta</li></a>
       <a href="?sec=rem"><li>Reemplazo</li></a>
       <a href="?sec=pr"><li>Proyecto</li></a>
       <a href="?sec=pro"><li>Proveedor</li></a>
       <a href="?sec=prod"><li>Producto</li></a>
       <a href="?sec=pe"><li>Pedido</li></a>
       <a href="?sec=pa"><li>Pago</li></a>
       <a href="?sec=mo"><li>Mobiliario</li></a>
 			<a href="?sec=cerrar"><li>Cerrar Sesión</li></a>
 				</ul>
 			</nav>
 			<article>
 				<?php 
 	if(isset($_GET["sec"])){
 		$sec = $_GET["sec"];
 		switch ($sec) {
 			case 'usu':
 				require_once("php/vistaUsuario.php");
      break;
      case 'ven':
        require_once("php/vistaVenta.php");
        break;   
        case 'rem':
          require_once("php/vistaRemplazo.php");
        break; 
        case 'pr':
            require_once("php/vistaProyecto.php");
        break; 
        case 'pro':
            require_once("php/vistaProveedor.php");
        break; 
        case 'prod':
            require_once("php/vistaProducto.php");
        break; 
        case 'pe':
            require_once("php/vistaPedido.php");
        break; 
        case 'pa':
            require_once("php/vistaPago.php");
        break; 
        case 'mo':
            require_once("php/vistaMobi.php");
        break; 
 			case 'cerrar':
 				session_destroy();
 				header("Location: index.php");
 				break;
 		}
 	}
 				 ?>		
 			</article>
 		</section>
 	</body>
 </html>