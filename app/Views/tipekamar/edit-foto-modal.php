<!-- Modal -->
<div class="modal fade" id="UbahFotoTipeKamarModal" tabindex="-1" role="dialog" aria-labelledby="UbahFotoTipeKamarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UbahFotoTipeKamarModalLabel">Ubah Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tipe-kamar/update/foto/" method="POST" class="needs-validation" id="form-ubah-foto-tipe-kamar" data-original-action="/tipe-kamar/update/foto/" enctype="multipart/form-data" novalidate>
          <div class="form-group">
            <label for="foto" class="col-form-label">Foto</label>
            <input name="foto" type="file" class="form-control" id="foto" required="required">
          </div>
          <button type="submit" class="d-none" id="form-ubah-foto-tipe-kamar-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-ubah-foto-tipe-kamar-submit').click()">Ubah</button>
      </div>
    </div>
  </div>
</div>

<script>
  var modal = document.getElementById('UbahFotoTipeKamarModal');
  modal.addEventListener('show.bs.modal', function(e) {
    // Button that triggered the modal
    var button = e.relatedTarget
    // Extract info from data-bs-* attributes
    var id_tipe_kamar = button.getAttribute('data-tipe-kamar-id')

    var form = document.getElementById('form-ubah-foto-tipe-kamar')
    var form_action = form.getAttribute('data-original-action')
    form.setAttribute('action', form_action + id_tipe_kamar)
  })
</script>