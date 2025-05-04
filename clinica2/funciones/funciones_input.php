<?php

function test_input($data) {
    $data = trim($data);// Saca espacios en blanco al principio y al final.
    $data = stripslashes($data);// Saca barras invertidas (\).
    $data = htmlspecialchars($data);// Convierte caracteres especiales en texto seguro (ej: < > " ').
    return $data;
  }

?>

