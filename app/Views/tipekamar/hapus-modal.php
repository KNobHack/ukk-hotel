<div class="modal fade" id="modalKonfirmasiHapus" tabindex="-1" role="dialog" aria-labelledby="modalKonfirmasiHapusLabel" aria-hidden="true">
	<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="modalKonfirmasiHapusLabel">Konfirmasi Penghapusan</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="py-3 text-center">
					<!-- <i class="ni ni-bell-55 ni-3x"></i> -->
					<i class="fas fa-exclamation fa-3x"></i>
					<h4 class="text-gradient text-danger mt-4">Apakah anda yakin!</h4>
					<p>Tipe kamar <strong id="modalKonfirmasiHapusNamaTipeKamar"></strong> akan di hapus. Penghapusan tidak dapat diurungkan</p>
				</div>
			</div>
			<div class="modal-footer">
				<form action="/tipe-kamar/delete/" data-original-action="/tipe-kamar/delete/" method="POST" class="d-none" id="tipeKamarFormButtonDelete">
				</form>
				<button type="button" role="button" class="btn bg-gradient-danger" onclick="document.getElementById('tipeKamarFormButtonDelete').submit()">Yakin</button>
				<button type="button" class="btn bg-white" data-bs-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<script>
	var modal = document.getElementById('modalKonfirmasiHapus');
	modal.addEventListener('show.bs.modal', function(e) {
		// Button that triggered the modal
		var button = e.relatedTarget
		// Extract info from data-bs-* attributes
		var id_tipe_kamar = button.getAttribute('data-tipe-kamar-id')
		var tipe_kamar = button.getAttribute('data-tipe-kamar')

		var nama_tipe_kamar = document.getElementById('modalKonfirmasiHapusNamaTipeKamar');
		nama_tipe_kamar.textContent = tipe_kamar;

		var form_yakin = document.getElementById('tipeKamarFormButtonDelete')
		var yakin_action = form_yakin.getAttribute('data-original-action')
		form_yakin.setAttribute('action', yakin_action + id_tipe_kamar)
	})
</script>