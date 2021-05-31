<?php
    require_once("./cabecalho.php");
?>
<style>
#cadastrar {
    margin-left: 30px;
}
</style>

<head></head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Estoque</h1>
            
        </div>

        <!-- Botão pesquisa -->
        <div class="input-group-append" style="width: 30%" !important;>
            <input id="input" type="text" class="form-control" placeholder="Buscar Usuário" aria-label="Buscar Usuário	"
                aria-describedby="button-addon2">
            <button type="button" class="btn btn-primary btn-sm" style="width: 200px;height: 35px;">
                Pesquisar
            </button>
            <!-- Botão Cadastrar -->
            <button type="button" class="btn btn-primary btn-sm" style="width: 200px;height: 35px; margin-left: 30px;">
                Cadastrar
            </button>

        </div><br>


        <!-- definir cadastro ou nao 
        <br>
        <div class="form-group">
            <p>
                <label class="radio-inline col-sm-4"><input type="radio" name="optradio" value="juridica"
                        onclick="pessoa(this.value);"> Nao Cadastrado</label>

            </p>
        </div>

        <div id="juridica" style="display:none;">
            <div class="form-group">
                <label class="control-label col-sm-2" for="txtRazaosocial">Nome Completo</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="txtRazaosocial" name="txtRazaosocial" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="txtNomefantasia">Curso</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="txtNomefantasia" required name="txtNomefantasia">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="txtCnpj">ANO/PERIODO</label>
                <div class="col-sm-3">
                    <input type="numbe" class="form-control cnpj" id="txtCnpj" name="txtCnpj" required>
                </div>

                <label class="control-label col-sm-2 " for="txtIe">CPF</label>
                <div class="col-sm-2">
                    <input oninput="mascara(this, 'cpf')" placeholder="Ex.: xxx.xxx.xxx-xx" type="text" class="form-control ie" id="txtIe" name="txtIe"
                        required>
                </div>
            </div>
        </div>

        <div id="fisica" style="display:none;">
            <div class="form-group">
                <label class="control-label col-sm-2" for="txtNomePF">Nome</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="txtNomePF" required name="txtNomePF">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="txtCPF">CPF</label>
                <div class="col-sm-3">
                    <input type="numbe" class="form-control cpf" id="txtCPF" name="txtCPF" required>
                </div>

                <label class="control-label col-sm-2 " for="txtRG">RG</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control rg" id="txtRG" name="txtRG"
                        onkeypress="return SomenteNumero(event)" required>
                </div>
            </div>
        </div>
        
        <script>
        function pessoa(tipo) {
            if (tipo == "fisica") {
                document.getElementById("fisica").style.display = "inline";
                document.getElementById("juridica").style.display = "none";
            } else if (tipo == "juridica") {
                document.getElementById("fisica").style.display = "none";
                document.getElementById("juridica").style.display = "inline";
            }
        }

        function mascara(i, t) {

            var v = i.value;

            if (isNaN(v[v.length - 1])) {
                i.value = v.substring(0, v.length - 1);
                return;
            }

            if (t == "data") {
                i.setAttribute("maxlength", "10");
                if (v.length == 2 || v.length == 5) i.value += "/";
            }


            if (t == "cpf") {
                i.setAttribute("maxlength", "14");
                if (v.length == 3 || v.length == 7) i.value += ".";
                if (v.length == 11) i.value += "-";
            }

        }



        function mascaraCpf() {
            var cpf = document.getElementById('txtCpf').value;
            if (cpf.length == 3) {
                document.getElementById('txtCpf').value = cpf + '.';
            } else if (cpf.length == 7) {
                document.getElementById('txtCpf').value = cpf + '.';
            } else if (cpf.length == 11) {
                document.getElementById('txtCpf').value = cpf + '-';
            }
        }

        function mascaraData() {

            var data = document.getElementById('txtData').value;
            if (data.length == 2) {
                document.getElementById('txtData').value = data + '/';
            } else if (data.length == 5) {
                document.getElementById('txtData').value = data + '/';
            }
        }
        </script>
        
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="inputEndereco">Itens</label>
                <input type="text" class="form-control" id="inputEndereco">
            </div>
            <div class="form-group col-md-1">
                <label for="inputNum">Quantidade</label>
                <input type="text" class="form-control" id="inputNum">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="inputCidade">Saida</label>
                <input oninput="mascara(this, 'data')" placeholder="Ex.: dd/mm/aaaa" type="text" class="form-control" id="inputCidade">
            </div>
            <div class="form-group col-md-1">
                <label for="inputEstado">Hora</label>
                <input type="text" class="form-control" id="inputEstado">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="inputCidade">Devolução</label>
                <input oninput="mascara(this, 'data')" placeholder="Ex.: dd/mm/aaaa" type="text" class="form-control" id="inputCidade">
            </div>
            <div class="form-group col-md-1">
                <label for="inputEstado">Hora</label>
                <input  type="text" class="form-control" id="inputEstado">
            </div>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="150"></textarea>
        </div>
    -->     
    <!-- Inicio da tabela -->
<div class="mt-3" style="height: 300px; overflow: auto;position: relative; display: block;">

<table class="table table-striped table-fluid table-hover" >
    <thead>
       <tr>
        <th scope="col">Nome do Equipamento</th>
        <th scope="col">Descrição complementar</th>
        <th scope="col">Localização e Alocação (controle interno)</th>
        <th scope="col">Permanente ou consumível</th> <!-- dependendo do que o usuário colocar o patrimônio ja muda para patrimônio ou quantidade-->
        <th scope="col">Patrimônio/Quantidade</th>
        <th scope="col">Observações</th> <!-- colocar opções ou em perfeito estado -->
          <th scope="col">INFRA</th>
            <th scope="col">TAES</th>
            <th scope="col">A.P.D.A</th>
           <th scope="col"> P.P.O.A.</th>
           <th scope="col"> A.P.A.</th>
           <th scope="col">P.P.A</th>
            <th scope="col">P.P.A</th>
             <th scope="col">A.E.A</th>
              <th scope="col">P.E.A</th>
              <th scope="col">Insdisponíveis</th>


        </tr>
    </thead>
  <!-- Inicio do preenchimento da tabela 
    <tbody id="tabela">
    <tr>
    <th  scope="row"> Consumível</th>
      <td>ALCOOL ISOPROPÍLICO FRASCO 1 L</td>
      <td>Recuperado</td>
      <td><input type="number" class="form-group" placeholder="Quantidade"></td>
      <td><input type="text" class="form-group" placeholder="Observações"></td>

      <!-- Botão de x <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button> --></td>
    </tr>
        <div class="mt-4">

            <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>

        </div>
        
    </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</body>
<?php
    require_once("./rodape.php");
?>