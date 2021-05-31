<?php
require_once("./cabecalho.php");
?>
<style >
    .table-hover > tbody > tr: hover{
        background-color: #ccc;
        color: #ccc;
    }
    .table-striped{
        color : black;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800" style="font-weight: bold;">Devoluções
            <i class = "w-30 p-3 fa fa-calendar-week"></i> </h1>
        </div>

        <div class="input-group-append" style="width: 60%" !important;>
            <input id="input" type="text" class="form-control" placeholder="Pesquisar Agendamento" aria-label="Pesquisar Agendamento    "aria-describedby="button-addon2">
            <button type="button" class="btn btn-primary btn-sm" style="width: 150px;height: 35px;"><i class="fa fa-search"></i>Pesquisar
            </button>
        </div><br><br>

        <!--Botão de Ordenar-->
        <div class="dropdown mb-4">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i style="color: white" class="fa fa-search"></i>
            Ordenar por
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
            <a class="dropdown-item" onclick="sortTable(0)" href="#">Identificação</a>
            <a class="dropdown-item" onclick="sortTable(1)" href="#">Data de aquisição</a>
            <a class="dropdown-item" onclick="sortTable(2)" href="#">Data de devolução</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Email do professor</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Professor responsável</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Nome do aluno ou servidor</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Ra do aluno</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Tipo de usuário</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Tipo de material</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Equipamento/material/Ferramenta</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Patrimônio/Quantidade</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Observação</a>
            <a class="dropdown-item" onclick="sortTable(5)" href="#">Efetuado por:</a>
        </div>

        <!--Botão do Filtro-->  
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderButton" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
            <i style="color: white" class="fa fa-filter"></i>
            Filtrar por
        </button>

          <div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
            <a class="dropdown-item" onclick="sortTable(0)" href="#">Identificação</a>
            <a class="dropdown-item" onclick="sortTable(1)" href="#">Data de aquisição</a>
            <a class="dropdown-item" onclick="sortTable(2)" href="#">Data de devolução</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Email do professor responsável</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Professor responsável</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Nome do aluno ou servidor</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Ra do aluno</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Tipo de usuárior</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Tipo de material</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Equipamento/material/Ferramenta</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Patrimônio/Quantidade</a>
            <a class="dropdown-item" onclick="sortTable(3)" href="#">Observação</a>
            <a class="dropdown-item" onclick="sortTable(5)" href="#">Efetuado por:</a>
        </div>
    </div>

    <div style="overflow: auto;width:100%; height: 500px; border:solid 1px"> 
        <table id="table" class="table table-striped table-hover table-bordered">
            <thead class="thead-dark table table-hover">
                <tr> 
                 <div class="col-md-12">
                <th scope="col">Identificação</th>
                <th scope="col">Data de aquisição</th>
                <th scope="col">Data de devolução</th>
                <th scope="col">Email do professor</th>
                <th scope="col">Professor responsável</th>
                <th scope="col">Nome do aluno ou servidor</th>
                <th scope="col">Ra do aluno</th>
                <th scope="col">Tipo de usuário</th>
                <th scope="col">Tipo de material</th>
                <th scope="col">Equipamento/material/Ferramenta</th>
                <th scope="col">Patrimônio/Quantidade</th>
                <th scope="col">Observação</th>
                <th scope="col">Efetuado por:</th>
                <th scope="col">Devolver</th>
                    </div>
     
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>201802563018</td> <!--Identificação-->
                    <td>28/05/2021</td>  <!--Data de aquisição-->
                    <td>25/06/2020</td>  <!--Data de devolução-->
                    <td>pamellafaria@hotmail.com</td>  <!--Email do professor-->
                    <td>Pâmella</td>  <!--Professor responsável-->
                    <td>Pamella</td>  <!--Nome do aluno ou servidor-->
                    <td>2017.056.02</td>  <!--Ra do aluno-->
                    <td>25/06/2020</td>  <!--Tipo de usuário-->
                    <td>13:00</td>  <!--Tipo de material-->
                    <td>Jogo de Alicate</td>  <!--Equipamento/material/Ferramenta-->
                    <td>Emprestado</td>  <!--Patrimônio/Quantidade-->
                     <td>Emprestado</td>  <!--Observação-->
                     <td>Devolver</td>  <!--Efetuado por:-->
                    <td> 
                        <button type="button" class="btn btn-warning">Devolver</button>
                       
                    </td>
                </tr>

                <tr>
                    <td>201802563018</td> <!--Identificação-->
                    <td>28/05/2021</td>  <!--Data de aquisição-->
                    <td>25/06/2020</td>  <!--Data de devolução-->
                    <td>pamellafaria@hotmail.com</td>  <!--Email do professor-->
                    <td>Pâmella</td>  <!--Professor responsável-->
                    <td>Pamella</td>  <!--Nome do aluno ou servidor-->
                    <td>2017.056.02</td>  <!--Ra do aluno-->
                    <td>25/06/2020</td>  <!--Tipo de usuário-->
                    <td>13:00</td>  <!--Tipo de material-->
                    <td>Jogo de Alicate</td>  <!--Equipamento/material/Ferramenta-->
                    <td>Emprestado</td>  <!--Patrimônio/Quantidade-->
                     <td>Emprestado</td>  <!--Observação-->
                     <td>Devolver</td>  <!--Efetuado por:-->
                    <td> 
                        <button type="button" class="btn btn-warning">Devolver</button>
                       
                    </td>
                </tr>

                <tr>
                    <td>201802563018</td> <!--Identificação-->
                    <td>28/05/2021</td>  <!--Data de aquisição-->
                    <td>25/06/2020</td>  <!--Data de devolução-->
                    <td>pamellafaria@hotmail.com</td>  <!--Email do professor-->
                    <td>Pâmella</td>  <!--Professor responsável-->
                    <td>Pamella</td>  <!--Nome do aluno ou servidor-->
                    <td>2017.056.02</td>  <!--Ra do aluno-->
                    <td>25/06/2020</td>  <!--Tipo de usuário-->
                    <td>13:00</td>  <!--Tipo de material-->
                    <td>Jogo de Alicate</td>  <!--Equipamento/material/Ferramenta-->
                    <td>Emprestado</td>  <!--Patrimônio/Quantidade-->
                     <td>Emprestado</td>  <!--Observação-->
                     <td>Devolver</td>  <!--Efetuado por:-->
                    <td> 
                        <button type="button" class="btn btn-warning">Devolver</button>
                       
                    </td>
                </tr>

                <tr>
                    <td>201802563018</td> <!--Identificação-->
                    <td>28/05/2021</td>  <!--Data de aquisição-->
                    <td>25/06/2020</td>  <!--Data de devolução-->
                    <td>pamellafaria@hotmail.com</td>  <!--Email do professor-->
                    <td>Pâmella</td>  <!--Professor responsável-->
                    <td>Pamella</td>  <!--Nome do aluno ou servidor-->
                    <td>2017.056.02</td>  <!--Ra do aluno-->
                    <td>25/06/2020</td>  <!--Tipo de usuário-->
                    <td>13:00</td>  <!--Tipo de material-->
                    <td>Jogo de Alicate</td>  <!--Equipamento/material/Ferramenta-->
                    <td>Emprestado</td>  <!--Patrimônio/Quantidade-->
                     <td>Emprestado</td>  <!--Observação-->
                     <td>Devolver</td>  <!--Efetuado por:-->
                    <td> 
                        <button type="button" class="btn btn-warning">Devolver</button>
                       
                    </td>
                </tr>
                <tr>
                    <td>201802563018</td> <!--Identificação-->
                    <td>28/05/2021</td>  <!--Data de aquisição-->
                    <td>25/06/2020</td>  <!--Data de devolução-->
                    <td>pamellafaria@hotmail.com</td>  <!--Email do professor-->
                    <td>Pâmella</td>  <!--Professor responsável-->
                    <td>Pamella</td>  <!--Nome do aluno ou servidor-->
                    <td>2017.056.02</td>  <!--Ra do aluno-->
                    <td>25/06/2020</td>  <!--Tipo de usuário-->
                    <td>13:00</td>  <!--Tipo de material-->
                    <td>Jogo de Alicate</td>  <!--Equipamento/material/Ferramenta-->
                    <td>5</td>  <!--Patrimônio/Quantidade-->
                     <td>São 5 martelos</td>  <!--Observação-->
                     <td>Pâmella</td>  <!--Efetuado por:-->
                    <td> 
                        <button type="button" class="btn btn-warning">Devolver</button>
                       
                    </td>
                </tr>
       
                
            </tbody>
        </table>

        

    </div> <br><br> 

    <div class="py-3">
            <button type="submit " class="btn btn-primary mb-3 btn-lg">Novo Empréstimo</button>
        </div> 
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Script da pesquisa-->
    <script>
        $(document).ready(function(){
            $("#input").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script> 

    <!--Script para ordenar -->
    <script > 
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
                if (shouldSwitch){
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount ++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script> 

    <?php
    require_once("./rodape.php");
    ?> 
