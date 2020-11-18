<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/futebol_screpping/css/estilo.css" type="text/css" />
    <title>Brasileirão</title>
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <li>Libertadores: 1º, 2º, 3º, 4º, 5º, 6º</li>
                <li>Fase de grupos: 1º, 2º, 3º, 4º'</li>
                <li>Fase preliminar: 5º, 6º'</li>
                <li>Copa Sulamericana: 7º, 8º, 9º, 10º, 11º, 12º</li>
                <li>Rebaixamento Brasileiro: 17º, 18º, 19º, 20º</li>
            </ul>
        </nav>
    </header>

    <div class="conteiner">
        <?php
        $json = "tabela.json";
        $info = file_get_contents($json);
        $lendo = json_decode($info);
        foreach ($lendo->Rank as $row) {

            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>Pos<br>$row->Pos</td>";
            echo "<td>PT<br>$row->PTS</td>";
            echo "<td>J<br>$row->J</td>";
            echo "<td>V<br>$row->V</td>";
            echo "<td>E<br>$row->E</td>";
            echo "<td>D<br>$row->D</td>";
            echo "<td>GP<br>$row->GP</td>";
            echo "<td>GC<br>$row->GC</td>";
            echo "<td>SG<br>$row->SG</td>";
            echo "<td>CA<br>$row->CA</td>";
            echo "<td>CV<br>$row->CV</td>";
            echo "<td>Porc<br>$row->Porcentagem</td>";
            echo "</tr>";
        }

        ?>
    </div>



</body>

</html>