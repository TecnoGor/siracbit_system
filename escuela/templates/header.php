<?php

  session_start();

  if(empty($_SESSION['activeSchool'])) {
    header('Location: ../');
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="SIRACBIT">
    <title>SIRACBIT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/Icon_logo.png" type="image/x-icon">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">SIRACBIT</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Buscar">
          <button class="app-search__button"><i class="bi bi-search"></i></button>
        </li>
        
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i> Opciones</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="../logout.php"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </header>

<?php require_once 'nav.php';?>