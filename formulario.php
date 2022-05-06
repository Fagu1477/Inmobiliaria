<?php

include('db.php');


$tituloP = $_POST['tituloP'];
$precioP = $_POST['precioP'];
$telP = $_POST['telP'];
$descripcionP = $_POST['descripcionP'];
$direP = $_POST['direP'];
$dire2P = $_POST['dire2P'];
$ciudadP = $_POST['ciudadP'];
$postalP = $_POST['postalP'];
$deparP = $_POST['deparP'];
$tipoP = $_POST['tipoP'];


$query= "INSERT INTO publicar(tituloP, precioP, telP, descripcionP, direP, dire2P, ciudadP, postalP, deparP, tipoP) VALUES ('$tituloP', '$precioP', '$telP', '$descripcionP', '$direP', '$dire2P', '$ciudadP', '$postalP', '$deparP', '$tipoP')";
$resultado= mysqli_query($conn, $query);


header("Location: publicaciones.php")


?>

















