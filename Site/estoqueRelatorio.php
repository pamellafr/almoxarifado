<?php
    require_once("./cabecalho.php");
?>

<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Begin Page Content -->

<head>
    <style>
    .table-hover>tbody>tr: hover {
        background-color: #ccc;
        color: #ccc;
    }

    .table-striped {
        color: black;
    }

    
.btn-danger1 {
  color: #fff;
  background-color: #8faadc;
  border-color: #8faadc;
}
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800" style="font-weight: bold;">Relatorio Geral
            </h1>
        </div>

        <div class="input-group-append" style="width: 60%" !important;>
            <input id="input" type="text" class="form-control" placeholder="Pesquisar Agendamento"
                aria-label="Pesquisar Agendamento	" aria-describedby="button-addon2">
            <button type="button" class="btn btn-danger1 btn-sm" style="width: 150px;height: 35px;"><i
                    class="fa fa-search"></i>Pesquisar
            </button>
        </div><br><br>

        <!--Botão de Ordenar-->
        <div class="dropdown mb-4">
            <button class="btn btn-danger1 dropdown-toggle" type="button" id="dropdownOrderButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="color: white" class="fa fa-search"></i>
                Ordenar por
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
                <a class="dropdown-item" onclick="sortTable(0)" href="#">Produto</a>
                <a class="dropdown-item" onclick="sortTable(1)" href="#">Categoria</a>
                <a class="dropdown-item" onclick="sortTable(4)" href="#">Disponivel</a>
                <a class="dropdown-item" onclick="sortTable(5)" href="#">Item</a>
            </div>

            <!--Botão do Filtro-->
            <button class="btn btn-danger1 dropdown-toggle" type="button" id="dropdownOrderButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="color: white" class="fa fa-filter"></i>
                Filtrar por
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
                <a class="dropdown-item" href="#">Produto</a>
                <a class="dropdown-item" href="#">Categoria</a>
                <a class="dropdown-item" href="#">Disponibilidade</a>
                <a class="dropdown-item" href="#">Item</a>
            </div>
        </div>

        <div style="overflow: auto;width:100%; height: 500px; border:solid 1px">
            <table id="table" class="table table-striped table-hover table-bordered">
                <thead class="thead-dark table table-hover">
                    <tr>
                        <div class="col-md-12">
                            <th scope="col">Produto </th>
                            <th scope="col">Quantidade </th>
                            <th scope="col">Categoria </th>
                            <th scope="col">Disponibilidade</th>
                            <th scope="col">Ação</th>
                        </div>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>Hidrogenio</td>
                        <th scope="row">1</th>
                        <td>Liquido</td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-dark">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>ferro</td>
                        <th scope="row">2</th>
                        <td>Solido</td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Cobre</td>
                        <th scope="row">3</th>
                        <td>Gasoso </td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Bronze</td>
                        <th scope="row">4</th>
                        <td>Solido</td>
                        <td>Não Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Ouro</td>
                        <th scope="row">5</th>
                        <td>Solido</td>
                        <td>Não Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Nidrogenio</td>
                        <th scope="row">6</th>
                        <td>Gasoso</td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Helio</td>
                        <th scope="row">7</th>
                        <td>Gososo</td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Radio</td>
                        <th scope="row">8</th>
                        <td>Liquido</td>
                        <td>Não Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Plutonio</td>
                        <th scope="row">9</th>
                        <td>Liquido</td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Uranio</td>
                        <th scope="row">10</th>
                        <td>Liquido</td>
                        <td>Não Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Carbono</td>
                        <th scope="row">11</th>
                        <td>Solido</td>
                        <td>Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Tungstenio</td>
                        <th scope="row">12</th>
                        <td>Gasoso</td>
                        <td>Não Disponivel</td>
                        <td>
                            <button type="button" class="btn btn-danger1">Detalhes</button>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <br><br>

        <a href="agendar.php"><button type="button" class="btn btn-secondary">Novo Item</button></a>


        <!--Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--Script da pesquisa-->
        <script>
        $(document).ready(function() {
            $("#input").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        </script>

        <!--Script para ordenar -->
        <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("table");
            switching = true;

            dir = "asc";

            while (switching) {

                switching = false;
                rows = table.rows;

                for (i = 1; i < (rows.length - 1); i++) {

                    shouldSwitch = false;

                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];

                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {

                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
        </script>
</body>

<?php
    require_once("./rodape.php");
?>