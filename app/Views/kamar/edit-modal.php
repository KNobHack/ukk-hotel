<!-- Modal -->
<div class="modal fade" id="editKamarModal" tabindex="-1" role="dialog" aria-labelledby="editKamarModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editKamarModalTitle">Tambah Kamar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kamar/update/" data-original-action="/kamar/update/" method="POST" class="needs-validation" id="form-edit-kamar" novalidate>
          <div class="form-group">
            <label for="nama-kamar" class="col-form-label">Nomor Kamar</label>
            <input name="no_kamar" type="text" class="form-control" id="edit-nama-kamar" required="required">
          </div>
          <div class="form-group">
            <label for="tipe-kamar" class="col-form-label">Tipe Kamar</label>
            <select name="id_tipe_kamar" class="form-control" id="edit-tipe-kamar">
              <?php foreach ($tipe_kamar as $tipe_kmr) : ?>
                <option value="<?= $tipe_kmr->id ?>"><?= $tipe_kmr->tipe ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-check">
            <input name="dalam-perbaikan" class="form-check-input" type="checkbox" id="edit-status-dalam-perbakan">
            <label class="custom-control-label" for="edit-status-dalam-perbakan">Dalam perawatan</label>
          </div>
          <button type="submit" class="d-none" id="form-edit-kamar-submit"></button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn bg-gradient-primary" onclick="document.getElementById('form-edit-kamar-submit').click()">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
  var modal = document.getElementById('editKamarModal');
  modal.addEventListener('show.bs.modal', function(e) {
    // Button that triggered the modal
    var button = e.relatedTarget
    // Extract info from data-bs-* attributes
    var id_kamar = button.getAttribute('data-id-kamar')
    var no_kamar = button.getAttribute('data-no-kamar')
    var id_tipe_kamar = button.getAttribute('data-id-tipe-kamar')
    var status_dalam_perbaikan = button.getAttribute('data-status-dalam-perbaikan')

    var form = document.getElementById('form-edit-kamar')

    var form_action = form.getAttribute('data-original-action')
    form.setAttribute('action', form_action + id_kamar)

    var form_no_kamar = form.querySelector('#edit-nama-kamar')
    form_no_kamar.setAttribute('value', no_kamar)

    var form_tipe_kamar = form.querySelector(`#edit-tipe-kamar option[value="${id_tipe_kamar}"]`)
    form_tipe_kamar.setAttribute('selected', 'selected')

    var form_dalam_perbaikan = form.querySelector('#edit-status-dalam-perbakan')
    if (status_dalam_perbaikan == '1') {
      form_dalam_perbaikan.setAttribute('checked', 'checked')
    }
  })

  modal.addEventListener('hidden.bs.modal', function(e) {
    var form = document.getElementById('form-edit-kamar')

    var form_tipe_kamars = form.querySelectorAll(`#edit-tipe-kamar option`)
    for (let i = 0; i < form_tipe_kamars.length; i++) {
      const element = form_tipe_kamars[i];
      element.removeAttribute('selected')
    }

    var form_dalam_perbaikan = form.querySelector('#edit-status-dalam-perbakan')
    form_dalam_perbaikan.removeAttribute('checked')
  })
</script>