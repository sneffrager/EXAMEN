<?php

$rows = 10;
$cols = 10; 

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<th style="color:white;background-color:LightGreen;">'. $tr*$td .'</th>'; 
        }else{
            $table .= '<td>'. $tr*$td .'</td>';
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;

?>