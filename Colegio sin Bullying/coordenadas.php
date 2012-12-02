 <?php  
 
 

if(!($conexion = mysql_connect("localhost","root"))){
	exit();
	}
else{
	
	mysql_select_db("colegio_db",$conexion);
	$query ="select coordenadaX from mapa where id=3";
	$queryY ="select coordenadaY from mapa where id=3";
	
	
	$q= mysql_query($query,$conexion);	
	$qY= mysql_query($queryY,$conexion);	
	
	
	$result = mysql_result($q,0);
	$resultY = mysql_result($qY,0);
	
	
	print '{ "coorX" : '.$resultY.', "coorY" : '.$result.' }'; 
	
	
	
	
	mysql_close($conexion);
	}
	
	?>