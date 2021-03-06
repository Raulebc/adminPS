<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <ul class="side-menu">
          <li @if($page=="home") class="active" @endif>
              <a href="{{url('/')}}"><i class="sidebar-item-icon ti-home"></i>
                  <span class="nav-label">Inicio</span>
              </a>
          </li>
          <li @if($page=="students") class="active" @endif>
              <a href="{{url('/students')}}"><i class="sidebar-item-icon ti-id-badge"></i>
                  <span class="nav-label">Alumnos</span>
              </a>
          </li>
          <li @if($page=="blocks") class="active" @endif>
              <a href="{{url('/blocks')}}"><i class="sidebar-item-icon  ti-calendar "></i>
                  <span class="nav-label">Clases</span>
              </a>
          </li>
          <li @if($page=="payments") class="active" @endif>
              <a href="{{url('/reports')}}"><i class="sidebar-item-icon ti-bar-chart"></i>
                  <span class="nav-label">Reportes</span>
              </a>
          </li>
          {{-- <li @if($page=="mercados") class="active" @endif>
              <a href="mercado.html"><i class="sidebar-item-icon ti-clipboard"></i>
                  <span class="nav-label">Planes</span>
              </a>
          </li> --}}

          <li @if($page=="messages") class="active" @endif>
              <a href="{{url('/messages')}}"><i class="sidebar-item-icon ti-email"></i>
                  <span class="nav-label">Mensajeria</span>
              </a>
          </li>

          <li @if($page=="config") class="active" @endif>
              <a href="javascript:;"><i class="sidebar-item-icon ti-settings"></i>
                  <span class="nav-label">Configuracion<br /> del box</span>
              </a>
              <div class="nav-2-level">
                            <ul>

                                <li>
                                    <a href="form_layouts.html">Centro deportivo</a>
                                </li>
                                <li>
                                    <a href="form_advanced.html">Roles y usuarios</a>
                                </li>
                                <li>
                                    <a href="form_masks.html">Planes</a>
                                </li>
                                <li>
                                    <a href="form_masks.html">Facturacion</a>
                                </li>
                            </ul>
                        </div>
          </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
