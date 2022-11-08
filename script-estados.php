<?php
$arquivo = fopen("estados.csv","r");

$contador = 0;

while ($linha = fgetcsv($arquivo, 1000, ",") ) {

    if ( $contador >= 1){
    $sql = "INSERT INTO estados (EstadoID, Nome, Sigla, Excluido)
    VALUES (".$linha[0].", '".$linha[1]."', '".$linha[2]."','F');<br>";
    echo $sql;
    }
    
    $contador++;
}

fclose($arquivo);
?>