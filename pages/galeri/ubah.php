<?php include('../_partials/top.php') ?>

<?php
include('../../config/koneksi.php');

$get_id_galeri = $_GET['id_galeri'];

// ambil dari database
$query = "SELECT * FROM galeri WHERE id_galeri = $get_id_galeri";

$hasil = mysqli_query($db, $query);

$data_galeri = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_galeri[] = $row;
}

?>

<h1 class="page-header">Galeri</h1>
<?php include('_partials/menu.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <h3>Tambah data Galeri</h3>
            <table class="table table-striped table-middle">
                <tr>
                    <th width="20%">Gambar Lama</th>
                    <td width="1%">:</td>
                    <td>
                        <img src="../../assets/upload/<?= $data_galeri[0]['path_galeri'] ?>" alt="<?= $data_galeri[0]['judul_galeri'] ?>" width="100">
                    </td>
                </tr>
                <tr>
                    <th width="20%">Path</th>
                    <td width="1%">:</td>
                    <td>
                        <input type="hidden" class="form-control" name="id" value="<?= $get_id_galeri ?>">
                        <input type="hidden" class="form-control" name="path_galeri" value="<?= $data_galeri[0]['path_galeri'] ?>">
                        <input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg">
                        <span class="label label-info">JIka ingin Menganti Gambar, jika tidak bisa kosong kan</span>
                    </td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="judul_galeri" value="<?= $data_galeri[0]['judul_galeri'] ?>" required></td>
                </tr>
                <tr>
                    <th>Caption</th>
                    <td>:</td>
                    <td>
                        <textarea name="caption_galeri" class="form-control" rows="4" required><?= $data_galeri[0]['caption_galeri'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Tautan</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="tautan_galeri" value="<?= $data_galeri[0]['tautan_galeri'] ?>"></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-floppy-save"></i> Simpan
            </button>
        </form>
    </div>
</div>

<?php include('../_partials/bottom.php') ?>