<!-- /. NAV TOP  -->
{{-- <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center">
            <img src="{{ asset ('assets/img/find_user.png') }}" class="user-image img-responsive"/>
            </li>
        
            
            <li>
                <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
             <li>
                <a  href="{{ route('karyawans.index') }}"><i class="fa fa-user fa-3x"></i> Data Karyawan</a>
            </li>
            <li>
                <a  href="{{ route('jabatans.index') }}"><i class="fa fa-briefcase fa-3x"></i> Jabatan</a>
            </li>
            <li>
                <a   href="{{ route('pendidikans.index') }}"><i class="fa fa-book fa-3x"></i> Pendidikan</a>
            </li>	
              <li  >
                <a  href="{{ route('statuses.index') }}"><i class="fa fa-paperclip fa-3x"></i> Status</a>
            </li>
        </ul>
    </div>
</nav> --}}


    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="{{ route('karyawans.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Data Karyawan
                        </a>
                        <a class="nav-link" href="{{ route('jabatans.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Jabatan
                        </a>
                        <a class="nav-link" href="{{ route('pendidikans.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pendidikan
                        </a>
                        <a class="nav-link" href="{{ route('statuses.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Status
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
    </div>