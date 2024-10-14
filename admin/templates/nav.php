<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nombreUsuario'];?></p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Entrega de Recaudos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" type="button" onclick="listRecaudos()"><i class="icon bi bi-circle-fill"></i>Lista de Recaudos</a></li>
            <!-- <li><a class="treeview-item" type="button" onclick="showForm1()"><i class="icon bi bi-circle-fill"></i> Caracterizacion del contenido educativo digitalizado</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm2()"><i class="icon bi bi-circle-fill"></i> Actividades Formativas</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm3()"><i class="icon bi bi-circle-fill"></i> Recursos Educativos</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm4()"><i class="icon bi bi-circle-fill"></i> Planificación del Encuentro Formativo</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm5()"><i class="icon bi bi-circle-fill"></i> Registro Fotografico</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm6()"><i class="icon bi bi-circle-fill"></i> Lista de Asistencias</a></li> -->
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="" data-toggle="treeview"><i class="bi bi-gear me-2 fs-5"></i><span class="app-menu__label">Configuracion</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          
          <ul class="treeview-menu">
            <li><a class="treeview-item" type="button" onclick="listUsers()"><i class="icon bi bi-circle-fill"></i>Listar Usuarios</a></li>
            <li><a class="treeview-item" type="button" onclick="listEscuelas()"><i class="icon bi bi-circle-fill"></i>Listar Escuelas</a></li>
          </ul>

        </li>
       <!--  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon bi bi-circle-fill"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon bi bi-circle-fill"></i> Data Tables</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-file-earmark"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon bi bi-circle-fill"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon bi bi-circle-fill"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon bi bi-circle-fill"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon bi bi-circle-fill"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon bi bi-circle-fill"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon bi bi-circle-fill"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon bi bi-circle-fill"></i> Error Page</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon bi bi-code-square"></i><span class="app-menu__label">Docs</span></a></li> -->

       

      </ul>
    </aside>