<?php
    require_once("./cabecalho.php");
?>
    <style>
        .preto {
            color: black;
        }

    </style>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800" style="font-weight: bold;">Empréstimos<i class="fas fa-table p-3 w-40"></i></h1>
        </div>

        <!-- Inicio Pesquisa
        <div>
            <div class="col-md-5 input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary text-white" id="pesquisa"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" aria-label="Pesquisar" aria-describedby="pesquisar" id="myInput" placeholder="Pesquisar empréstimo">
            </div>
        </div>
        Fim Pesquisa -->
<form method="" action="">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Identificação</label>
                <input id="idemprestimo" type="number" class="form-control" required autofocus>
            </div>

            <div class="form-group col-md-3 col-sm-3">
                <label for="dataInscricao">Data de Aquisição</label>
                <input id="dataInscricao" type="date" name="dataInscricao" class="form-control" required>
            </div>
            <div class="form-group col-md-3 col-sm-3">
                <label for="dataInscricao">Data de Devolução</label>
                <input id="dataInscricao" type="date" name="dataInscricao" class="form-control" required>
            </div>
            <div class="form-group col-md-6 ">
                 <label for="sexo ">E-mail do professor responsável</label>
                    <select class="custom-select " id="sexo " required autocomplete=“off”>
                <option disabled selected>Selecione uma opção...</option>
                <option value="masculino ">carlos@bol.com</option>
                <option value="masculino ">Eduardohenrique@gmail.com</option>
            </select>
            </div>   

            <div class="form-group col-md-6">
                <label for="status">Professor responsável</label>
                <input id="marca" type="text" name="marca" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Nome do aluno ou servidor</label>
                <input id="marca" type="text" name="marca" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Ra do aluno</label>
                <input id="marca" type="number" name="marca" class="form-control" required>
            </div>
           <div class="form-group col-md-6 ">
                 <label for="sexo ">Tipo de usuário</label>
                    <select class="custom-select " id="sexo " required autocomplete=“off”>
                <option disabled selected>Selecione uma opção...</option>
                <option value="masculino ">Sou TAE ou chefe imediato de um setor</option>
                <option value="masculino ">Servidor terceirizado ligado aos serviços de Infraestrutura</option>
                <option value="masculino ">Sou professor de Pesquisa de Área diretamente relacionada ao setor</option>
            </select>
            </div>  
           <div class="form-group col-md-6 ">
                 <label for="sexo ">Tipo de material</label>
                    <select class="custom-select " id="sexo " required autocomplete=“off”>
                <option disabled selected>Selecione uma opção...</option>
                <option value="masculino ">Permanente</option>
                <option value="masculino ">Consumível</option>
            </select>
            </div>  
             <div class="form-group col-md-6 ">
                 <label for="sexo ">Equipamento/Material/Ferramenta</label>
                    <select class="custom-select " id="sexo " required autocomplete=“off”>
                <option disabled selected>Selecione uma opção...</option>
                <option value="masculino ">Resistor</option>
                <option value="masculino ">becker</option>
            </select>
            </div>    
            <div class="form-group col-md-6">
                <label for="status">Patrimônio/Quantidade</label>
                <input id="marca" type="number" name="marca" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Observação</label>
                <input id="marca" type="text" name="marca" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Efetuado por:</label>
                <input id="marca" type="text" name="marca" class="form-control" required>
            </div>
            
            

        </div>


        <div class="mt-4">

            <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>

        </div>
    </form>

</div>

        <div class="py-3">
            <button type="submit " class="btn btn-primary mb-3 btn-lg">Novo Empréstimo</button>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <h2 class="h2 mb-2 text-gray-800">Empréstimo</h2>
                            <hr>

                            
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <label for="basic-url">Observações</label>
                                    <textarea class="form-control " id="obs" rows="2 " cols="150 " readonly></textarea>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <label for="basic-url">Devolvido?</label>
                                    <div class="input-group mb-3">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </form>
                        <p>&nbsp;</p>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 text-right" style="">

                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function abreModalUpdate() {
                $('#modal').modal('show');
            }
        </script>



    </div>
    <!-- /.container-fluid -->
    <?php
    require_once("./rodape.php ");
?>