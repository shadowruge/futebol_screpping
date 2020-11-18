<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/futebol_screpping/css/estilo.css" type="text/css" />
    <title>Document</title>
</head>

<body>
<div class="conteiner">
    <?php
    $json = "tabela.json";
    $info = file_get_contents($json);
    $lendo = json_decode($info);
    foreach ($lendo->Rank as $row) {
        echo "<table>";
        echo "<tr>";
        echo "<br /><b>Pos:</b>$row->Pos";
        echo "<br /><b>PTS:</b>$row->PTS";
        echo "<br /><b>J:</b>$row->J";
        echo "<br /><b>V:</b>$row->V ";
        echo "<br /><b>E:</b> $row->E";
        echo "<br /><b>D:</b>$row->D ";
        echo "<br /><b>GP:</b> $row->GP";
        echo "<br /><b>GC:</b> $row->GC";
        echo "<br /><b>SG:</b>$row->SG";
        echo "<br /><b>CA:</b> $row->CA";
        echo "<br /><b>CV:</b>$row->CV ";
        echo "<br /><b>Porcentagem:</b>$row->Porcentagem";
        echo "</tr>";
    }
    ?>
</div>
</body>

</html>