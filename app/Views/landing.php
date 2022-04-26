<?= $this->extend('templates/landing') ?>

<?= $this->section('content') ?>
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/material-kit/img/bg2.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5"><?= APP_NAME ?></h1>
          <p class="lead text-white mt-3">Free & Open Source Web UI Kit built over Bootstrap 5. <br /> Join over 1.6 million developers around the world. </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
  <section class="pt-3" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countTo="70">0</span>+</h1>
                <h5 class="mt-3">Coded Elements</h5>
                <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
                <h5 class="mt-3">Design Blocks</h5>
                <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
                <h5 class="mt-3">Pages</h5>
                <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- START Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Fasilitas Hotel</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="./assets/material-kit/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
              </h5>
              <p>
                Finding temporary housing for your dog should be as easy as
                renting an Airbnb. That’s the idea behind Rover ...
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- END Blogs w/ 4 cards w/ image & text & link -->

  <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
  <section class="pb-5 mb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Tipe Kamar</h3>
          <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="./assets/material-kit/img/team-5.jpg" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Emma Roberts</h5>
                  <h6 class="text-info">UI Designer</h6>
                  <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.
                    <a href="javascript:;" class="text-info text-sm icon-move-right">Fasilitas
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- -------- END Features w/ pattern background & stats & rocket -------- -->

  <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Thank you for your support!</h4>
          <p class="lead mb-0">We deliver the best web products</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
            <i class="fab fa-pinterest me-1"></i> Pin it
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript">
  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
<?= $this->endSection() ?>