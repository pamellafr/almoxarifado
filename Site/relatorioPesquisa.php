<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid" >

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pesquisa</h1>
  </div>
  
  <!-- Inicio dda barra de pesquisa -->
 <form class="form-inline">
	<div class="form-group mb-2">
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
   			 <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa fa-search text-white"></i></span>
 			 </div>
  			<input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon1" id="campo" value="" onfocus="limpar()">
		</div>

	</div>

	<div>
		
	</div>
 </form><!--Fim da barra de pesquisa -->

<!-- Inicio da tabela -->
<div class="mt-3" style="height: 300px; overflow: auto;position: relative; display: block;">

<table class="table table-striped table-fluid table-hover" >
	<thead>
		<tr>
    <th scope="col">Nome do produto</th>
    <th scope="col">Unidade de medida (mg/kg)</th>
    <th scope="col">Quantidade (potes/embalagens)</th>
    <th scope="col">Fórmula Química</th>
    <th scope="col">Concentração (opcional)</th>
    <th scope="col"> Orgão fiscalizadores</th>
    <th scope="col"> Marca</th>
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
-->
      <!-- Botão de x <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button> --></td>
  	</tr>
  	<tr>
      <!--
	<th  scope="row">2</th>
      <td>Bequer</td>
      <td>10</td>
      <td><input type="number" class="form-group" placeholder="Quantidade"></td>
      <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button></td>
  	</tr>
  	<tr>
	<th  scope="row">3</th>
      <td>Cadeira</td>
      <td>13</td>
      <td><input type="number" class="form-group" placeholder="Quantidade"></td>
      <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button></td>
  	</tr>
  	<tr>
	<th  scope="row">4</th>
      <td>Cabos</td>
      <td>8</td>
      <td><input type="number" class="form-group" placeholder="Quantidade" ></td>
      <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button></td>
  	</tr>
  	<tr>
	<th  scope="row">5</th>
      <td>Computador</td>
      <td>3</td>
      <td><input type="number" class="form-group" placeholder="Quantidade"></td>
      <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button></td>
  	</tr>
	</tbody>
</table>
</div> <!-- fim tabela--> 

<!-- Metodos -->

 <div class="mt-4">

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalsucesso" onclick="limpar()" >Salvar</button>
            <button type="reset" class="btn btn-danger" onclick="limpar()">Cancelar</button>

  
  </div>
<!-- Fim dos metodos -->
<!-- Modal -->
<div class="modal fade" id="modalsucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="modalsucesso">Alterações Salvas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        As alterações foram salvas 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div><!-- Fim do modal -->

</div>
<!-- /.container-fluid -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
  $("#campo").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabela tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function limpar(){
	document.getElementById('campo').value = ""
	
}

$('#modalsucesso').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<?php
    require_once("./rodape.php");
?> 