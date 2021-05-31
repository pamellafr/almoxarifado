<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastro Ferramenta</h1>
    </div>


    <form method="post" class="mx-md-5">

        <div class="row ">

            <div class="form-group col-md-5 col-sm-6 ">
                <label for="nome">Nome da ferramenta</label>
                <input type="text" class="form-control" id="nome" placeholder="Informe o nome da ferramenta"
                    required="required">
            </div>


            <div class="form-group col-md-5 col-sm-6">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" required="required" placeholder="Informe a marca">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5 col-sm-6">
                <label for="quantidade">Quantidade de estoque</label>
                <input type="number" class="form-control" id="quantidade" required="required"
                    placeholder="Informe a quantidade">
            </div>
            <div class="form-group col-md-5 col-sm-6">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" required="required" placeholder="Informe o modelo">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5 col-sm-6">
                <label for="estoqueminimo">Estoque mínimo</label>

                <input type="number" class="form-control" id="estoqueminimo" required="required"
                    placeholder="Informe a quantidade">
            </div>

            <div class="form-group col-md-5 col-sm-6">
                <label for="datadeaquisicao">Data de Aquisição</label>
                <input type="date" class="form-control" id="datadeaquisicao" required="required">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5 col-sm-6">
                <label for="datadeinscricao">Data de inscrição</label>
                <input type="date" class="form-control" id="datadeinscricao" required="required">
            </div>
            <div class="form-group col-md-5 col-sm-6">
                <label for="codigo">Codigo</label>
                <input type="number" class="form-control" id="codigo" required="required" placeholder="Ex: xxxxxx">

            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5 col-sm-6">

                <label for="patrimonio">Patrimonio</label>
                <input type="text" class="form-control" id="patrimonio" required="required" placeholder="Ex: xxxxxx">
            </div>
            <div class="form-group col-md-5 col-sm-6">

                <label for="fornecedor">Fornecedor</label>
                <input type="text" class="form-control" id="fornecedor" required="required"
                    placeholder="Informe o fornecedor">
            </div>
        </div>
        <div class="mt-4">

            <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>

        </div>
    </form>


</div>
<script>
function cadastrar() {

    var nome = document.getElementById("nome");
    var marca = document.getElementById("marca");
    var quantidade1 = document.getElementById("quantidade");
    var modelo = document.getElementById("modelo");
    var estoque = document.getElementById("estoqueminimo");
    var data1 = document.getElementById("datadeinscricao");
    var data2 = document.getElementById("datadeaquisicao");
    var codigo = document.getElementById("codigo");
    var patrimonio = document.getElementById("patrimonio");
    var fornecedor = document.getElementById("fornecedor");

    if (nome.value != "" && marca.value != "" && quantidade1.value != "" && modelo.value != "" && estoque.value != "" &&
        data1.value != "" && data2.value != "" && codigo.value != "" && patrimonio.value != "" && fornecedor.value != ""
        ) {
        alert('Os dados foram preenchidos corretamente');
    } else {
        alert('Os campos não foram preenchidos corretamente');
    }

}
</script>
<!-- /.container-fluid -->

<?php
    require_once("./rodape.php");
?>