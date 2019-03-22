<?php 
require('conexion.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Lista de eventos</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<link href="assets/css/custom-styles.css" rel="stylesheet" />
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
        <li><a  href="eventos.php"><i class="fa fa-home"></i> Inicio</a></li>
           <li><a  href="lista.php"><i class="fa fa-qrcode"></i>Lista de eventos</a></li>
		</ul>
</div>
    </nav>
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
<div class="col-md-12">

<h1 align="center" class="">Lista de eventos</h1>
	<p align="center">Regístrate en cualquiera de nuestros eventos que se te mostrarán en el siguiente listado.</p>
	
</div>
</div> 
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="col-md-12 col-sm-12">
<div class="panel panel-primary">
<div class="panel-heading">ventos disponibles</div>
<div class="panel-body">
<div class="table-responsive">
                    <table id="example" class="table">
                    <thead class="table-responsive">
                    <tr>
                            <th>#</th>
                            <th>Evento</th>
                            <th>Sesión</th>
                            <th>Participantes</th>
                            <th>Fecha</th>
                            <th>Fecha culminado</th>
                            <th>Disponibilidad</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-responsive">
                    <tr>
                                    <td>2</td>
                                    <td>Prog. HTML</td>
                                    <td>2</td>
                                    <td>25</td>
                                    <td>25-06-2019</td>
                                    <td>28-06-2019</td>
                        
                                    <td><img src="images/002-exito.png" style="margin:20px;"   /></td>
                                    <td><a class="btn btn-primary" href="detalle.php">Detalles</a>
                                        <a class="btn btn-danger" href="eventos.php">Registrar</a></td>
                                </tr>
                                <tr class="">
                                    <td>3</td>
                                    <td>PHP y AJAX</td>
                                    <td>10</td>
                                    <td>35</td>
                                    <td >18-07-2019</td>
                                    <td>28-07-2019</td>

                                    <td><img src="images/002-exito.png" style="margin:20px;"/></td>
                                    <td><a class="btn btn-primary" href="detalle.php">Detalles</a>
                                    <a class="btn btn-danger" href="eventos.php">Registrar</a></td>
                                </tr>
 
                </tbody>
                </table>
            
                            
</div>
</div>
</div>
</div>           
</div>
</div>

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

