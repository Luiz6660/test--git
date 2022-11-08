<?php
//abre o arquivo e adiciona o conteudo dentro da variavel
$arquivo = fopen("partidos.csv","r");
//contador de registros
$contador = 0;
//laço de repetição que converter as linhas do csv em array
while ($linha = fgetcsv($arquivo, 1000, ",") ) {
//validação da importação
    if ( $contador >= 1){
    $sql = "INSERT INTO partidos (PartidosID, Nome, Sigla, NumLegenda, Excluido)
    VALUES (".$linha[0].", '".$linha[1]."', '".$linha[2]."', '".$linha[3]."','F');<br>";
    echo $sql;
    }
    //adicionar +1 na variavel
    $contador++;
}
//fecha a execusão do arquivo
fclose($arquivo);
?>