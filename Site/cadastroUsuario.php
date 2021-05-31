<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header d-sm-flex justify-content-between mb-3">
        <h1 class="h2 mb-0 text-gray-800 align-baseline"><strong>Cadastro Usuário</strong></h1>
    </div>
    <form action="index.php" method="get">
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="home"
                    onkeypress="return ApenasLetras(event,this)" autofocus required autocomplete=“off”>
            </div>
            <div class=" form-group col-md-6 ">
                <label for="cpf ">CPF</label>
                <input type="text " class="form-control " id="cpf " name="cpf " oninput="mascara_cpf(this) "
                    pattern="[0-9]+$" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="identificacao ">Identificação :Servidores (Nº SIAPE) / Contratados (CPF)</label>
                <input type="text " class="form-control " id="identificacao " name="identificacao "
                    onkeypress="return ApenasNumeros(event,this)" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="email ">Email</label>
                <input type="email " class="form-control " id="email " name="email " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="telefone ">Telefone</label>
                <input type="tel " class="form-control " id="telefone " name="telefone "
                    onkeyup="mascara( this, mascara_telefone );" onkeypress="return ApenasNumeros(event,this)"
                    maxlength="15 " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="sexo ">Sexo</label>
                <select class="custom-select " id="sexo " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="masculino ">Masculino</option>
                    <option value="feminino ">Feminino</option>
                </select>
            </div>
            <div class="form-group col-md-5 ">
                <label for="endereco ">Endereço</label>
                <input type="text " class="form-control " id="endereco " name="endereco "
                    onkeypress="return ApenasLetras(event,this)" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-2 ">
                <label for="numero ">Número</label>
                <input type="number " class="form-control " id="numero " name="numero "
                    onkeypress="return ApenasNumeros(event,this)" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-5 ">
                <label for="bairro ">Bairro</label>
                <input type="text " class="form-control " id="bairro " name="bairro "
                    onkeypress="return ApenasLetras(event,this)" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-4 ">
                <label for="cidade ">Cidade</label>
                <input type="text " class="form-control " id="cidade " name="cidade "
                    onkeypress="return ApenasLetras(event,this)" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-4 ">
                <label for="estado ">Estado</label>
                <select class="custom-select " id="estado " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="AC ">Acre</option>
                    <option value="AL ">Alagoas</option>
                    <option value="AP ">Amapá</option>
                    <option value="AM ">Amazonas</option>
                    <option value="BA ">Bahia</option>
                    <option value="CE ">Ceará</option>
                    <option value="DF ">Distrito Federal</option>
                    <option value="ES ">Espírito Santo</option>
                    <option value="GO ">Goiás</option>
                    <option value="MA ">Maranhão</option>
                    <option value="MT ">Mato Grosso</option>
                    <option value="MS ">Mato Grosso do Sul</option>
                    <option value="MG ">Minas Gerais</option>
                    <option value="PA ">Pará</option>
                    <option value="PB ">Paraíba</option>
                    <option value="PR ">Paraná</option>
                    <option value="PE ">Pernambuco</option>
                    <option value="PI ">Piauí</option>
                    <option value="RJ ">Rio de Janeiro</option>
                    <option value="RN ">Rio Grande do Norte</option>
                    <option value="RS ">Rio Grande do Sul</option>
                    <option value="RO ">Rondônia</option>
                    <option value="RR ">Roraima</option>
                    <option value="SC ">Santa Catarina</option>
                    <option value="SP ">São Paulo</option>
                    <option value="SE ">Sergipe</option>
                    <option value="TO ">Tocantins</option>
                </select>
            </div>
            <div class="form-group col-md-4 ">
                <label for="cep ">CEP</label>
                <input type="text " class="form-control " id="cep " name="cep " oninput="mascara_cep(this) " required
                    autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="cargo ">Cargo</label>
                <input type="text " class="form-control " id="cargo " name="cargo " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="setor ">Setor</label>
                <input type="text " class="form-control " id="setor " name="setor " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="hierarquia ">Hierarquia</label>
                <select class="custom-select " id="hierarquia " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="tecnico ">Técnico</option>
                    <option value="professor ">Professor</option>
                </select>
            </div>
            <div class="form-group col-md-6 ">
                <label for="situacao ">Situação</label>
                <select class="custom-select " id="situação " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="ativo ">Ativo</option>
                    <option value="inativo ">Inativo</option>
                </select>
            </div>
            <div class="form-group col-md-4 ">
                <label for="usuario ">Nome de Usuário</label>
                <input type="text " class="form-control " id="usuario " name="usuario " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-4 ">
                <label for="senha ">Senha</label>
                <input type="password " class="form-control " id="senha " name="senha " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-4 ">
                <label for="confirmar-senha ">Confirmar senha</label>
                <input type="password " class="form-control " id="confirmar-senha " name="confirmar-senha " required
                    autocomplete="off ">
            </div>
            <div class="form-group col-md-12 ">
                <label for="obs ">Observações</label>
                <textarea class="form-control " id="obs " name="obs " rows="2 " cols="150 "
                    autocomplete="off "></textarea>
            </div>
            <div class="mt-4">

                <button type="submit" class="btn btn-success" onclick="cadastrar()">Salvar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>

        </div>
    </form>


</div>
<!-- /.container-fluid -->
<script type="text/javascript " src="js/confirmar-senha.js "></script>
<script>
function mascara_cpf(cpf) {

    var v = cpf.value;

    if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
        cpf.value = v.substring(0, v.length - 1);
        return;
    }

    cpf.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) cpf.value += ".";
    if (v.length == 11) cpf.value += "-";

}

function mascara_cep(cep) {

    var v = cep.value;

    if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
        cep.value = v.substring(0, v.length - 1);
        return;
    }

    cep.setAttribute("maxlength", "9");
    if (v.length == 5) cep.value += "-";

}

function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}

function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}

function mascara_telefone(tel) {
    tel = tel.replace(/\D/g, "");
    tel = tel.replace(/^(\d{2})(\d)/g, "($1) $2");
    tel = tel.replace(/(\d)(\d{4})$/, "$1-$2");
    return tel;
}

function ApenasLetras(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        } else if (e) {
            var charCode = e.which;
        } else {
            return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32)
            return true;
        else
            return false;
    } catch (err) {
        alert(err.Description);
    }
}

function ApenasNumeros(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        } else if (e) {
            var charCode = e.which;
        } else {
            return true;
        }
        if ((charCode > 47 && charCode < 58))
            return true;
        else
            return false;
    } catch (err) {
        alert(err.Description);
    }
}
</script>
<?php
    require_once("./rodape.php ");
?>