<?php

require_once __DIR__ . '/../util/ConexionBD.php';
$con = new ConexionBD();
$cn = $con->getConexionDB();

$sql = "SELECT * FROM tb_materiales";
$resultado = mysql_query($sql, $cn)or die(mysql_error());

header('Access-Control-Allow-Origin: *');
header("Content-type: application/vnd.ms-excel");
header("Content-type: application/x-msexcel");
header("Content-disposition: attachment; filename=reporte-material.xls");
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html lang="es"><head><meta charset="UTF-8"></head><body>
<table border="1">';
echo '<thead>
<tr>
<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">ITEM</th>
<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">NOMBRE</th>
<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">COSTO</th>
<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">CÓDIGO</th>
<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">DESCRIPCIÓN</th>
</tr>
</thead>';
echo '<tbody>';
$i=1;
while ($row = mysql_fetch_array($resultado)) {

    echo '<tr>';
    echo '<td>' . $i . '</td>';
    echo '<td>' . $row["no_material"] . '</td>';
    echo '<td>' . $row["va_costo"] . '</td>';
    echo '<td>' . $row["co_codigo"] . '</td>';
    echo '<td>' . $row["no_descripcion"] . '</td>';
    echo '</tr>';
    $i++;
}

'</tbody>
</table>
</body></html>';
