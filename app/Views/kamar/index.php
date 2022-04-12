<?= $this->extend('templates/dashboard/template') ?>

<?= $this->section('content') ?>

<button class="btn btn-success" type="button">Tambah Kamar</button>

<div class="card">
  <div class="card-header pb-0">
    <h6>Daftar Kamar</h6>
  </div>
  <div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Kamar</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipe Kamar</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($kamar) < 1) : ?>
            <tr>
              <td colspan="4" class="align-middle text-center text-sm">Data tidak tersedia</td>
            </tr>
          <?php endif ?>
          <?php foreach ($kamar as $kmr) : ?>
            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <p class="text-xs font-weight-bold mb-0"><?= $kmr->no_kamar ?></p>
                </div>
              </td>
              <td>
                <p class="text-xs font-weight-bold mb-0"><?= $kmr->tipe_kamar ?></p>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-<?= $kmr->statusColor ?>"><?= $kmr->status ?></span>
              </td>
              <td class="align-middle">
                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                  Edit
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>