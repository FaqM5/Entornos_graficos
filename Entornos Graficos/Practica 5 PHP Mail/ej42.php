<?php
session_start();


if (!isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas'] = 1;
} else {
    $_SESSION['paginas_visitadas']++;
}

echo "Página 2 - Has visitado " . $_SESSION['paginas_visitadas'] . " página(s).";

echo '<a href="ej4.php">Volver a la Página 1</a>';
echo '<a href="ej4C.php">Cerrar Sesión</a>';
?>
