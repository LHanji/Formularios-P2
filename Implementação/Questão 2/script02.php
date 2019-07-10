<?php
    /* IMPLEMENTAÇÃO DA QUESTÃO 02 DA PROVA DO 2° BIMESTRE DE DESENVOLVIMENTO PARA WEB */
    $Localidade = $_POST["nomeLocal"];
    $f = fopen("violencia-domestica-df.csv","r");
    $d = fgetcsv($f);
    echo '<body><table align="center">';
    while($d){
        if($Localidade===$d[0]){
            $sum = $d[1] + $d[2] + $d[3] + $d[4] + $d[5] + $d[6];
            echo "<tr><th>$d[1]</th><th>$d[1]</th><th>$d[1]</th><th>$d[1]</th><th>$d[1]</th><th>$d[1]</th><th>$sum</th></tr>";
        }
        $d = fgetcsv($f);
    }
    fclose($f);
    echo "</table></body>";
?>