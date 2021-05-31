<?php
    require_once("./cabecalho.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mb-5">Acompanhar Disponibilidade</h1>
  </div>

  	
  		<div class="text-left float-left"><!-- Inicio do campo de pesquisa -->
  			<div class="input-group mb-3">
  				<div class="input-group-prepend">
    				<span class="input-group-text bg-primary text-white "  id="basic-addon1"><i class="fa fa-search"></i></span>
  				</div>
 				 <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon1" id="myInput">
			</div>
  		</div><!-- Fim do campo de pesquisa -->
  		<div class="btn-group float-right mb-2" role="group" aria-label="Basic example"> <!-- Inicio da filtro de ordenação-->
  			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sort mr-2"></i>Ordenar por</button>
	  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	  				<a class="dropdown-item" onclick="sortTable(0)"  href="#">Codigo</a>
	    			<a class="dropdown-item" onclick="sortTable(1)" href="#">Nome</a>
	   				 <a class="dropdown-item"onclick="sortTable(2)" href="#">Tipo de item</a>
	    			<a class="dropdown-item" onclick="sortTable(3)" href="#">Observação</a>
	  			</div>
  			</div>
  			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-filter mr-2"></i>Filtrar por</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="filter">
  					<a class="dropdown-item" data-filter="Codigo"  href="#">Codigo</a>
	    			<a class="dropdown-item" data-filter="Nome" href="#">Nome</a>
	   				 <a class="dropdown-item" data-filter="Tipo de item"  href="#">Tipo de item</a>
	    			<a class="dropdown-item" data-filter="Observação"  href="#">Observação</a>
	  			</div>
  			</div>
	    </div><!-- Fim dos botões  de filtro e ordem -->
  		
  	
  	
  
  <div class="text-center mt-2 clearfix table-responsive" ><!-- Inicio da tabela -->
  <table class="table table-striped table-hover "  id="myTable">
  	<thead>
  	<tr>
  		<th>Codigo</th>
  		<th>Nome</th>
  		<th>Tipo de item</th>
  		<th>Observação</th>
  	</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<td>1</td>
  			<td>Paulo</td>
  			<td>Ferramenta 1</td>
  			<td>Disponivel</td>
  		</tr>
  		<tr>
  			<td>2</td>
  			<td>Caio</td>
  			<td>Ferramenta 2</td>
  			<td>Indisponivel</td>
  		</tr>
  		<tr>
  			<td>3</td>
  			<td>Maria</td>
  			<td>Ferramenta 3</td>
  			<td>Indisponivel</td>
  		</tr>
  		<tr>
  			<td>4</td>
  			<td>Pablo</td>
  			<td>Ferramenta 4</td>
  			<td>Disponivel</td>
  		</tr>
  		<tr>
  			<td>5</td>
  			<td>Isabela</td>
  			<td>Ferramenta 5</td>
  			<td>Indisponivel</td>
  		</tr>
  		<tr>
  			<td>6</td>
  			<td>Thais</td>
  			<td>Ferramenta 6</td>
  			<td>Indisponivel</td>
  		</tr>
  		<tr>
  			<td>7</td>
  			<td>José</td>
  			<td>Ferramenta 7</td>
  			<td>Indisponivel</td>
  		</tr>
  	</tbody>
  </table><!-- Fim da tabela -->
  <ul class="pagination justify-content-end "><!-- Inicio da paginação -->
  	<li class="page-item">
  	<a href="" class="page-link">Anterior</a>
  	</li>
  	<li class="page-item active">
  		<a href="" class="page-link ">1</a>
  	</li>
  	<li class="page-item">
  		<a href="" class="page-link">Próximo</a>
  	</li>
  </ul><!-- Fim da paginação -->
</div>
</div>
<!-- /.container-fluid -->
<!-- Inicio dos scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> <!-- Fim do script do input de procura -->
<!-- Inicio do script de ordenação -->
<script > 
	function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  
  dir = "asc";
 
  while (switching) {
   
    switching = false;
    rows = table.rows;
  
    for (i = 1; i < (rows.length - 1); i++) {
    
      shouldSwitch = false;
     
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
     
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
         
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script> <!-- Fim do script de ordenação -->
<!-- Fim dos scripts -->
<?php
    require_once("./rodape.php");
?>   