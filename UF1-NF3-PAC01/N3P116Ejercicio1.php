<?php
// Obtener la fecha actual
$currentDate = new DateTime();

// Calcular la fecha de hace dos días
$twoDaysAgo = clone $currentDate;
$twoDaysAgo->modify('-2 days');

// Calcular la fecha del próximo mes
$nextMonth = clone $currentDate;
$nextMonth->modify('+1 month');

// Calcular el número de días restantes en el próximo mes
$daysLeftInNextMonth = (int) $nextMonth->format('t') - (int) $currentDate->format('j');

// Calcular el número de meses restantes en el año actual
$monthsLeftInCurrentYear = 12 - (int) $currentDate->format('n');

// Llenar las líneas con la información calculada
echo "Two days ago it was " . $twoDaysAgo->format('Y-m-d') . ".\n";
echo "The next month is " . $nextMonth->format('F') . ".\n";
echo "There are " . $daysLeftInNextMonth . " days left in next month.\n";
echo "There are " . $monthsLeftInCurrentYear . " months left in the current year.\n";
?>
