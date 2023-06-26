<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Mutasi</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nik_mutasi" value="<?php echo $data_mutasi[0]['nik_mutasi'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Nama Warga</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_mutasi" value="<?php echo $data_mutasi[0]['nama_mutasi'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat_lahir_mutasi" value="<?php echo $data_mutasi[0]['tempat_lahir_mutasi'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tanggal_lahir_mutasi" value="<?php echo $data_mutasi[0]['tanggal_lahir_mutasi'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control" name="jenis_kelamin_mutasi" required readonly>
        <option value="<?php echo $data_mutasi[0]['jenis_kelamin_mutasi'] ?>" selected><?php echo $data_mutasi[0]['jenis_kelamin_mutasi'] ?></option>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="alamat_ktp_mutasi"><?php echo $data_mutasi[0]['alamat_ktp_mutasi'] ?></textarea></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td><textarea class="form-control" name="alamat_mutasi"><?php echo $data_mutasi[0]['alamat_mutasi'] ?></textarea></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_mutasi" value="<?php echo $data_mutasi[0]['desa_kelurahan_mutasi'] ?>"></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_mutasi" value="<?php echo $data_mutasi[0]['kecamatan_mutasi'] ?>"></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_mutasi" value="<?php echo $data_mutasi[0]['kabupaten_kota_mutasi'] ?>"></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_mutasi" value="<?php echo $data_mutasi[0]['provinsi_mutasi'] ?>"></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_mutasi" value="<?php echo $data_mutasi[0]['negara_mutasi'] ?>"></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_mutasi" value="<?php echo $data_mutasi[0]['rt_mutasi'] ?>"></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_mutasi" value="<?php echo $data_mutasi[0]['rw_mutasi'] ?>"></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control" name="agama_mutasi" required readonly>
        <option value="<?php echo $data_mutasi[0]['agama_mutasi'] ?>" selected><?php echo $data_mutasi[0]['agama_mutasi'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td>
      <select class="form-control" name="pendidikan_terakhir_mutasi" required readonly>
        <option value="<?php echo $data_mutasi[0]['pendidikan_terakhir_mutasi'] ?>" selected><?php echo $data_mutasi[0]['pendidikan_terakhir_mutasi'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pekerjaan_mutasi" value="<?php echo $data_mutasi[0]['pekerjaan_mutasi'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>
      <select class="form-control" name="status_perkawinan_mutasi" required readonly>
        <option value="<?php echo $data_mutasi[0]['status_perkawinan_mutasi'] ?>" selected><?php echo $data_mutasi[0]['status_perkawinan_mutasi'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td>
      <select class="form-control" name="status_mutasi" required readonly>
        <option value="<?php echo $data_mutasi[0]['status_mutasi'] ?>" selected><?php echo $data_mutasi[0]['status_mutasi'] ?></option>
      </select>
    </td>
  </tr>
</table>

<input type="hidden" name="id_mutasi" value="<?php echo $data_mutasi[0]['id_mutasi'] ?>">

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-export"></i> Mutasi
</button>
</form>

<?php include('../_partials/bottom.php') ?>
