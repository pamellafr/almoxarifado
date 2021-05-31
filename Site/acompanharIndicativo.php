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
            <h1 class="h1 mb-0 text-gray-800" style="font-weight: bold;">Indicativo de compras
            </h1>
        </div>

        <div class="input-group-append" style="width: 60%" !important;>
            <input id="input" type="text" class="form-control" placeholder="Pesquisar relação"
                aria-label="Pesquisar relação" aria-describedby="button-addon2">
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
             <!--
            <div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
                <a class="dropdown-item" onclick="sortTable(0)" href="#">Nome</a>
                <a class="dropdown-item" onclick="sortTable(1)" href="#">Email aluno</a>
                <a class="dropdown-item" onclick="sortTable(4)" href="#">Número da ordem de empréstimo</a>
                <a class="dropdown-item" onclick="sortTable(5)" href="#">Data da retirada</a>
                <a class="dropdown-item" onclick="sortTable(6)" href="#">Data do vencimento</a>
                <a class="dropdown-item" onclick="sortTable(7)" href="#">lista materiais</a>
                <a class="dropdown-item" onclick="sortTable(8)" href="#">Professor responsável</a>
                <a class="dropdown-item" onclick="sortTable(9)" href="#">Email professor</a>
                <!--estou acrescentando as mesmas linhas pra ver se da certo, por fim alterei as ordens ok-->
            </div>

            <!--Botão do Filtro-->
            <button class="btn btn-danger1 dropdown-toggle" type="button" id="dropdownOrderButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="color: white" class="fa fa-filter"></i>
                Filtrar por
            </button>
             <!--
            <div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
                <a class="dropdown-item" href="#">Nome</a>
                <a class="dropdown-item" href="#">Email aluno</a>
                <a class="dropdown-item" href="#">Número da ordem de empréstimo</a>
                <a class="dropdown-item" href="#">Data da retirada</a>
                <a class="dropdown-item" href="#">Data do vencimento</a>
                <a class="dropdown-item" href="#">Lista de materiais</a>
                <a class="dropdown-item" href="#">Professor responsável</a>
                <a class="dropdown-item" href="#">Email professor</a>
            </div>
        </div>
            

        <div style="overflow: auto;width:100%; height: 500px; border:solid 1px">
            <table id="table" class="table table-striped table-hover table-bordered">
                <thead class="thead-dark table table-hover">
                    <tr>
                        <div class="col-md-12">
                            <th scope="col">Nome </th>
                            <th scope="col">Email aluno</th>
                            <th scope="col">Número da ordem de empréstimo</th>
                            <th scope="col">Data da retirada</th>
                            <th scope="col">Data do vencimento</th>
                            <th scope="col">Lista dos materiais</th>
                            <th scope="col">Professor responsável</th>
                            <th scope="col">Email professor</th>
                           
                        </div>
                    </tr>

                </thead>
               
            </table>
        </div> --><br><br>

        <a href="agendar.php"><button type="button" class="btn btn-secondary">Adicionar</button></a>


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