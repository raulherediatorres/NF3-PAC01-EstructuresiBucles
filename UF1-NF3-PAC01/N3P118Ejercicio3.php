<?php
// Obtiene el número de mes actual
$mes = date("n");

// Define los meses de verano y invierno
$verano_inicio = 6;  // Junio
$verano_fin = 8;    // Agosto
$invierno_inicio = 12; // Diciembre
$invierno_fin = 2;   // Febrero (el mes de febrero se representa como 2 en PHP)

// Compara el mes actual con los meses de verano e invierno
if ($mes >= $verano_inicio && $mes <= $verano_fin) {
    echo "¡Buen Verano!";
} elseif ($mes >= $invierno_inicio || $mes <= $invierno_fin) {
    echo "¡Buen Invierno!";
} else {
    echo "¡Buen otoño!";
}
?>
