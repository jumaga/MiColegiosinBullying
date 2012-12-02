<?php

$recibir = $_POST["comentario"];

$conexion = mysql_connect("localhost","root");

		mysql_select_db("colegio_db",$conexion);

		$sql="INSERT INTO comentario(comentario) VALUES('".$recibir."')";

		mysql_query($sql);



?>