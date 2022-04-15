<!-- Modal -->
<div class="modal fade fasilitas-hotel-modal" id="TambahFasilitasHotelModal" tabindex="-1" role="dialog" aria-labelledby="TambahFasilitasHotelModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahFasilitasHotelModalTitle">Tambah Fasilitas Hotel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/fasilitas-hotel" method="POST" class="needs-validation" id="form-tambah-fasilitas-hotel" enctype="multipart/form-data" novalidate>
          <div class="form-group">
            <label for="nama-fasilitas-hotel" class="col-form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama-fasilitas-hotel" required="required">
          </div>
          <div class="form-group">
            <label for="foto" class="col-form-label">Foto</label>
            <input name="foto" type="file" class="form-control" id="foto" required="required">
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required="required"></textarea>
          </div>
          <button type="submit" class="d-none" id="form-tambah-fasilitas-hotel-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-tambah-fasilitas-hotel-submit').click()">Simpan</button>
      </div>
    </div>
  </div>
</div>