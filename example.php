<!DOCTYPE html>
<html>
<head>
	<title>Trabalhando com Datas</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Trabalhando com Datas</h1>
<?php
	//data desejada no formato brasileiro
	$data = "25/02/2017";

	//o d/m/Y indica o formato da data que estamos fornecendo a classe, para que a data seja entendida e possa ser manipulada
	$data = DateTime::createFromFormat( "d/m/Y", $data );

	//$novadata recebe o formato desejado
	$novadata = $data->format( "Y-m-d" );

	//irá mostrar 2017-02-25
	echo $novadata;

	$dia = $data->format( "d" );
	$mes = $data->format( "m" );
	$ano = $data->format( "Y" );

	if ( checkdate( $mes, $dia, $ano ) ) echo "<p>Data Válida!</p>";
	else echo "<p>Data Inválida</p>";

?>
</body>
</html>