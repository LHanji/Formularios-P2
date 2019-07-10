<?php
/* IMPLEMENTAÇÃO DA QUESTÃO 01 DA PROVA DO 2° BIMESTRE DE DESENVOLVIMENTO PARA WEB */
    $ano = $_GET["ano"];
    $f = fopen("violencia-domestica-df.csv","r");
    $d = fgetcsv($f);
    echo '<body><table align="center">';
    for($i=1 ; $i<7 ; $i++){
        if($d[$i]==$ano){
            while($d){
                echo "<tr><th>$d[0]</th><th>$d[$i]</th></tr>";
                $d = fgetcsv($f);
            }
            break;
        }
    }
    fclose($f);
    echo "</table></body>";
?>
<style>
    th{
        border: 1px solid aqua;
    }
</style>