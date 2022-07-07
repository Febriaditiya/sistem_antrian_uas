<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>


<div class="containe">

  <div class="row my-5 ">
    <!--  -->
    <div class="col shadow p-3 mb-5 bg-body rounded">
      <!-- <button type="submit" class="btn btn-primary w-100 mb-4">Daftar Antrian Selanjutnya</button> -->
      <table class="table table-hover border border-3">
        <thead class="bg-success text-light">
          <tr>
            <th>No</th>
            <th>No antrian</th>
            <th>Keperluan</th>
            <th>Panggil</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($loket as $row => $values) : ?>
          <tbody>
            <tr>
              <td><?= $no++; ?></td>
              <td>A<?= $values->kode ?></td>
              <td><?= $values->nama ?></td>
              <td><a href="/loket/ambil_loket/<?= $values->id ?>" class="btn btn-warning">Panggil</a></td>
              <td><a href="/loket/hapus/<?= $values->id ?>" class="btn btn-danger">Selesai</a></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>