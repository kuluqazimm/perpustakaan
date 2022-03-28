<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light bg-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('daftarBuku')}}" class="nav-link">Data Buku</a>
        </li>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('daftarAnggota')}}" class="nav-link">Daftar Anggota</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </button>
            </div>
        </div>
    </form> 

    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
    </ul>
</nav>
<!-- /.navbar -->