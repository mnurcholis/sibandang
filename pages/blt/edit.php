<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Penerima BLT</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="update.php" method="post">
      <table class="table table-striped table-middle">
        <tr>
          <th width="20%">Nama Lengkap</th>
          <td width="1%">:</td>
          <td><input type="text" class="form-control" name="nama" value="<?php echo $blt[0]['nama'] ?>"></td>
        </tr>
      </table>

      <table class="table table-striped">
        <tr>
          <th width="20%">Alamat</th>
          <td width="1%">:</td>
          <td><input type="text" class="form-control" name="alamat" value="<?php echo $blt[0]['alamat'] ?>"></td>
        </tr>
        <tr>
          <th>Desa</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="desa" value="<?php echo $blt[0]['desa'] ?>"></td>
        </tr>
        <tr>
          <th>No KK</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="no_kk" value="<?php echo $blt[0]['no_kk'] ?>"></td>
        </tr>
        <tr>
          <th>NIK</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="nik" value="<?php echo $blt[0]['nik'] ?>"></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>:</td>
          <td>
            <select name="jenis_kelamin" id="" class="form-control">
              <option value="<?= $blt[0]['nik']; ?><"><?= $blt[0]['nik']; ?></option>
              <option value="Laki Laki">Laki Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Jumlah Diterima</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="jumlah_diterima" value="<?php echo $blt[0]['jumlah_diterima'] ?>"></td>
        </tr>
      </table>

      <button type="submit" class="btn btn-primary btn-lg">
        <i class="glyphicon glyphicon-floppy-save"></i> Simpan
      </button>

      <input type="hidden" name="id" value="<?php echo $blt[0]['id'] ?>">
    </form>

    <?php include('../_partials/bottom.php') ?>
  </div>
</div>