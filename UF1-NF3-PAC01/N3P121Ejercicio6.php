<?php
// Inicia la sesión
session_start();

// Verifica si la variable de sesión 'page_views' existe
if (isset($_SESSION['page_views'])) {
    // Si existe, incrementa el contador
    $_SESSION['page_views']++;
} else {
    // Si no existe, inicializa el contador a 1
    $_SESSION['page_views'] = 1;
}

// Muestra el número de veces que se ha cargado la página
echo "Esta página ha sido cargada {$_SESSION['page_views']} veces.";
?>
