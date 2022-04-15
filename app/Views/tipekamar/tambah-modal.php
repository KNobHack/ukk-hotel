<!-- Modal -->
<div class="modal fade tipe-kamar-modal" id="TambahTipeKamarModal" tabindex="-1" role="dialog" aria-labelledby="TambahTipeKamarModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahTipeKamarModalTitle">Tambah Tipe Kamar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tipe-kamar/create" method="POST" class="needs-validation" id="form-tambah-tipe-kamar" enctype="multipart/form-data" novalidate>
          <div class="form-group">
            <label for="nama-tipe-kamar" class="col-form-label">Nama</label>
            <input name="tipe" type="text" class="form-control" id="nama-tipe-kamar" required="required">
          </div>
          <div class="form-group">
            <label for="harga-tipe-kamar" class="col-form-label">Harga</label>
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input name="harga" type="number" class="form-control" id="harga-tipe-kamar" required="required" min="0">
            </div>
          </div>
          <div class="form-group">
            <label for="foto" class="col-form-label">Foto</label>
            <input name="foto" type="file" class="form-control" id="foto" required="required">
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required="required"></textarea>
          </div>
          <button type="submit" class="d-none" id="form-tambah-tipe-kamar-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-tambah-tipe-kamar-submit').click()">Simpan</button>
      </div>
    </div>
  </div>
</div>