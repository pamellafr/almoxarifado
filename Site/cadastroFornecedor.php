<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!------------------ Antônio Amaral ------------->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><strong>Cadastro Fornecedor</strong></h1>
    </div>
    <div class="form-group">
        <p>
            <label class="radio-inline col-sm-4"><input type="radio" name="optradio" value="juridica"
                    onclick="pessoa(this.value);"> Pessoa Jurídica</label>
            <label class="radio-inline col-sm-4"><input type="radio" name="optradio" value="fisica"
                    onclick="pessoa(this.value);"> Pessoa Física</label>
        </p>
    </div>

    <div id="juridica" style="display:none;">
        <div class="form-group">
            <label class="control-label col-sm-2" for="txtRazaosocial">Razão Social</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="txtRazaosocial" name="txtRazaosocial" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="txtNomefantasia">Nome Fantasia</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="txtNomefantasia" required name="txtNomefantasia">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="txtCnpj">CNPJ</label>
            <div class="col-sm-3">
                <input type="numbe" class="form-control cnpj" id="txtCnpj" name="txtCnpj" required>
            </div>

            <label class="control-label col-sm-2 " for="txtIe">Inscrição Estadual</label>
            <div class="col-sm-3">
                <input type="text" class="form-control ie" id="txtIe" name="txtIe" required>
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
    <!-- Alterna entre pessoa física e pessoa jurídica-->
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
    </script>

    <div class="form-row">
        <div class="form-group col-md-7">
            <label for="inputEndereco">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco">
        </div>
        <div class="form-group col-md-1">
            <label for="inputNum">Número</label>
            <input type="text" class="form-control" id="inputNum">
        </div>
        <div class="form-group col-md-4">
            <label for="inputBairro">Bairro</label>
            <input type="text" class="form-control" id="inputBairro">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputCidade">Cidade</label>
            <input type="text" class="form-control" id="inputCidade">
        </div>
        <div class="form-group col-md-4">
            <label for="inputEstado">Estado</label>
            <input type="text" class="form-control" id="inputEstado">
        </div>
        <div class="form-group col-md-3">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail">
        </div>
        <div class="form-group col-md-3">
            <label for="inputTelefone">Telefone</label>
            <input type="text" class="form-control" id="inputTelefone">
        </div>
        <div class="form-group col-md-5">
            <label for="inputSite">Site</label>
            <input type="text" class="form-control" id="inputSite">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Observação</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="150"></textarea>
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