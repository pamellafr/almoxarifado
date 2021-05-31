<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cadastro Reagente</h1>
    </div>

    <form method="" action="">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input id="nome" type="text" class="form-control" required autofocus>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="codEstoque">Código do estoque</label>
                <input id="codEstoque" type="number" name="codEstoque" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="codProduto">Código do produto</label>
                <input id="codProduto" type="number" name="codProduto" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="precoUnitario">Preço unitário</label>
                <input id="precoUnitario" type="number" name="precoUnitario" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="dataInscricao">Data de inscrição</label>
                <input id="dataInscricao" type="date" name="dataInscricao" class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="status">Status</label>
                <input id="status" type="text" name="status" class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" class="form-control" required>
                    <option disabled="" selected>Escolha uma categoria</option>
                    <option value="">Categoria 1</option>
                    <option value="">Categoria 2</option>
                    <option value="">Categoria 3</option>
                </select>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="qtdEstoque">Quantidade estoque</label>
                <input id="qtdEstoque" type="number" name="qtdEstoque" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="estoqueMinimo">Estoque mínimo</label>
                <input id="estoqueMinimo" type="number" name="estoqueMinimo" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="quantidade">Quantidade</label>
                <input id="quantidade" type="number" name="quantidade" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="quantidadeMinima">Quantidade mínima no estoque</label>
                <input id="quantidadeMinima" type="number" name="quantidadeMinima" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
                <label for="formulaCaracteristica">Fórmula caracteristica</label>
                <input id="formulaCaracteristica" type="text" name="formulaCaracteristica" class="form-control"
                    required>
            </div>

            <div class="form-group col-md-6">
                <label for="fornecedor">Fornecedor</label>
                <input id="fornecedor" type="text" name="fornecedor" class="form-control" required>
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