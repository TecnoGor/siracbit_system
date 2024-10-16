<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/Escuela.jpeg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nombreUsuario'];?></p>
          <p class="app-sidebar__user-designation">Escuela</p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Entrega de Recaudos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" type="button" href=""><i class="icon bi bi-circle-fill"></i>Lista de Recaudos</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm1()"><i class="icon bi bi-circle-fill"></i> Caracterizacion del contenido educativo digitalizado</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm2()"><i class="icon bi bi-circle-fill"></i> Actividades Formativas</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm3()"><i class="icon bi bi-circle-fill"></i> Recursos Educativos</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm4()"><i class="icon bi bi-circle-fill"></i> Planificación del Encuentro Formativo</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm5()"><i class="icon bi bi-circle-fill"></i> Registro Fotografico</a></li>
            <li><a class="treeview-item" type="button" onclick="showForm6()"><i class="icon bi bi-circle-fill"></i> Lista de Asistencias</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="" data-toggle="treeview"><i class="bi bi-gear me-2 fs-5"></i><span class="app-menu__label">Configuracion</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          
          <ul class="treeview-menu">
            <li><a class="treeview-item" type="button" onclick="listUsers()"><i class="icon bi bi-circle-fill"></i>Listar Usuarios</a></li>
          </ul>

        </li>
      </ul>
    </aside>