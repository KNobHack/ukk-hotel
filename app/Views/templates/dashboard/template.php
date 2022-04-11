<?= $this->include('templates/dashboard/head') ?>

<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?= $this->include('templates/dashboard/sidebar') ?>
<main class="main-content position-relative border-radius-lg ">
	<?= $this->include('templates/dashboard/navbar') ?>
	<div class="container-fluid py-4">
		<?= $this->renderSection('content') ?>
	</div>

	<footer class="footer pt-3  ">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-lg-between">
				<div class="col-lg-6 mb-lg-0 mb-4">
					<div class="copyright text-center text-sm text-muted text-lg-start">
						© <script>
							document.write(new Date().getFullYear())
						</script>,
						made with <i class="fa fa-heart"></i> by
						<a href="https://github.com/KNobHack" class="font-weight-bold" target="_blank">Fahmi</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</main>

<?= $this->renderSection('modal') ?>
<?= $this->include('templates/dashboard/foot') ?>