<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->

<head>
  <meta charset="UTF-8">
</head>

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Adicionar</h1>
  </div>
  
</div>
  <!-- Pesquisa de Item -->
  <div class="input-group-append" style="width: 50%; margin-left:23px" !important;>
    <input id="input" type="text" class="form-control" placeholder="Pesquisar Item" aria-label="Pesquisar Item" aria-describedby="button-addon2">
    <button type="button" class="btn btn-primary btn-sm" style="width: 165px;height: 37px;margin-left:3px;"> Pesquisar </button>
  </div> <br>

  <!-- Tabela com os Itens e Opcao para Adicionar-->
  <div style="margin: auto 23px auto 23px">
    <div style="overflow: auto;width:100%; height: 500px; border:solid 1px;">
            <table id="table" class="table table-striped table-hover table-bordered">
                <thead class="thead-dark table table-hover">
                    <tr>
                        <div class="col-md-12">
                            <th scope="col">Produto </th>
                            <th scope="col">Quantidade </th>
                            <th scope="col">Adicionar</th>
                            </div>
                    </tr>

                </thead>
                <tbody style="color: black">
                <div>
                    <tr>
                        <td>Item1</td>
                        <th scope="row">1</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>
                </div>
                    <tr>
                        <td>Item2</td>
                        <th scope="row">2</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item3</td>
                        <th scope="row">3</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item4</td>
                        <th scope="row">4</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item5</td>
                        <th scope="row">5</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item6</td>
                        <th scope="row">6</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item7</td>
                        <th scope="row">7</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item8</td>
                        <th scope="row">8</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item9</td>
                        <th scope="row">9</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item10</td>
                        <th scope="row">10</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item11</td>
                        <th scope="row">11</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Item12</td>
                        <th scope="row">12</th>
                        <td>
                            <input id="input" type="number" min="0" class="form-control" placeholder="Qnt." aria-label="Qnt." aria-describedby="button-addon2" style="width:163px; margin-bottom:3px;">
                            <button type="button" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-dark">Cancelar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <br><br>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<?php
    require_once("./rodape.php");
?>  