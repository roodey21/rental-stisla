<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
          <li class=""><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
        <li class="menu-header">Data Barang</li>
          <li class=""><a class="nav-link" href="{{ route('admin.product') }}"><i class="fas fa-columns"></i> <span>Produk</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('admin.category') }}"><i class="fas fa-th"></i> <span>Kategori</span></a></li>
        <li class="menu-header">Data Member</li>
          <li class=""><a class="nav-link" href="{{ route('admin.brand') }}"><i class="far fa-file-alt"></i> <span>Member</span></a></li>
        <li class="menu-header">Atribut Barang</li>
          <li class=""><a class="nav-link" href="{{ route('admin.brand') }}"><i class="fas fa-plug"></i> <span>Brand</span></a></li>
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>
  </aside>
</div>