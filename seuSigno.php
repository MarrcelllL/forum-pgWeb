<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seu-Signo</title>
</head>
<body>
    <?php
        $date = new DateTime($_POST['dataNasc']);
        $dtSig = $date->format('m-d');  
        $xml = simplexml_load_file('dataSg.xml');
        echo '<h1>Signo: ';
            foreach ($xml->signo as $reg) :
                if ($dtSig >= $reg->dataInicio and $dtSig <= $reg->dataFim){
                    echo $reg->signoNome . '</h1>';
                    echo '<p> -' . $reg->descricao . '<p>';
                }
            endforeach;
    ?>
</body>
</html>