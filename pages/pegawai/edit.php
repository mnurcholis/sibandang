<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pegawai</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="update.php" method="post">
      <table class="table table-striped table-middle">
        <tr>
          <th width="20%">Nama Lengkap</th>
          <td width="1%">:</td>
          <td><input type="text" class="form-control" name="nama" value="<?php echo $pegawai[0]['nama'] ?>"></td>
        </tr>
      </table>

      <table class="table table-striped">
        <tr>
          <th width="20%">TTL</th>
          <td width="1%">:</td>
          <td><input type="text" class="form-control" name="ttl" value="<?php echo $pegawai[0]['ttl'] ?>"></td>
        </tr>
        <tr>
          <th>NIK</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="nik" value="<?php echo $pegawai[0]['nik'] ?>"></td>
        </tr>
        <tr>
          <th>No KK</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="no_kk" value="<?php echo $pegawai[0]['no_kk'] ?>"></td>
        </tr>
        <tr>
          <th>No HP</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="no_hp" value="<?php echo $pegawai[0]['no_hp'] ?>"></td>
        </tr>
        <tr>
          <th>Jabatan</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="jabatan" value="<?php echo $pegawai[0]['jabatan'] ?>"></td>
        </tr>
        <tr>
          <th>Pendidikan Terakhir</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="pendidikan_terakhir" value="<?php echo $pegawai[0]['pendidikan_terakhir'] ?>"></td>
        </tr>
      </table>

      <button type="submit" class="btn btn-primary btn-lg">
        <i class="glyphicon glyphicon-floppy-save"></i> Simpan
      </button>

      <input type="hidden" name="id" value="<?php echo $pegawai[0]['id'] ?>">
    </form>

    <?php include('../_partials/bottom.php') ?>
  </div>
</div>