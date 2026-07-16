<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Punto Express | Panel Administrador</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../public/css/font-awesome.css">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="../../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../public/css/_all-skins.min.css">

    <!-- Iconos -->
    <link rel="apple-touch-icon" href="../../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../public/img/favicon.ico">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="../../public/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/datatables/responsive.dataTables.min.css">

    <!-- Select -->
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap-select.min.css">
  </head> 

<body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="escritorio.php" class="logo">
        <span class="logo-mini"><b>PE</b></span>
        <span class="logo-lg"><b>Punto</b> Express</span>
      </a>

      <!-- Barra superior -->
      <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Navegación</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- Usuario -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../public/dist/img/user2-160x160.jpg" class="user-image" alt="Usuario">
                <span class="hidden-xs">Administrador</span>
              </a>

              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="../../public/dist/img/user2-160x160.jpg" class="img-circle" alt="Usuario">

                  <p>
                    Punto Express
                    <small>Panel de administración</small>
                  </p>
                </li>

                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Cerrar sesión</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>

      </nav>
    </header>

    <!-- Menú lateral -->
    <aside class="main-sidebar">
      <section class="sidebar">

        <ul class="sidebar-menu">

          <li class="header">MENÚ PRINCIPAL</li>

          <li>
            <a href="escritorio.php">
              <i class="fa fa-dashboard"></i> 
              <span>Inicio</span>
            </a>
          </li>

          <!-- Personas -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Personas</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <li>
                <a href="cliente.php">
                  <i class="fa fa-circle-o"></i> Clientes
                </a>
              </li>

              <li>
                <a href="proveedor.php">
                  <i class="fa fa-circle-o"></i> Proveedores
                </a>
              </li>

              <li>
                <a href="empleado.php">
                  <i class="fa fa-circle-o"></i> Empleados
                </a>
              </li>
            </ul>
          </li>

          <!-- Usuarios -->
          <li>
            <a href="usuario.php">
              <i class="fa fa-user"></i>
              <span>Usuarios</span>
            </a>
          </li>

          <!-- Productos -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-basket"></i>
              <span>Productos</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <li>
                <a href="categoria.php">
                  <i class="fa fa-circle-o"></i> Categorías
                </a>
              </li>

              <li>
                <a href="marca.php">
                  <i class="fa fa-circle-o"></i> Marcas
                </a>
              </li>

              <li>
                <a href="articulo.php">
                  <i class="fa fa-circle-o"></i> Artículos
                </a>
              </li>
            </ul>
          </li>

          <!-- Compras -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-truck"></i>
              <span>Compras</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <li>
                <a href="ingreso.php">
                  <i class="fa fa-circle-o"></i> Ingresos
                </a>
              </li>
            </ul>
          </li>

          <!-- Ventas y pedidos -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Ventas y pedidos</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <li>
                <a href="venta.php">
                  <i class="fa fa-circle-o"></i> Ventas
                </a>
              </li>

              <li>
                <a href="pedido.php">
                  <i class="fa fa-circle-o"></i> Pedidos online
                </a>
              </li>

              <li>
                <a href="devolucion.php">
                  <i class="fa fa-circle-o"></i> Devoluciones
                </a>
              </li>
            </ul>
          </li>

          <!-- Tienda online -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Tienda online</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <li>
                <a href="oferta.php">
                  <i class="fa fa-circle-o"></i> Ofertas
                </a>
              </li>

              <li>
                <a href="configuracion.php">
                  <i class="fa fa-circle-o"></i> Configuración
                </a>
              </li>
            </ul>
          </li>

          <!-- Reportes -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-bar-chart"></i>
              <span>Reportes</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <li>
                <a href="consultaventas.php">
                  <i class="fa fa-circle-o"></i> Reporte de ventas
                </a>
              </li>

              <li>
                <a href="consultacompras.php">
                  <i class="fa fa-circle-o"></i> Reporte de compras
                </a>
              </li>

              <li>
                <a href="reportestock.php">
                  <i class="fa fa-circle-o"></i> Reporte de stock
                </a>
              </li>
            </ul>
          </li>

        </ul>

      </section>
    </aside>