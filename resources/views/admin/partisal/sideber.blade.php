<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Users
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.user.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Users Table</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/charts/flot.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Flot</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/charts/inline.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inline</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/charts/uplot.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>uPlot</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            Food Menu
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.food.list')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Food List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.food.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Food Create</p>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Reservation
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('reservation.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Show Reservation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/forms/advanced.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Advanced Elements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/forms/editors.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Editors</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/forms/validation.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Validation</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
           Our Team
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('ourteam.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Team List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ourteam.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Create Team Mamber/Team</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/tables/jsgrid.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>jsGrid</p>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
