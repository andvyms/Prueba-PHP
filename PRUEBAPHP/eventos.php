<?php 
include ('conexion.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Registro de Eventos</title>
	<!-- Bootstrap Styles-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
<link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <form role="form" id="register-form" autocomplete="off" action="registrar.php" method="POST">

<div id="wrapper">
    <nav class="navbar-default navbar-side" role="navigation">
    <h1 ><a class="navbar-brand"><img src="images/icon.png" alt="Eventos" style="margin-top: 100; margin-bottom: 100px;"></a></h1>

	<br>
	<br>
	<br>
	<br>
	<br>
<div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li><a  href="eventos.php"><i class="fa fa-home"></i> Inicio</li>
           <li><a  href="lista.php"><i class="fa fa-qrcode"></i>Lista de eventos</a></li>
		</ul>
</div>
    </nav>
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
<div class="col-md-12">

<h1 align="center" class="">¡Bienvenidos a nuestra página oficial!</h1>
<p>Si quieres participar en alguno de nuestros eventos, te invitamos a rellenar toda la información necesaria en el siguiente formulario, pronto se estarán enviando las directrices por correo electrónico para poder asistir al evento y obtener la certificación una vez culminado dicho evento.</p>
 <h3 class="page-header" align="Center">Registro de Eventos</h3>
	
</div>
</div>                      
<div class="row">
<div class="col-md-5 col-sm-5">
<div class="panel panel-primary">
<div class="panel-heading">Datos del Evento</div>

<div class="panel-body">  
<div class="form-group">
    <label for="">Nombre del evento</label><input type="text" class="form-control"name="event" placeholder="" id="event" require="">
</div>

<div class="form-group">
    <label for="">Fecha de inicio del evento</label><input type="date" class="form-control"name="fcin" placeholder="" id="fcin" require="">
</div>

<div class="form-group">
    <label for="">Hora inicio del evento</label><input type="time" class="form-control"name="hini" placeholder="" id="hini" require="">
</div>

<div class="form-group">
    <label for="">Fecha de culminación del evento</label><input type="date" class="form-control"name="ffin" placeholder="" id="ffin" require="">
</div>

<div class="form-group">
    <label for="">Hora fin del evento</label><input type="time" class="form-control"name="hfin" placeholder="" id="hfin" require="">
</div>

</div>
</div>
</div>

<div class="row">
<div class="col-md-6 col-sm-6">
<div class="panel panel-primary">
<div class="panel-heading">Datos del Participante</div>
<div class="panel-body">

<div class="form-group">
    <label for="">Nombre del participante</label><input type="text" class="form-control"name="partic" placeholder="" id="partic" require="">
</div>

<div class="form-group">
    <label for="">Correo electrónico</label><input type="text" class="form-control"name="email" placeholder="" id="email" require="">
</div>

<div class="form-group">
    <label for="">¿Dónde vive?</label><input type="text" class="form-control"name="direccion" placeholder="" id="direccion" require="">
</div>

<div class="form-group">
    <label for="">Número de teléfono</label><input type="text" class="form-control"name="nums" placeholder="" id="nums" require="">
</div>
</div>
</div>        
<input align="center" type="submit" value="Registrar" class="btn btn-primary">
</div>

			
</form>
</div>
</div>
</div>
</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
</form>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0755'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
