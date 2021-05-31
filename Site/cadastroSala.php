<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between" style="margin-bottom: 48px !important;">
        <h1 class="h3 mb-0 text-gray-800">Cadastro Sala</h1>
    </div>

    <form>

        <div class="row">
            <div class="form-group col-md-8">
                <label for="name">Nome</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Digite seu nome completo"
                    required autofocus>
            </div>

            <div class="form-group col-md-4">
                <label for="area_acting">Área de Atuação</label>
                <select id="area_acting" class="form-control">
                    <option>Selecione uma opção.</option>
                    <option>Técnico</option>
                    <option>Professor</option>
                    <option>Aluno</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <br><label for="id_name"> Identificação : </label>
                <input type="text" id="id_name" class="form-control" name="id_name"
                    placeholder="Servidores (Nº SIAPE) / Contratados (CPF) / Alunos (RA)" required autofocus>
            </div>

            <div class="form-group col-md-6">
                <br><label for="sector"> Setor</label>
                <input type="text" id="sector" class="form-control" name="sector" placeholder="Digite o setor" required
                    autofocuss>
            </div>

            <div class="form-group col-md-12">
                <br><label for="comments">Observações</label>
                <textarea type="text" id="comments" rows="4" class="form-control" name="comments"
                    placeholder="Descreva abaixo se necessário alguma oberservação!!!"></textarea>
            </div>

        </div class="fixed-bottom">
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