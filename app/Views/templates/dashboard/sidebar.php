<?php
$path = \Config\Services::request()->getPath();
?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
      <img src="/assets/argon/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold"><?= APP_NAME ?></span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main" style="height: fit-content;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= ($path == 'dashboard') ? 'active' : '' ?>" href="/dashboard">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($path == 'kamar') ? 'active' : '' ?>" href="/kamar">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Kamar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($path == 'fasilitas-hotel') ? 'active' : '' ?>" href="/fasilitas-hotel">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-building text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Fasilitas Hotel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($path == 'tipe-kamar') ? 'active' : '' ?>" href="/tipe-kamar">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tag text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Tipe Kamar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-user-run text-danger text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">logout</span>
        </a>
      </li>
    </ul>
  </div>
</aside>