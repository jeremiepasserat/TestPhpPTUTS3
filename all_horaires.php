<?php
require 'conn.php';
$mysql_qry = "select HORAIRE_ARR1, HORAIRE_ARR2, HORAIRE_ARR3, HORAIRE_ARR4, HORAIRE_ARR5, HORAIRE_ARR6 from HORAIRE";
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
            #$list = array($row['HORAIRE_ARR1'], $row['HORAIRE_ARR2'], $row['HORAIRE_ARR3'], $row['HORAIRE_ARR4'], $row['HORAIRE_ARR5'], $row['HORAIRE_ARR6']);
            #print_r($list);
            echo $row['HORAIRE_ARR1'], ' ', $row['HORAIRE_ARR2'], ' ',$row['HORAIRE_ARR3'], ' ', $row['HORAIRE_ARR4'], ' ',$row['HORAIRE_ARR5'], ' ',$row['HORAIRE_ARR6'];
            echo '</br>';
        }
    }
}
?>