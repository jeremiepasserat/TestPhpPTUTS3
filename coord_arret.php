<?php
require 'conn.php';
$mysql_qry = "select LATITUDE, LONGITUDE FROM ARRET" ;
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
            echo $row['LATITUDE'], ' ' , $row['LONGITUDE'] , PHP_EOL;
        }
    }
}
?>