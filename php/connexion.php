<?php 
$host="localhost";
$user="root";
$mp="";
$database="btp";
$cnx=mysql_connect($host,$user,$mp)or die ("errreur de connection");
mysql_select_db($database,$cnx);
?>