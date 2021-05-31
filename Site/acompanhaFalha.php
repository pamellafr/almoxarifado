<?php
    require_once("./cabecalho.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" style="font-weight: bold;">Acompanhar Falha</h1>
    </div>
    <div class="input-group mb-4">
      <input type="text" class="form-control" placeholder="Pesquisar falha" aria-label="pesquisa falha"
        aria-describedby="button-addon2">
      <div class="input-group-append">
        <button type="button" class="btn btn-primary btn-sm">Pesquisar</button>
      </div>
    </div>
    
    <!-- Ordena-->
    <div class="dropdown mb-4">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img height="20" src="./img/order.svg">
        Ordenar por
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Nome</a>
        <a class="dropdown-item" href="#">Email</a>
        <a class="dropdown-item" href="#">Local</a>
        <a class="dropdown-item" href="#">Objeto</a>
        <a class="dropdown-item" href="#">Descrição</a>
        <a class="dropdown-item" href="#">Status</a>
      </div>
    </div>

    <!--Filtra-->
      <div class="dropdown mb-4">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" >
          <img height="20" src="./img/search.svg">
          Filtrar por
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Nome</a>
          <a class="dropdown-item" href="#">Email</a>
          <a class="dropdown-item" href="#">Local</a>
          <a class="dropdown-item" href="#">Objeto</a>
          <a class="dropdown-item" href="#">Descrição</a>
          <a class="dropdown-item" href="#">Status</a>
        </div>
      </div>

    <table class="table">
      <thead class="thead-light">
        <tr>
          <!--nome, e-mail, local, Objeto com falha, Descrição, visualizado ou não-->
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Local</th>
          <th scope="col">Objeto com falha</th>
          <th scope="col">Descrição</th>
          <th scope="col">Status</th>
          <th scope="col" width="5">Selecionar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>mark@gmail.com</td>
          <td>Lab Acionamentos</td>
          <td>Motor CC</td>
          <td>Quebrado</td>
          <td>Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>jacob@gmail.com</td>
          <td>Lab III</td>
          <td>Computador 23</td>
          <td>Computador não liga</td>
          <td>Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>larry@gmail.com</td>
          <td>Lab IV</td>
          <td>Monitor do computador 02</td>
          <td>Monitor não liga</td>
          <td>Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Antonio</td>
          <td>antonio@gmail.com</td>
          <td>Lab Quimica</td>
          <td>Bico de Bounsen</td>
          <td>Não acende</td>
          <td>Não Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Isa</td>
          <td>isa@gmail.com</td>
          <td>Lab de Hardware</td>
          <td>Computador 04</td>
          <td>Computador não liga, só apita</td>
          <td>Não Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Caio</td>
          <td>caio@gmail.com</td>
          <td>Lab de Desenho</td>
          <td>Mesa 20</td>
          <td>Mesa torta</td>
          <td>Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Mateus</td>
          <td>mateus@gmail.com</td>
          <td>Lab de Biologia</td>
          <td>Microscópio 02</td>
          <td>Lente quebrada</td>
          <td>Visualizado</td>
          <td><input type="checkbox" aria-label="selecionar"></td>
        </tr>
      </tbody>
    </table>
  <button type="button" class="btn btn-success mb-4">Salvar</button>
  <button type="button" class="btn btn-danger mb-4">Excluir</button>
  <button type="button" class="btn btn-warning mb-4">Resolver falha</button>
  <div class="alert alert-success" role="alert">
    Mantenha as falhas sempre atualizadas!
  </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

  <?php
    require_once("./rodape.php");
  ?>