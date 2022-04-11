<!--   Core JS Files   -->
<script src="/assets/argon/js/core/popper.min.js"></script>
<script src="/assets/argon/js/core/bootstrap.min.js"></script>
<script src="/assets/argon/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/argon/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/assets/argon/js/plugins/chartjs.min.js"></script>

<!-- Sidebar brighetness drop after modal show -->
<script>
  var sidebar = document.getElementById('sidenav-main');

  var modals = document.getElementsByClassName('modal');

  for (let i = 0; i < modals.length; i++) {
    modals[i].addEventListener('show.bs.modal', function() {
      sidebar.style.filter = "brightness(50%)";
    })

    modals[i].addEventListener('hide.bs.modal', function() {
      sidebar.style.filter = "brightness(100%)";
    })
  }
</script>

<!-- Form validation -->
<script>
  (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

<?= $this->renderSection('js') ?>
</body>

</html>