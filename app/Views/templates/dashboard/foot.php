<!--   Core JS Files   -->
<script src="/assets/argon/js/core/popper.min.js"></script>
<script src="/assets/argon/js/core/bootstrap.min.js"></script>
<script src="/assets/argon/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/argon/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/assets/argon/js/plugins/chartjs.min.js"></script>

<script>
	var sidebar = document.getElementById('sidenav-main');
	console.log(sidebar);
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

<?= $this->renderSection('js') ?>
</body>

</html>