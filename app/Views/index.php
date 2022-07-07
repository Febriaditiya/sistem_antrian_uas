<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>

<div class="container">
  <div class="row text-center">
    <div class="col-4">
      <div class="card ">
        <div class="card-header bg-success text-light">
          <h3>ANTRIAN</h3>
        </div>
        <div class="card-body">
          <h2 class="card-title">-</h2>
        </div>
        <div class="card-footer bg-success text-light">
          <h7>TERIMA KASIH<br />HARAP MENUNGGU ANTRIAN</h7>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-3">
        <img src="<?= base_url(); ?>/./gambar/images.png" title="YouTube video player"  class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ruang Tunggu</h5>
          <p class="card-text">Harap selalu menjaga jarak dan selalu tetap memakai masker</p>
          <p class="card-text"><small class="text-muted">2022</small></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <table class="table text-center border table-hover">
        <thead class="bg-success text-light">
          <tr>
            <th>No</th>
            <th>Keperluan</th>
            <th>Nomor Antrian</th>
          </tr>
        </thead>
        <?php
        $n = 1;
        foreach ($antrian as $row => $values) :
        ?>
          <tbody>
            <tr>
              <td><?= $n++; ?></td>
              <td><?= $values->nama ?></td>
              <td>A<?= $values->kode ?></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>php