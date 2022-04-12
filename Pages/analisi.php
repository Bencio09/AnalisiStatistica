<?php
    $findSpecial = array(","," ",".","!","?","\n","\r","(",")");
    $findA = array("à","À","á","Á");
    $findE = array("È","É","è","é");
    $findI = array("ì","Ì","Í","í");
    $findO = array("ò","ó","Ò","Ó");
    $findU = array("ù","Ù","Ú","ú");
    $text = $_POST["text"];
    $text = strtoupper($text);

    //Trova i caratteri speciali nell'array $findSpecial e gli elimina dalla stringa
    $text = str_replace($findSpecial,"",$text);

    //Trova i caratteri simili alla A nell'array $findA e gli sostituisce con la 'a'
    $text = str_replace($findA,"A",$text);

    //Trova i caratteri simili alla E nell'array $findE e gli sostituisce con la 'e'
    $text = str_replace($findE,"E",$text);

    //Trova i caratteri simili alla I nell'array $findI e gli sostituisce con la 'i'
    $text = str_replace($findI,"I",$text);

    //Trova i caratteri simili alla O nell'array $findO e gli sostituisce con la 'o'
    $text = str_replace($findO,"O",$text);

    //Trova i caratteri simili alla U nell'array $findU e gli sostituisce con la 'u'
    $text = str_replace($findU,"U",$text);

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
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form action="../Index.php">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <input class="btn btn-primary" type="submit" value="USA ANCORA">
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>