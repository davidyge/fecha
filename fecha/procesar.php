
<?php
$datos = [
  'nombre' => $_POST['nombre']
];

date_default_timezone_set('America/Mexico_City');

// Obtener la fecha y hora actual
$fecha_actual = date('Y-m-d');
$hora_actual = date('H:i:s');
?>
<table border="1">
  <tr>
    <th>Nombre</th>
  </tr>

  <?php foreach ($datos as $clave => $valor): ?>
    <tr>
      <td><?= $valor ?><?= $fecha_actual ?><?= $hora_actual ?></td>
    </tr>
    <?php endforeach ?>
</table>

