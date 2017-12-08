<?php
require 'conn.php';
$mysql_qry = "select NUM AS ligne from LIGNE";
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