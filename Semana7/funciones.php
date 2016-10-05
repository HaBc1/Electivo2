<?php
$nombre= $_POST ['txtnombre'];
$horas= $_POST ['txthoras'];
$credito= $_POST ['txtcredito'];

$link = mysql_connect("localhost:8080", "root", "")  or die('No se pudo conectar: ' . mysql_error());
mysql_select_db("semana7");

function listar(){
$query = 'Select * from curso';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n"; 
}



