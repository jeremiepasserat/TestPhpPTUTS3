<?php
$db_name = 'ptutequipe2g1_bd';
$mysql_username = '148356';
$mysql_password = 'oui';
$server_name = 'mysql-ptutequipe2g1.alwaysdata.net';
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn)
{
}
else{echo 'Erreur de connexion à notre base de données';}
?>