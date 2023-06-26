<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Penerima BLT</h1>
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
          <th>Alamat</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="alamat" required></td>
        </tr>
        <tr>
          <th>Desa</th>
          <td>:</td>
          <td><input type="text" class="form-control" name="desa" required></td>
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
          <th>Jenis Kelamin</th>
          <td>:</td>
          <td>
            <select name="jenis_kelamin" id="" class="form-control">
              <option value="Laki Laki">Laki Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Jumlah Diterima</th>
          <td>:</td>
          <td><input type="number" class="form-control" name="jumlah_diterima" required></td>
        </tr>
      </table>

      <button type="submit" class="btn btn-primary btn-lg">
        <i class="glyphicon glyphicon-floppy-save"></i> Simpan
      </button>
    </form>

    <?php include('../_partials/bottom.php') ?>
  </div>
</div>