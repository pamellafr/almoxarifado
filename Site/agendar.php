<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agendar</h1>
    </div>
    <a href="acompanhaAgenda.php"><button class="btn btn-primary">Ver agenda</button></a>

    <form>
        <div class="form-group">
            <label for="data">Data de uso</label>
            <input type="date" class="form-control" id="data">
        </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" class="form-control" id="hora">
            </div>
            <div class="form-group">
                <label for="sala">Laboratório</label>
                <input type="number" class="form-control" id="sala">
            </div>
            <div class="form-group">
                <label for="reagente">Reagente</label>
                <input type="text" class="form-control" id="reagente">
            </div>
            <div class="form-group">
                <label for="materiais">Materiais</label>
                <input type="text" class="form-control" id="materiais">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao">
            </div>
            <div class="form-group">
                <!-- Podera ser usado dois combobox, onde o user adicionar mais comboboxes conforme 
              ele deseja mais ferramentas, porem isso exije aplicação de javascript -->
                <label for="ferramentas">Ferramentas e quantidades</label>
                <input type="text" class="form-control" id="ferramentas">
            </div>


            <div class="mt-4">

                <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>
    </form>

</div>
<?php
    require_once("./rodape.php ");
?>