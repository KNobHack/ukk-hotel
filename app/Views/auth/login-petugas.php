<?php
helper('form');
$validation = \Config\Services::validation();
?>
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
    Login
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
</head>

<body class="">
  <!-- <div class="container position-sticky z-index-sticky top-0">
		<div class="row">
			<div class="col-12"> -->
  <!-- Navbar -->
  <!-- <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
					<div class="container-fluid">
						<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/pages/dashboard.html">
							ABC
						</a>
						<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon mt-2">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</span>
						</button>
						<div class="collapse navbar-collapse" id="navigation">
							<ul class="navbar-nav mx-auto">
								<li class="nav-item">
									<a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/pages/dashboard.html">
										<i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
										Dashboard
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link me-2" href="/pages/profile.html">
										<i class="fa fa-user opacity-6 text-dark me-1"></i>
										Profile
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link me-2" href="/pages/sign-up.html">
										<i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
										Sign Up
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link me-2" href="/pages/sign-in.html">
										<i class="fas fa-key opacity-6 text-dark me-1"></i>
										Sign In
									</a>
								</li>
							</ul>
							<ul class="navbar-nav d-lg-block d-none">
								<li class="nav-item">
									<a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-sm mb-0 me-1 btn-primary">Free Download</a>
								</li>
							</ul>
						</div>
					</div>
				</nav> -->
  <!-- End Navbar -->
  <!-- </div>
		</div>
	</div> -->
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Login</h4>
                  <p class="mb-0"><?= lang('LoginPetugas.fillForm') ?></p>
                </div>
                <div class="card-body">
                  <?php if ($alert = session()->getFlashdata('alert')) : ?>
                    <div class="alert alert-<?= $alert['type'] ?> alert-dismissible fade show text-white" role="alert" id="alert">
                      <span class="alert-text"><?= $alert['message'] ?></span>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif ?>
                  <form role="form" id="form" method="POST" action="/petugas">
                    <div class="mb-3">
                      <input type="text" name="username" class="form-control form-control-lg <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" placeholder="Username" aria-label="Username" value="<?= old('username') ?>">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control form-control-lg <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" placeholder="Password" aria-label="Password" value="<?= old('password') ?>">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" value="remember" name="remember_me" type="checkbox" id="rememberMe" <?= set_checkbox('remember_me', 'remember') ?>>
                      <label class="form-check-label" for="rememberMe"><?= lang('LoginPetugas.rememberMe') ?></label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"<?= lang('LoginPetugas.cardTitle') ?>"</h4>
                <p class="text-white position-relative"><?= lang('LoginPetugas.cardText') ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="/assets/argon/js/core/popper.min.js"></script>
  <script src="/assets/argon/js/core/bootstrap.min.js"></script>
  <script src="/assets/argon/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/argon/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/argon/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>