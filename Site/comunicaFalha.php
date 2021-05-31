<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->

<body>
    <div class="container-fluid">

        <!-- Page Heading Coloquei uma exclamação simbolico para falhas-->
        <div class="d-sm-flex align-items-center mb-4" style="align-items:baseline;margin-bottom: 48px !important;">
            <h1 style="color: #FF0000" class="h3 mb-0">
                <i class="fa fa-exclamation-triangle"></i> Falhas</h1>
        </div>

        <form action="index.php" method="get">


            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="name">Nome</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Digite seu nome completo"
                        required autofocus><br>

                    <label for="email">Email</label>
                    <input type="text" name="Email" id="email" class="form-control" placeholder="Digite seu Email"><br>

                    <label for="locale">Local</label>
                    <input type="text" name="locale" class="form-control" placeholder="Digite o local do defeito"><br>

                    <label for="object"> Objeto com Falha</label>
                    <input type="text" id="object" class="form-control" name="object"
                        placeholder="Digite o objeto com falha" required autofocuss><br>

                    <label for="sector"> Setor</label>
                    <input type="text" id="sector" class="form-control" name="sector" placeholder="Digite o setor"
                        required autofocuss><br>
                </div>

                <div class="col-sm-6">
                    <div class="form-group" style="width: 100%; height: 100%">
                        <label for="comments">Descrição</label>
                        <textarea type="text" id="comments" rows="17" class="form-control" name="comments"
                            placeholder="Descreva abaixo a falha encontrada!!!" required autofocuss required
                            autofocus></textarea>
                    </div>
                </div>
            </div>
            <div>

                <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>
    </div align="center">

    </form>


</body>
<!-- /.container-fluid -->

<?php
    require_once("./rodape.php");
?>