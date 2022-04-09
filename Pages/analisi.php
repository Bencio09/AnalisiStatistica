<?php
    $text = $_POST["text"];
    $text = strtoupper($text);

    $text = array_count_values(str_split($text));
    ksort($text,2);
    echo var_dump($text);
    
    $fp = fopen('./Result.csv', 'w');

    foreach ($text as $fields) {
        fputcsv($fp, $fields);
    }
    
    fclose($fp);
?>