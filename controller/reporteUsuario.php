<?php

require_once __DIR__ . '/../util/ConexionBD.php';
$con = new ConexionBD();
$cn = $con->getConexionDB();

$sql = "SELECT id_usuario,tb_rol.id_rol_usuario,tb_rol.no_rol_usuario,no_login,no_nombre,no_apellido,no_email,tb_a.id_area,tb_a.no_area, tb_c.id_cargo,tb_c.no_cargo, no_piso,id_sede,no_telefono,no_edad,
	no_sexo,foto_perfil	FROM tb_usuario tb_u INNER JOIN tb_area tb_a ON tb_a.id_area=tb_u.id_area
						 INNER JOIN tb_cargo tb_c ON tb_c.id_cargo=tb_u.id_cargo
                         INNER JOIn tb_rol_usuario tb_rol on tb_rol.id_rol_usuario=tb_u.id_rol_usuario";
$resultado = mysql_query($sql, $cn)or die(mysql_error());

header('Access-Control-Allow-Origin: *');
header("Content-type: application/vnd.ms-excel");
header("Content-type: application/x-msexcel");
header("Content-disposition: attachment; filename=reporte-usuario.xls");
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html lang="es"><head><meta charset="UTF-8"></head><body>
<table border="1">';
echo '<thead>'
 . '<tr>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">ITEM</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">NOMBRE</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">APELLIDO</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">USUARIO</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">CORREO</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">TELEFONO</th>'
 . '<th style="text-align: center; background-color: #2a3f54;color: white;font-weight: bold;">ROL</th>'
 . '</tr>'
 . '</thead>';
echo '<tbody>';
$i = 1;
while ($row = mysql_fetch_array($resultado)) {

    echo '<tr>';
    echo '<td>' . $i . '</td>';
    echo '<td>' . $row["no_nombre"] . '</td>';
    echo '<td>' . $row["no_apellido"] . '</td>';
    echo '<td>' . $row["no_login"] . '</td>';
    echo '<td>' . $row["no_email"] . '</td>';
    echo '<td>' . $row["no_telefono"] . '</td>';
    echo '<td>' . $row["no_rol_usuario"] . '</td>';
    echo '</tr>';
    $i++;
}

'</tbody>
</table>
</body></html>';
