<?
$host		="localhost";
$user		="asmecon_system";
$password	="4g7wx0lwzn";
$database	="asmecon_system";
$id			=mysql_connect($host,$user, $password);

mysql_query("SET CHARACTER SET utf8 ");
mysql_select_db($database, $id);

?>