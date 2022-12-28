<!-- Brand Logo -->
<a href="" class="brand-link">
  <img src="http://localhost/base2/public/lts/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">Sistema de facturación </span>
</a>
<div class="sidebar">
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="{{route('formulario') }}" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Registrar cliente
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="{{url('/articulos') }}" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Registrar articulos
          </p>
        </a>
      </li>
    </ul>
  </nav>
</div>
