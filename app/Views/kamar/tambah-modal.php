<!-- Modal -->
<div class="modal fade" id="TambahKamarModal" tabindex="-1" role="dialog" aria-labelledby="TambahKamarModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TambahKamarModalTitle">Tambah Kamar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kamar" method="POST" class="needs-validation" id="form-tambah-kamar" novalidate>
          <div class="form-group">
            <label for="nama-kamar" class="col-form-label">Nomor Kamar</label>
            <input name="no_kamar" type="text" class="form-control" id="nama-kamar" required="required">
          </div>
          <div class="form-group">
            <label for="tipe-kamar" class="col-form-label">Tipe Kamar</label>
            <select name="id_tipe_kamar" class="form-control" id="tipe-kamar">
              <option selected disabled>Pilih Tipe Kamar</option>
              <?php foreach ($tipe_kamar as $tipe_kmr) : ?>
                <option value="<?= $tipe_kmr->id ?>"><?= $tipe_kmr->tipe ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <button type="submit" class="d-none" id="form-tambah-kamar-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-tambah-kamar-submit').click()">Simpan</button>
      </div>
    </div>
  </div>
</div>