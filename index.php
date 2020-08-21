<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $json = "tabela.json";
    $info = file_get_contents($json);
    $lendo = json_decode($info);
    foreach ($lendo->Rank as $row) {
        print "<article>";
        print "<br /><b>Pos:</b> " .$row->Pos;
        print "<br /><b>PTS:</b> " .$row->PTS;
        print "<br /><b>J:</b> " .$row->J;
        print "<br /><b>V:</b> " .$row->V;
        print "<br /><b>E:</b> " .$row->E;
        print "<br /><b>D:</b> " .$row->D;
        print "<br /><b>GP:</b> " .$row->GP;
        print "<br /><b>GC:</b> " .$row->GC;
        print "<br /><b>SG:</b> " .$row->SG;
        print "<br /><b>CA:</b> " .$row->CA;
        print "<br /><b>CV:</b> " .$row->CV;
        print "<br /><b>Porcentagem:</b> " .$row->Porcentagem;
        print "</article>";
        
    }
    ?>
<p>Libertadores: 1º, 2º, 3º, 4º, 5º, 6º<br/>
Fase de grupos: 1º, 2º, 3º, 4º'<br/>
Fase preliminar: 5º, 6º'<br/>
Copa Sulamericana: 7º, 8º, 9º, 10º, 11º, 12º<br/>
Rebaixamento Brasileiro: 17º, 18º, 19º, 20º<br/>
</P>         
</body>

</html>
