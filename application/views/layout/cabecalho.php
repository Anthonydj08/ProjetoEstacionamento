<!DOCTYPE html>

<html>

<head>
    <title>Estacionamento</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />


    <link rel="stylesheet" href="/bootstrap2/assets/css/material-dashboard.css" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
</head>

<body>

    
    <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="/inicio" class="simple-text logo-mini">
            <img style="height: 60px;" src="/imagens/logo.png" alt="Minha Figura">	
        </a>
        <a href="/inicio" class="simple-text logo-normal">
            Estacionamento
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "inicio"){echo ' active';} ?> ">
            <a class="nav-link" href="/inicio">
              <i class="material-icons">dashboard</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "PessoaListar"){echo ' active';} ?> ">
            <a class="nav-link" href="PessoaListar">
              <i class="material-icons">person</i>
              <p>Pessoas</p>
            </a>
          </li>
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "VeiculoListar"){echo ' active';} ?> ">
            <a class="nav-link" href="VeiculoListar">
              <i class="material-icons">directions_car</i>
              <p>Veículos</p>
            </a>
          </li>
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "VagaListar"){echo ' active';} ?> ">
            <a class="nav-link" href="VagaListar">
              <i class="material-icons">local_parking</i>
              <p>Vagas</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link">
                  <i class="material-icons">notifications</i> Notificações
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
        

