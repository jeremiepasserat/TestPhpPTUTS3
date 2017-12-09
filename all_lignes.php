<?php
require 'conn.php';
$mysql_qry = "select NUM from LIGNE";
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
            #$row = $row[arret];
            echo $row['NUM'], PHP_EOL;
        }
    }
}
?>