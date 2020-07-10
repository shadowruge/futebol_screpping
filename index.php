<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <section>
        <div class="conteiner">
            <?PHP
            $arquivo = "tabela.json";

            $info = file_get_contents($arquivo);

            $lendo = json_decode($info);

            $table .= '<table>';
            $table .= '<thead>';
            $table .= '<tr>';
            $table .= '<td>Pos</td>';
            $table .= '<td>PTS</td>';
            $table .= '<td>J</td>';
            $table .= '<td>V</td>';
            $table .= '<td>E</td>';
            $table .= '<td>D</td>';
            $table .= '<td>GP</td>';
            $table .= '<td>GC</td>';
            $table .= '<td>SG</td>';
            $table .= '<td>CA</td>';
            $table .= '<td>CV</td>';
            $table .= '<td>Porcentagem</td>';
            $table .= '</tr>';
            $table .= '</thead>';
            $table .= '<tbody>';
            foreach ($lendo->Rank as $campo) {

                $table .= '<tr>';
                $table .= "<td>{$campo->Pos}--</td>";
                $table .= "<td>{$campo->PTS}</td>";
                $table .= "<td>{$campo->J}</td>";
                $table .= "<td>{$campo->V}</td>";
                $table .= "<td>{$campo->E}</td>";
                $table .= "<td>{$campo->D}</td>";
                $table .= "<td>{$campo->GP}</td>";
                $table .= "<td>{$campo->GC}</td>";
                $table .= "<td>{$campo->SG}</td>";
                $table .= "<td>{$campo->CA}</td>";
                $table .= "<td>{$campo->CV}</td>";
                $table .= "<td>{$campo->Porcentagem}</td>";
                $table .= '</tr>';
                                
            }
            // fecahamento do html
            $table .= '</tbody>';
            $table .= '</table>';

            // exibição na tela
            echo $table;
            ?>
                <p>Libertadores: 1º, 2º, 3º, 4º, 5º, 6º
                <p>Fase de grupos: 1º, 2º, 3º, 4º'
                <p>Fase preliminar: 5º, 6º'
                <p>Copa Sulamericana: 7º, 8º, 9º, 10º, 11º, 12º
                <p>Rebaixamento Brasileiro: 17º, 18º, 19º, 20º
        </div>
        </div>
    </section>

</body>

</html>