<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header d-sm-flex justify-content-between mb-3">
        <h1 class="h2 mb-0 text-gray-800 align-baseline"><strong>Autorizações de alunos ou servidores</strong></h1>
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
                <label for="identificacao ">Identificação :Servidores (Nº SIAPE) / Alunos (Nº de Matrícula)</label>
                <input type="text " class="form-control " id="identificacao " name="identificacao "
                    onkeypress="return ApenasNumeros(event,this)" required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="email ">Email do aluno ou servidor</label>
                <input type="email " class="form-control " id="email " name="email " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="sexo ">Sobre você</label>
                <select class="custom-select " id="sexo " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="pesquisanrelacionada">Sou professor de Pesquisa de Outra área relacionada ao setor</option>
                    <option value="pesquisarelacionada">Sou professor de Pesquisa de Área diretamente relacionada ao setror</option>
                    <option value="ensinosemcorrelacao">Sou professor de Ensino de outra Área sem correlação com o setror</option>
                    <option value="ensinomateria">Sou professor de Ensino de matéria diretamente dependente e ligada ao setor</option>
                    <option value="TAE">Sou TAE OU chefe imediato de um setor</option>
                </select>
            </div>
            <div class="form-group col-md-6 ">
                <label for="setor ">Curso do aluno ou do Setor do servidor</label>
                <input type="text " class="form-control " id="cursosetor " name="curso/setor " required autocomplete=“off”>
            </div>
            <div class="form-group col-md-6 ">
                <label for="hierarquia ">Sobre a pessoa que você quer autorizar</label>
                <select class="custom-select " id="hierarquia " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="tecnico ">Aluno de pesquisa de Área não relacionada</option>
                    <option value="professor ">Aluno de Ensino para matéria sem correlação direta</option>
                    <option value="professor ">Aluno de pesquisa de Área diretamente relacionada</option>
                    <option value="professor ">Aluno de Ensino para Máteria diretamente correlacionada</option>
                     <option value="professor ">Servidor terceirizado ligado aos serviços de infraestrutura </option>
                      <option value="professor "> Solicitar acesso para mim</option>
                </select>
            </div>
            <div class="form-group col-md-6 ">
                <label for="hierarquia ">Finalidade de uso</label>
                <select class="custom-select " id="hierarquia " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="ensino">Ensino</option>
                    <option value="pesquisa">Pesquisa</option>
                    <option value="entensao">Extensão</option>
                    <option value="infraestrutura">Infraestrutura</option>
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