<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
$correo="";	
	

	
$pagina = file_get_contents('http://10.0.0.1:8080/leertxt/correo.txt');
$mamahevo = "SMTP:";
	
$porciones = explode($mamahevo, $pagina);	//echo $porciones[1]	; 
	
foreach ($porciones as &$correo) {
	$primerEspacio = strpos($correo, '.COM', 1);
	$primerEspacio =$primerEspacio +6;
	echo substr($correo, 0, $primerEspacio); 
echo '<br>';
}	
?>
	
</body>
</html>