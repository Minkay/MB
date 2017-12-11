<?php

require_once __DIR__ . '/../util/ConexionBD.php';
$con = new ConexionBD();
$cn = $con->getConexionDB();

$sql = "select * from tb_proveedor";
$resultado = mysql_query($sql, $cn)or die(mysql_error());

header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header('Content-Disposition: attachment; filename="REGOBS'.$str. '.xls"'); 
echo '<!DOCTYPE html">
    <html lang="es"><head><meta charset="UTF-8"></head><body>
<table border="1">';
echo '<thead>'
 . '<tr>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">ITEM</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">RUC</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">NOMBRE</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">TELEFONO</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">CELULAR</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">EMAIL</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">DIRECCIÓN</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">DESCRIPCION</th>'
 . '</tr>'
 . '</thead>';
echo '<tbody>';
$i = 1;
while ($row = mysql_fetch_array($resultado)) {

    echo '<tr>';
    echo '<td>' . $i . '</td>';
    echo '<td>' . $row["no_ruc"] . '</td>';
    echo '<td>' . $row["no_proveedor"] . '</td>';
    echo '<td>' . $row["no_telefono"] . '</td>';
    echo '<td>' . $row["no_celular"] . '</td>';
    echo '<td>' . $row["no_email"] . '</td>';
    echo '<td>' . $row["no_direccion"] . '</td>';
    echo '<td>' . $row["no_descripcion"] . '</td>';
    echo '</tr>';
    $i++;
}

'</tbody>
</table>
</body></html>';