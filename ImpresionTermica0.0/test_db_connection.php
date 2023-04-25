<?php
require_once('config.php');

// Hacer una consulta a la base de datos
$query = "SELECT * FROM patient_meta";
$result = mysqli_query($conn, $query);

// Mostrar los resultados
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['meta_value'] . ' - ' . $row['date_create'] . '<br>';
  }
} else {
  echo "Error al ejecutar la consulta: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
