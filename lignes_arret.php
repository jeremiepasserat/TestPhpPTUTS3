<?php
require 'conn.php';
$arret = $_POST['arret'];
$mysql_qry = "select NUM AS ligne from LIGNE WHERE ARRET1 LIKE '$arret' OR ARRET2 LIKE '$arret' OR ARRET3 LIKE '$arret' OR ARRET4 LIKE '$arret' OR ARRET5 LIKE '$arret' OR ARRET6 LIKE '$arret'" ;
$result = mysqli_query($conn, $mysql_qry);
if (!$result)
{
    echo 'Impossible de d\'executer la requete', query, ' : ', mysqli_error($conn);
}
else
{
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $row = $row[ligne];
            echo $row, PHP_EOL;
        }
    }
}
?>