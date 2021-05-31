<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid" >

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Baixa Química</h1>
  </div>

<!-- Inicio da tabela -->
<div class="mt-3" style="height: 300px; overflow: auto;position: relative; display: block;">

<form action="index.php" method="get">
        <div class="form-row">
     <div class="form-group col-md-6 ">
                <label for="sexo">Tipo de material</label>
                <select class="custom-select " id="sexo " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <!-- Aqui vai ficar as opções que vem do php do estoque -->
                    <option value="masculino ">Consumível</option>
                    <option value="feminino "> Permanente</option>
                </select>
            </div>
       <div class="form-group col-md-6 ">
                <label for="sexo ">Equipamento / material</label>
                <select class="custom-select " id="sexo " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <!-- esses equipamentos e materiais são os que estão em estoque -->
                    <option value="masculino ">ALCOOL ISOPROPÍLICO FRASCO 1 L</option>
                    <option value="masculino ">ALICATE AMPERÍMETRO DIGITAL</option>
                    <option value="masculino ">BATERIA CAPACITIVA 50F / 22AH -PYLE LINK</option>
                     <option value="masculino ">KIT LEGO PRINCIPAL – EV3 (KLB-0006)</option>
                </select>
            </div>   
            <div class="form-group col-md-6 ">
                <label for="sexo ">Descritivo</label>
                <select class="custom-select " id="sexo " required autocomplete=“off”>
                    <option disabled selected>Selecione uma opção...</option>
                    <!-- esses equipamentos e materiais são os que estão em estoque -->
                    <option value="masculino ">Recuperado</option>
                    <option value="masculino ">Quebrado ou Imobilizado</option>
                </select>
            </div>   
          <div class="form-group  col-md-6  ">
                <label for="numero ">Patrimonio / Quantidade</label>
                <!-- aqui vai depender de qual material ou equipamento é para dar as opções-->
                <input type="number " class="form-control " id="numero " name="numero "
                    onkeypress="return ApenasNumeros(event,this)" required autocomplete=“off”>
            </div>   
          <div class="form-group  col-md-6  ">
                <label for="bairro ">Observações</label>
                <input type="text " class="form-control " id="bairro " name="bairro "
                    onkeypress="return ApenasLetras(event,this)" required autocomplete=“off”>
            </div>  
           <div class="form-group  col-md-6 ">
            <label for="data">Data da baixa</label>
            <input type="date" class="form-control" id="data">
             </div>

        </div>
    </form>
      <!-- Botão de x <td><button class="btn btn-danger btn-md " ><i class="fas fa-times"></i></button> 
    
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
</div> fim tabela--> 

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