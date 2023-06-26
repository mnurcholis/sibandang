<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pegawai</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-create.php') ?>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="store.php" method="post">
      <table class="table table-striped table-middle">
        <tr>
          <th width="20%">Nama Lengkap</th>
          <td width="1%">:</td>
          <td><textarea class="form-control" name="nama"></textarea></td>
        </tr>
        <tr>
          <th>Tempat Lahir</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="tempat_lahir" required></td>
        </tr>
        <tr>
          <th>Tanggal Lahir</th>
          <td>:</td>
          <td><input type="date" class="form-control" name="tanggal_lahir" required></td>
        </tr>
        <tr>
          <th>NIK</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="nik" required></td>
        </tr>
        <tr>
          <th>No. KK</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="no_kk" required></td>
        </tr>
        <tr>
          <th>No. HP</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="no_hp" required></td>
        </tr>
        <tr>
          <th>Jabatan</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="jabatan" required></td>
        </tr>
        <tr>
          <th>Pendidikan Terakhir</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="pendidikan_terakhir" required></td>
        </tr>
      </table>

      <button type="submit" class="btn btn-primary btn-lg">
        <i class="glyphicon glyphicon-floppy-save"></i> Simpan
      </button>
    </form>

    <?php include('../_partials/bottom.php') ?>
  </div>
</div>