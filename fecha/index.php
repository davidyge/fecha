<center>
    <form action="" method="post">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" id="nombre"><br> 
  <button type="submit">Enviar</button>
</form>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    file_put_contents("nombres.txt",$nombre.PHP_EOL, FILE_APPEND);
}

$nombres = file_get_contents("nombres.txt");
$nombres_array = explode(PHP_EOL,$nombres);
echo "<table border='1'>";
echo "<tr> <th>Nombre</th> 
</tr>";
echo "<ul>";
foreach ($nombres_array as $nombre) {
    if (!empty($nombre)) {
        echo "<li>$nombre</li>";
    }
}
echo "</ul>";

echo "</table>";
?>
</center>


