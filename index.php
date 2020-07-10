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
            <div class="table table-striped table-responsive">
                <?PHP
                $arquivo = "tabela.json";

                $info = file_get_contents($arquivo);

                $lendo = json_decode($info);

                foreach ($lendo->Rank as $campo) {
                    print "<article>";
                    print "<br>Pos:  <br/>"
                        . $campo->Pos;
                    print "<th>  |  PTS:  </th>"
                        . $campo->PTS;
                    print "<th>  |  J:  </th>"
                        . $campo->J;
                    print "<th>  |  V:  </th>"
                        . $campo->V;
                    print "<th>  |  E:  </th>"
                        . $campo->E;
                    print "<th>  |  D:  </th>"
                        . $campo->D;
                    print "<th>   |  GP:  </th>"
                        . $campo->GP;
                    print "<th>   |  GC:  </th>"
                        . $campo->GC;
                    print "<th>   |  SG:  </th>"
                        . $campo->SG;
                    print "<th>   |  CA:  </th>"
                        . $campo->CA;
                    print "<th>   |  CV:  </th>"
                        . $campo->CV;
                    print "<th>   |   Porcentagem:   </th>"
                        . $campo->Porcentagem;
                    print "</article>";
                }
                ?>

                </table>
            </div>
        </div>
    </section>

</body>

</html>