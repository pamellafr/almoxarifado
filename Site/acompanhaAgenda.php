<?php
require_once("./cabecalho.php");
?>
<style >
	.table-hover > tbody > tr: hover{
		background-color: #ccc;
		color: #ccc;
	}
	.table-striped{
		color : black;
	}
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h1 mb-0 text-gray-800" style="font-weight: bold;">Acompanhamento de Agenda
			<i class = "w-30 p-3 fa fa-calendar-week"></i> </h1>
		</div>

		<div class="input-group-append" style="width: 60%" !important;>
			<input id="input" type="text" class="form-control" placeholder="Pesquisar Agendamento" aria-label="Pesquisar Agendamento	"aria-describedby="button-addon2">
			<button type="button" class="btn btn-primary btn-sm" style="width: 150px;height: 35px;"><i class="fa fa-search"></i>Pesquisar
			</button>
		</div><br><br>

		<!--Botão de Ordenar-->
		<div class="dropdown mb-4">
			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderButton" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
			<i style="color: white" class="fa fa-search"></i>
			Ordenar por
		</button>

		<div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
			<a class="dropdown-item" onclick="sortTable(0)" href="#">Usuário</a>
			<a class="dropdown-item" onclick="sortTable(1)" href="#">Sala</a>
			<a class="dropdown-item" onclick="sortTable(2)" href="#">Data</a>
			<a class="dropdown-item" onclick="sortTable(3)" href="#">Hora</a>
			<a class="dropdown-item" onclick="sortTable(4)" href="#">Observações</a>
			<a class="dropdown-item" onclick="sortTable(5)" href="#">Item</a>
		</div>

		<!--Botão do Filtro-->  
		<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownOrderButton" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
			<i style="color: white" class="fa fa-filter"></i>
			Filtrar por
		</button>

		<div class="dropdown-menu" aria-labelledby="dropdownOrderButton">
			<a class="dropdown-item" href="#">Usuário</a>
			<a class="dropdown-item" href="#">Sala</a>
			<a class="dropdown-item" href="#">Data</a>
			<a class="dropdown-item" href="#">Hora</a>
			<a class="dropdown-item" href="#">Observações</a>
			<a class="dropdown-item" href="#">Item</a>
		</div>
	</div>

	<div style="overflow: auto;width:100%; height: 500px; border:solid 1px"> 
		<table id="table" class="table table-striped table-hover table-bordered">
			<thead class="thead-dark table table-hover">
				<tr>
					<div class="col-md-12">
						<th scope="col">ID </th>
						<th scope="col">Usuário </th>
						<th scope="col">Sala </th>
						<th scope="col">Data </th>
						<th scope="col">Hora </th>
						<th scope="col">Itens </th>
						<th scope="col">Observação</th>
						<th scope="col">Ação</th>
					</div>
				</tr>

			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Miguel</td>
					<td>Lab.Eletrônica</td>
					<td>25/06/2020</td>
					<td>13:00</td>
					<td>Jogo de Alicate</td>
					<td>Emprestado</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">2</th>
					<td>Pedro</td>
					<td>Lab.Biologia</td>
					<td>23/06/2020</td>
					<td>13:00</td>
					<td>Kit Anatomia </td>
					<td>Pesquisa</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">3</th>
					<td>Maria</td>
					<td>Lab.Eletônica </td>
					<td>23/06/2020</td>
					<td>18:00</td>
					<td>Osciloscópio</td>
					<td> Projeto </td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">4</th>
					<td>Matheus</td>
					<td>Lab.Circuitos</td>
					<td>29/06/2020</td>
					<td>14:00</td>
					<td>Arduino</td>
					<td> emprestado para projeto </td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">5</th>
					<td>Caio</td>
					<td>Lab. Química</td>
					<td>23/05/2020</td>
					<td>13:00</td>
					<td>Becker</td>
					<td> 3 itens emprestado</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">6</th>
					<td>João</td>
					<td>Lab III</td>
					<td>6/08/2020</td>
					<td>09:00</td>
					<td>1 Computador</td>
					<td> Emprestado</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">7</th>
					<td>Jádyla</td>
					<td>Lab. Química</td>
					<td>01/10/2020</td>
					<td>14:00</td>
					<td>Capela</td>
					<td>Emprestado para Projeto </td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">8</th>
					<td>Isabelly</td>
					<td>Laboratório de Eletrônica</td>
					<td>20/06/2020</td>
					<td>14:00</td>
					<td>Multímetro</td>
					<td>Trabalho</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">9</th>
					<td>Vitória</td>
					<td>Lab.Biologia</td>
					<td>25/06/2020</td>
					<td>13:00</td>
					<td>Microscópio Óptico</td>
					<td>Pesquisa</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">10</th>
					<td>Letícia</td>
					<td>Lab.Eletrônica</td>
					<td>01/06/2020</td>
					<td>15:00</td	>
					<td>Pinças para SMD</td>
					<td>Projeto</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">11</th>
					<td>Benjamin</td>
					<td>Lab.Química</td>
					<td>29/07/2020</td>
					<td>18:00</td>
					<td>Dessecador</td>
					<td>Pesquisa</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>

				<tr>
					<th scope="row">12</th>
					<td>Larissa</td>
					<td>Lab.Circuitos</td>
					<td>25/06/2020</td>
					<td>13:00</td>
					<td>Resisor</td>
					<td>Projeto</td>
					<td> 
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Excluir</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div> <br><br>	

	<a href="agendar.php"><button type="button" class="btn btn-secondary">Novo Agendamento</button></a>
	<button type="button" class="btn btn-success">Finalizar Agendamento</button>
	
	<!--Jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--Script da pesquisa-->
	<script>
		$(document).ready(function(){
			$("#input").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#table tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script> 

	<!--Script para ordenar -->
	<script > 
		function sortTable(n) {
			var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
			table = document.getElementById("table");
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
				if (shouldSwitch){
					rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					switching = true;
					switchcount ++;
				} else {
					if (switchcount == 0 && dir == "asc") {
						dir = "desc";
						switching = true;
					}
				}
			}
		}
	</script> 

	<?php
	require_once("./rodape.php");
	?> 
