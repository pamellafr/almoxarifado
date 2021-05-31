<!DOCTYPE html>
<html lang="en">
<!-- é nesse arquivo que eu mudo as opções da barra esquerda-->
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> COLAB </title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar ( barra lateral )-->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand ( marca )-->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-campground"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> COLAB </div>
      </a>

      <!-- Divider (linha) -->
      <hr class="sidebar-divider my-0">

      <?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);?> <!-- Pega o nome da pág atual -->

      <!-- Nav Item - Dashboard -->
      <li 
      <?php if($paginaCorrente == 'index.php') 
      {echo 'class="nav-item active"';} ?> class="nav-item">
          <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li
       <?php if($paginaCorrente == 'agendar.php')
       {echo 'class="nav-item active"';} ?> class="nav-item">
           <a class="nav-link" href="agendar.php">
          <i class="far fa-fw fa-calendar-alt"></i>
          <span>Agendar</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li
        <?php
          if($paginaCorrente == 'cadastroUsuario.php' || 
                $paginaCorrente == 'cadastroFornecedor.php' || 
                $paginaCorrente == 'cadastroReagente.php' || 
                $paginaCorrente == 'cadastroMaterial.php' || 
                $paginaCorrente == 'cadastroFerramenta.php'||
                $paginaCorrente == 'cadastroAutorizacao.php') 
            {echo 'class="nav-item active"';} 
        ?> class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <i class="far fa-fw fa-plus-square"></i>
          <span>Cadastrar</span>
        </a>

        <div id="collapse1"
          <?php
            if($paginaCorrente == 'cadastroUsuario.php' || 
                $paginaCorrente == 'cadastroFornecedor.php' || 
                $paginaCorrente == 'cadastroReagente.php' || 
                $paginaCorrente == 'cadastroMaterial.php' || 
                $paginaCorrente == 'cadastroFerramenta.php'||
                $paginaCorrente == 'cadastroAutorizacao.php') 
              {echo 'class="collapse show"';}
          ?>
          class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <a <?php if($paginaCorrente == 'cadastroUsuario.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="cadastroUsuario.php">Usuario</a>

            <a <?php if($paginaCorrente == 'cadastroFornecedor.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="cadastroFornecedor.php">Fornecedor</a>

            <a <?php if($paginaCorrente == 'cadastroReagente.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="cadastroReagente.php">Reagente</a>

            <a <?php if($paginaCorrente == 'cadastroMaterial.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="cadastroMaterial.php">Material</a>

            <a <?php if($paginaCorrente == 'cadastroFerramenta.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="cadastroFerramenta.php">Ferramenta</a>

            <a <?php if($paginaCorrente == 'cadastroAutorizacao.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="cadastroAutorizacao.php">Autorizações</a>

          </div>
        </div>
      </li>

      <li
        <?php
          if($paginaCorrente == 'estoqueEmprestimo.php' || 
              $paginaCorrente == 'estoqueDevo.php') 
            {echo 'class="nav-item active"';} 
        ?> class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          <i class="fas fa-fw fa-table"></i>
          <span>Empréstimo/Devolução</span>
        </a>
        <div id="collapse2" 
          <?php
            if($paginaCorrente == 'estoqueEmprestimo.php' ||  
                $paginaCorrente == 'estoqueDevo.php') 
              {echo 'class="collapse show"';} 
          ?> 
          class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            

            <a <?php if($paginaCorrente == 'estoqueEmprestimo.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="estoqueEmprestimo.php">Empréstimos</a>

            <a <?php if($paginaCorrente == 'estoqueDevo.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="estoqueDevo.php">Devoluções</a>

          </div>
        </div>
      </li>
      
      <li
        <?php
          if($paginaCorrente == 'estoqueQuimicaInfo.php'||
              $paginaCorrente == 'estoqueEstoque.php') 

            {echo 'class="nav-item active"';} 
        ?> class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
          <i class="fas fa-fw fa-table"></i>
          <span>Estoque</span>
        </a>
        <div id="collapse3" 
          <?php
            if($paginaCorrente == 'estoqueQuimicaInfo.php'||
              $paginaCorrente == 'estoqueEstoque.php') 
              {echo 'class="collapse show"';} 
          ?> 
          class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            

            <a <?php if($paginaCorrente == 'estoqueQuimicaInfo.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="estoqueQuimicaInfo.php">Estoque Química</a>
            <!-- planilha relatório, estoque remanescente quer dizer que já é com as baixas  -->

             <a <?php if($paginaCorrente == 'estoqueEstoque.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="estoqueEstoque.php">Estoque Geral</a>



          </div>
        </div>
      </li>
       <li
        <?php
          if($paginaCorrente == 'estoqueRemover.php'||
              $paginaCorrente == 'estoqueQuimicaBaixas.php') 
            {echo 'class="nav-item active"';} 
        ?> class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
          <i class="fas fa-fw fa-table"></i>
          <span>Baixas do Estoque</span>
        </a>
        <div id="collapse4" 
          <?php
            if($paginaCorrente == 'estoqueRemover.php'||
              $paginaCorrente == 'estoqueQuimicaBaixas.php') 
              {echo 'class="collapse show"';} 
          ?> 
          class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            

            <a <?php if($paginaCorrente == 'estoqueQuimicaBaixas.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="estoqueQuimicaBaixas.php">Baixas Estoque Química</a>
            <!-- planilha relatório, estoque remanescente quer dizer que já é com as baixas  -->

             <a <?php if($paginaCorrente == 'estoqueRemover.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="estoqueRemover.php">Baixas Estoque Geral</a>



          </div>
        </div>
      </li>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li
        <?php
          if($paginaCorrente == 'acompanhaFalha.php' || 
             $paginaCorrente == 'acompanharIndicativo.php' ||
              $paginaCorrente == 'acompanhaAgenda.php' || 
              $paginaCorrente == 'acompanhaDisponivel.php') 
            {echo 'class="nav-item active"';} 
        ?> class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Acompanhar</span>
        </a>
        <div id="collapse5"
        <?php
          if( $paginaCorrente == 'acompanhaFalha.php' || 
              $paginaCorrente == 'acompanharIndicativo.php' ||
              $paginaCorrente == 'acompanhaAgenda.php' || 
              $paginaCorrente == 'acompanhaDisponivel.php') 
            {echo 'class="collapse show"';} 
        ?>
        class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a <?php if($paginaCorrente == 'acompanhaFalha.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="acompanhaFalha.php">Falha dos equipamentos</a>

            <a <?php if($paginaCorrente == 'acompanharIndicativo.php') {echo 'class="collapse-item active"';} ?>class="collapse-item" href="acompanharIndicativo.php">Indicativo de compras</a>

            <a <?php if($paginaCorrente == 'acompanhaAgenda.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="acompanhaAgenda.php">Agendamento</a>

            <a <?php if($paginaCorrente == 'acompanhaDisponivel.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="acompanhaDisponivel.php">Disponibilidade</a>

          </div>
        </div>
      </li>
      <!-- criando uma aba relatório 25/05 estilo acompanhar-->
      <li
        <?php
          if ($paginaCorrente == 'relatorioExtensão.php' || 
              $paginaCorrente == 'relatorioPesquisa.php' || 
              $paginaCorrente == 'relatorioCDPC.php' || 
              $paginaCorrente == 'relatorioFornecedores.php'||
              $paginaCorrente == 'relatorioAutorizados.php'||
            $paginaCorrente == 'estoqueRelatorio.php') 
            {echo 'class="nav-item active"';} 
        ?> class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
          <i class="far fa-fw fa-list-alt"></i>
          <span>Relatórios</span>
        </a>
        <div id="collapse6"
        <?php
          if( $paginaCorrente == 'relatorioExtensão.php' || 
              $paginaCorrente == 'relatorioPesquisa.php' || 
              $paginaCorrente == 'relatorioCDPC.php' || 
              $paginaCorrente == 'relatorioFornecedores.php'||
              $paginaCorrente == 'relatorioAutorizados.php') 
            {echo 'class="collapse show"';} 
        ?>
        class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a <?php if($paginaCorrente == 'relatorioExtensão.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="relatorioExtensão.php">Extensão</a>

            <a <?php if($paginaCorrente == 'relatorioPesquisa.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="relatorioPesquisa.php">Pesquisa</a>

            <a <?php if($paginaCorrente == 'relatorioCDPC.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="relatorioCDPC.php">CDPC</a>

            <a <?php if($paginaCorrente == 'relatorioFornecedores.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="relatorioFornecedores.php">Fornecedores</a>

            <a <?php if($paginaCorrente == 'relatorioAutorizados.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="relatorioAutorizados.php">Autorizados</a>

            <a <?php if($paginaCorrente == 'estoqueRelatorio.php') {echo 'class="collapse-item active"';} ?> class="collapse-item" href="estoqueRelatorio.php">Relação de empréstimo</a>

          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li <?php if($paginaCorrente == 'comunicaFalha.php') {echo 'class="nav-item active"';} ?> class="nav-item">
        <a class="nav-link" href="comunicaFalha.php">
          <i class="fas fa-fw fa-bug"></i>
          <span>Feedback Falhas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->