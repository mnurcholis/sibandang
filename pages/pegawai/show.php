<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Pegawai</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Lengkap</th>
    <td width="1%">:</td>
    <td><?php echo $pegawai[0]['nama'] ?></td>
  </tr>
  <tr>
    <th>Tempat, Tanggal Lahir</th>
    <td>:</td>
    <td><?php echo $pegawai[0]['ttl'] ?></td>
  </tr>
  <tr>
    <th>NIK</th>
    <td>:</td>
    <td><?php echo $pegawai[0]['nik'] ?></td>
  </tr>
  <tr>
    <th>No KK</th>
    <td>:</td>
    <td><?php echo $pegawai[0]['no_kk'] ?></td>
  </tr>
  <tr>
    <th>No HP</th>
    <td>:</td>
    <td><?php echo $pegawai[0]['no_hp'] ?></td>
  </tr>
  <tr>
    <th>Jabatan</th>
    <td>:</td>
    <td><?php echo $pegawai[0]['jabatan'] ?></td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td><?php echo $pegawai[0]['pendidikan_terakhir'] ?></td>
  </tr>
</table>


<?php include('../_partials/bottom.php') ?>