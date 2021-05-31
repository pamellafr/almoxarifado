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
                <label for="nome">Nome do Reagente</label>
                <input id="nome" type="text" class="form-control" required autofocus>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="codEstoque">Código do estoque</label>
                <input id="codEstoque" type="number" name="codEstoque" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="codProduto">Código do Reagente</label>
                <input id="codProduto" type="number" name="codProduto" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="dataInscricao">Data de Aquisição</label>
                <input id="dataInscricao" type="date" name="dataInscricao" class="form-control" required>
            </div>
            <div class="form-group col-md-3 col-sm-6">
                <label for="dataInscricao">Data de validade</label>
                <input id="dataInscricao" type="date" name="dataInscricao" class="form-control" required>
            </div>

            <div class="form-group col-md-3">
                <label for="status">Marca</label>
                <input id="marca" type="text" name="marca" class="form-control" required>
            </div>

           <div class="form-group col-md-3">
                <label for="categoria">Unidade de medida</label>
                <select id="categoria" name="categoria" class="form-control" required>
                    <option disabled="" selected>Escolha uma categoria</option>
                    <option value="">ml</option>
                    <option value="">g</option>
                    <option value="">outros</option>
                    
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="categoria">Orgão fiscalizador</label>
                <select id="categoria" name="categoria" class="form-control" required>
                    <option disabled="" selected>Escolha uma categoria</option>
                    <option value="">Polícia Federal</option>
                    <option value="">Exército</option>
                    <option value="">Polícia Civil</option>
                    <option value="">Ibama</option>
                    <option value="">Controle Interno</option>
                    
                </select>
            </div>




            <div class="form-group col-md-3 col-sm-6">
                <label for="estoqueMinimo">Estoque mínimo</label>
                <input id="estoqueMinimo" type="number" name="estoqueMinimo" class="form-control" required>
            </div>

            <div class="form-group col-md-3 col-sm-6">
                <label for="quantidade">Quantidade recebida</label>
                <input id="quantidade" type="number" name="quantidade" class="form-control" required>
            </div> 

            <div class="form-group col-md-6">
                <label for="formulaCaracteristica">Fórmula característica</label>
                <input id="formulaCaracteristica" type="text" name="formulaCaracteristica" class="form-control"
                    required>
            </div>

            <div class="form-group col-md-6">
                <label for="fornecedor">Ficha de segurança</label>
                <input id="fornecedor" type="text" name="fornecedor" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="fornecedor">Nota Fiscal</label>
                <input id="fornecedor" type="text" name="fornecedor" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="fornecedor">Localização</label>
                <input id="fornecedor" type="text" name="fornecedor" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="fornecedor">Outros documentos</label>
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