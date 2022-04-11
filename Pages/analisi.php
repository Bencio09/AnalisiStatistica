<?php
    $find = array(","," ",".","!","?");
    $text = $_POST["text"];
    $text = strtoupper($text);

    //Trova i char nell'array $find e gli elimina dalla stringa
    $text = str_replace($find,"",$text);

    //Converte la stringa in un array e conta le ripetizioni dei valori
    $text = array_count_values(str_split($text));

    //Ordina l'array in base alla chiave comparando come se fossero delle stringhe (2)
    ksort($text,2);
    //echo var_dump($text);
    
    //Apre il file in modalità sovrascrittura
    $fp = fopen('../Risultato.csv', 'w');

    //Inserisce le chiavi dell'array nel file impostando il ; come delimitatore
    fputcsv($fp, array_keys($text),";");

    //Inserisce i dati nel file impostando nel file ; come delimitatore
    fputcsv($fp, $text, ";");
    
    //Chiude il file
    fclose($fp);
?>

<html>
    <head>
        <link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css">
        <script src="../JS/bootstrap.js"></script>
        <title>Risultato</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <h1 style="text-align:center" class="alert alert-success">RISULTATO</h1>
                    <table class="table table-bordered border-primary table-hover" style="border:1px solid">
                        <tr class="table-primary" style="text-align: center;">
                            <th>Lettera</th>
                            <th>Ripetizioni</th>
                        </tr>
                        <?php
                            foreach ($text as $key => $value){
                                echo "
                                <tr class='table-info' style='text-align: center;'>
                                    <th>$key</th>
                                    <td>$value</td>
                                </tr>";
                            }
                        ?>

                    </table>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>