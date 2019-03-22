<?php
include ("conexion.php");
$event=$_POST['event'];
$fcin= $_POST['fcin'];
$hini= $_POST['hini'];
$ffin=$_POST['ffin'];
$hfin=$_POST['hfin'];
$partic=$_POST['partic'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$nums=$_POST['nums'];


$query="INSERT INTO registro ()
		 			VALUES('$event','$fcin','$hini','$ffin','$hfin','$partic','$email','$direccion' ,'$nums')";
$resultado= $mysqli->query ($query);
if ($resultado) {

echo "<script>alert('Se ha registrado correctamente')</script>";

}

else{
	

	echo "<script>alert('No se registró. Por favor verifique e intente de nuevo.')</script>";
	

}

?>