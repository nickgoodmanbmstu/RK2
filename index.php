<?php

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        echo '<td>'. $tr*$td .'</td>';
    }
    echo '</tr>';
}

echo '</table>';

?>




