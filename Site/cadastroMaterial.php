<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cadastro Material</h1>
  </div>
 
    <form method="" action="">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Nome do material</label>
                <input id="nome" type="text" class="form-control" required autofocus>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="codEstoque">Código do estoque</label>
                <input id="codEstoque" type="number" name="codEstoque" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="codProduto">Código do Material</label>
                <input id="codProduto" type="number" name="codProduto" class="form-control" required>
            </div>
            <div class="form-group col-md-3 col-sm-6">
                <label for="dataInscricao">Data de Aquisição</label>
                <input id="dataInscricao" type="date" name="dataInscricao" class="form-control" required>
            </div>
            <div class="form-group col-md-3 col-sm-6">
                <label for="marca">Marca</label>
               <input id="marca" type="text" nome="marca" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="modelo">Modelo</label>
                <input id="modelo" type="text" name="modelo" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
                <label for="fornecedor">Fornecedor</label>
                <input id="fornecedor" type="text" name="fornecedor" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="qtdEstoque">Quantidade</label>
                <input id="qtdEstoque" type="number" name="qtdEstoque" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="estoqueMinimo">Estoque mínimo</label>
                <input id="estoqueMinimo" type="number" name="estoqueMinimo" class="form-control" required>
            </div>
        
            <div class="form-group col-md-12">
                <label for="observacoes">Observações</label>
                <textarea id="fornecedor" rows="3" name="fornecedor" class="form-control"></textarea>
            </div>

        </div>

        <div class="mt-4">

            <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>

        </div>
    </form>

</div>
<!-- /.container-fluid -->

<?php
    require_once("./rodape.php");
?>  
