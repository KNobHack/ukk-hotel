<!--
=========================================================
* Argon Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/argon/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/argon/img/favicon.png">
  <title>
    <?= $title ?? 'Halaman Petugas' ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/assets/argon/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/argon/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/assets/argon/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/argon/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />

  <style>
    .custom-file-button input[type=file] {
      margin-left: -2px !important;
    }

    .custom-file-button input[type=file]::-webkit-file-upload-button {
      display: none;
    }

    .custom-file-button input[type=file]::file-selector-button {
      display: none;
    }

    .custom-file-button:hover label {
      background-color: #dde0e3;
      cursor: pointer;
    }
  </style>

  <?= $this->renderSection('css') ?>
</head>

<body class="g-sidenav-show bg-gray-100">