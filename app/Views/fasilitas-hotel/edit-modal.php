<!-- Modal -->
<div class="modal fade" id="EditFasilitasHotelModal" tabindex="-1" role="dialog" aria-labelledby="EditFasilitasHotelModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditFasilitasHotelModalTitle">Edit Fasilitas Hotel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/fasilitas-hotel/update/" data-original-action="/fasilitas-hotel/update/" method="POST" class="needs-validation" id="form-edit-fasilitas-hotel" novalidate>
          <div class="form-group">
            <label for="nama-fasilitas-hotel" class="col-form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama-fasilitas-hotel" required="required">
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required="required"></textarea>
          </div>
          <button type="submit" class="d-none" id="form-edit-fasilitas-hotel-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-edit-fasilitas-hotel-submit').click()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  var modal = document.getElementById('EditFasilitasHotelModal');
  modal.addEventListener('show.bs.modal', function(e) {
    // Button that triggered the modal
    var button = e.relatedTarget
    // Extract info from data-bs-* attributes
    var id_fasilitas_hotel = button.getAttribute('data-fasilitas-hotel-id')
    var nama_fasilitas_hotel = button.getAttribute('data-fasilitas-hotel-nama')
    var deskripsi_fasilitas_hotel = button.getAttribute('data-fasilitas-hotel-deskripsi')

    var form = document.getElementById('form-edit-fasilitas-hotel')
    var yakin_action = form.getAttribute('data-original-action')
    form.setAttribute('action', yakin_action + id_fasilitas_hotel)

    var nama = form.querySelector('[name="nama"]')
    var deskripsi = form.querySelector('[name="deskripsi"]')

    nama.setAttribute('value', nama_fasilitas_hotel)
    deskripsi.textContent = deskripsi_fasilitas_hotel
  })
</script>