<?php
session_start();


if (!isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas'] = 1;
} else {
    $_SESSION['paginas_visitadas']++;
}

echo "Página 1 - Has visitado " . $_SESSION['paginas_visitadas'] . " página(s).";
?>

<a href="ej42.php">Ir a la Página 2</a>
