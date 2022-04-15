<!-- Modal -->
<div class="modal fade" id="UbahFotoFasilitasHotelModal" tabindex="-1" role="dialog" aria-labelledby="UbahFotoFasilitasHotelModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UbahFotoFasilitasHotelModalLabel">Ubah Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/fasilitas-hotel/update/foto/" data-original-action="/fasilitas-hotel/update/foto/" method="POST" class="needs-validation" id="form-ubah-foto-fasilitas-hotel" enctype="multipart/form-data" novalidate>
          <div class="form-group">
            <label for="foto" class="col-form-label">Foto</label>
            <input name="foto" type="file" class="form-control" id="foto" required="required">
          </div>
          <button type="submit" class="d-none" id="form-ubah-foto-fasilitas-hotel-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-ubah-foto-fasilitas-hotel-submit').click()">Ubah</button>
      </div>
    </div>
  </div>
</div>

<script>
  var modal = document.getElementById('UbahFotoFasilitasHotelModal');
  modal.addEventListener('show.bs.modal', function(e) {
    // Button that triggered the modal
    var button = e.relatedTarget
    // Extract info from data-bs-* attributes
    var id_fasilitas_hotel = button.getAttribute('data-fasilitas-hotel-id')

    var form = document.getElementById('form-ubah-foto-fasilitas-hotel')
    var form_action = form.getAttribute('data-original-action')
    form.setAttribute('action', form_action + id_fasilitas_hotel)
  })
</script>