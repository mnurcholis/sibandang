<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Penerima BLT</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<div class="panel panel-default">
  <div class="panel-body">
    <table class="table table-striped table-condensed table-hover" id="datatable">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>Desa</th>
          <th>NIK</th>
          <th>No KK</th>
          <th>Jenis Kelamin</th>
          <th>Jumlah Diterima</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = 1; ?>
        <?php foreach ($blt as $p) : ?>

          <?php
          // hitung anggota
          $query_jumlah_data = "SELECT COUNT(*) AS total FROM data_blt WHERE id = " . $p['id'];
          $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_data);
          $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);
          ?>

          <tr>
            <td><?php echo $nomor++ ?>.</td>
            <td><?php echo $p['nama'] ?></td>
            <td><?php echo $p['alamat'] ?></td>
            <td><?php echo $p['desa'] ?></td>
            <td><?php echo $p['nik'] ?></td>
            <td><?php echo $p['no_kk'] ?></td>
            <td><?php echo $p['jenis_kelamin'] ?></td>
            <td>Rp<?php echo number_format($p['jumlah_diterima'], 0, ',', '.') ?></td>
            <td>
              <!-- Single button -->
              <div class="btn-group pull-right">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li>
                    <a href="show.php?id=<?php echo $p['id'] ?>"><span class="glyphicon glyphicon-sunglasses"></span> Detail</a>
                  </li>

                  <?php if ($_SESSION['user']['status_user'] != 'RW') : ?>
                    <li class="divider"></li>
                    <li>
                      <a href="edit-anggota.php?id=<?php echo $p['id'] ?>"><span class="glyphicon glyphicon-list"></span> Ubah Anggota</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="edit.php?id=<?php echo $p['id'] ?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="delete.php?id=<?php echo $p['id'] ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <br><br>

    <div class="well">
      <dl class="dl-horizontal">
        <dt>Total Data Pegawai</dt>
        <dd><?php echo $jumlah_data['total'] ?> data</dd>
      </dl>
    </div>

    <?php include('../_partials/bottom.php') ?>
  </div>
</div>