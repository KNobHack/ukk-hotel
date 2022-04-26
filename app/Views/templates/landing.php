<!--
=========================================================
* Material Kit 2 - v3.0.1
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?= $this->include('templates/landing/head') ?>

<body class="presentation-page bg-gray-200">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <?= $this->include('templates/landing/navbar') ?>
      </div>
    </div>
  </div>
  <?= $this->renderSection('content') ?>
  <?= $this->include('templates/landing/foot') ?>
</body>

</html>