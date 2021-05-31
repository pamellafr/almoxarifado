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
            <h1 class="h1 mb-0 text-gray-800" style="font-weight: bold;">Acompanhar Empréstimo<i class="fas fa-table p-3 w-40"></i></h1>
        </div>

        <!-- Inicio Pesquisa -->
        <div>
            <div class="col-md-5 input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary text-white" id="pesquisa"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" aria-label="Pesquisar" aria-describedby="pesquisar" id="myInput" placeholder="Pesquisar empréstimo">
            </div>
        </div>
        <!-- Fim Pesquisa -->

        <!-- Inicio Tabela -->
        <div class="table table-responsive text-center" style="border:solid 1px; height: 350px;">
            <table class="table table-striped table-hover preto">
                <thead class="table thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Identificação</th>
                        <th scope="col">Data de entrega</th>
                        <th scope="col">Data de saída</th>
                        <th scope="col">Devolvido?</th>
                        <th scope='col'>Visualizar</th>
                        <th scope='col'>Editar</th>
                        <th scope='col'>Excluir</th>
                        <th scope='col'>Finalizar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>21/05/2020</td>
                        <td>14/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>18/05/2020</td>
                        <td>22/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>21/05/2020</td>
                        <td>14/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>18/05/2020</td>
                        <td>22/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>21/05/2020</td>
                        <td>14/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>18/05/2020</td>
                        <td>22/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>21/05/2020</td>
                        <td>14/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>
                    <tr>
                        <td>Matheus Eduardo Spigariol</td>
                        <td>201811020030</td>
                        <td>18/05/2020</td>
                        <td>22/05/2020</td>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td><button class="nav-link" onclick="abreModalUpdate();">
                        <i class="fas fa-eye"></i></td>
                        </button>
                            <td><button class="nav-link">
                        <i class="fas fa-pen"></i></td>
                        </button>
                                <td><button class="nav-link">
                        <i class="fas fa-trash"></i></td>
                        </button>
                                    <td><button class="nav-link">
                        <i class="fas fa-check"></i></td>
                        </button>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- Fim Tabela -->

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

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <label for="basic-url">Nome</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="nome" value="Matheus Eduardo Spigariol" readonly>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>

                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <label for="basic-url">Curso</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="curso" value="Engenharia de Computação" readonly>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <label for="basic-url">Identificação</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="id" value="201811020030" readonly>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-8">
                                    <label for="basic-url">Item</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="item" value="Nome do item" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="basic-url">Qntd</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" id="item" value="1" readonly>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <label for="basic-url">Data de saída</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" id="data-saida" value="2020-05-14" readonly>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="basic-url">Data de entrega</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" id="data-entrega" value="2020-05-21" readonly>
                                    </div>
                                </div>
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