<?php include('../_partials/top.php') ?>

<?php
include('../../config/koneksi.php');

$get_id_kuliner = $_GET['id_kuliner'];

// ambil dari database
$query = "SELECT * FROM kuliner WHERE id_kuliner = $get_id_kuliner";

$hasil = mysqli_query($db, $query);

$data_kuliner = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_kuliner[] = $row;
}

?>

<h1 class="page-header">Ubah Kuliner</h1>
<?php include('_partials/menu.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <h3>Ubah data Kuliner</h3>
            <table class="table table-striped table-middle">
                <tr>
                    <th width="20%">Gambar Lama</th>
                    <td width="1%">:</td>
                    <td>
                        <img src="../../assets/kuliner/upload/<?= $data_kuliner[0]['gambar_kuliner'] ?>" alt="<?= $data_kuliner[0]['judul_kuliner'] ?>" width="100">
                    </td>
                </tr>
                <tr>
                    <th width="20%">Gambar Kuliner Baru</th>
                    <td width="1%">:</td>
                    <td>
                        <input type="hidden" class="form-control" name="id" value="<?= $get_id_kuliner ?>">
                        <input type="hidden" class="form-control" name="gambar_kuliner" value="<?= $data_kuliner[0]['gambar_kuliner'] ?>">
                        <input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg">
                        <span class="label label-info">JIka ingin Menganti Gambar, jika tidak bisa kosong kan</span>
                    </td>
                </tr>
                <tr>
                    <th>Judul Kuliner</th>
                    <td>:</td>
                    <td><input type="text" onkeyup="convertToSlug(this.value)" class="form-control" name="judul_kuliner" value="<?= $data_kuliner[0]['judul_kuliner'] ?>" required></td>
                </tr>
                <tr>
                    <th>Slug Kuliner</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="slug_kuliner" value="<?= $data_kuliner[0]['slug_kuliner'] ?>" id="slug_kuliner" readonly required></td>
                </tr>
                <tr>
                    <th>Harga Kuliner</th>
                    <td>:</td>
                    <td><input type="number" class="form-control" name="harga" id="harga" value="<?= $data_kuliner[0]['harga'] ?>" required></td>
                </tr>
                <tr>
                    <th>No WA</th>
                    <td>:</td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">+62</span>
                            <input type="number" class="form-control" placeholder="85227xxxxxx" value="<?= $data_kuliner[0]['no_wa'] ?>" name="no_wa" aria-describedby="basic-addon1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Detail Kuliner</th>
                    <td>:</td>
                    <td>
                        <textarea name="detail_kuliner" class="form-control" rows="10" required><?= $data_kuliner[0]['detail_kuliner'] ?></textarea>
                    </td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-floppy-save"></i> Simpan
            </button>
        </form>
    </div>
</div>

<?php include('../_partials/bottom.php') ?>

<script>
    function toSlug(input) {
        return input
            .toLowerCase()
            .replace(/[^\w\s-]/g, '')
            .trim()
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    function convertToSlug(input) {
        var slug = toSlug(input);
        document.getElementById('slug_kuliner').value = slug;
    }
</script>