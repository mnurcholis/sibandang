<?php include('../_partials/top.php') ?>

<?php
include('../../config/koneksi.php');

$get_id_berita = $_GET['id_berita'];

// ambil dari database
$query = "SELECT * FROM berita WHERE id_berita = $get_id_berita";

$hasil = mysqli_query($db, $query);

$data_berita = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_berita[] = $row;
}

?>

<h1 class="page-header">Ubah Berita</h1>
<?php include('_partials/menu.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <h3>Ubah data Galeri</h3>
            <table class="table table-striped table-middle">
                <tr>
                    <th width="20%">Gambar Lama</th>
                    <td width="1%">:</td>
                    <td>
                        <img src="../../assets/berita/upload/<?= $data_berita[0]['gambar_berita'] ?>" alt="<?= $data_berita[0]['judul_berita'] ?>" width="100">
                    </td>
                </tr>
                <tr>
                    <th width="20%">Path</th>
                    <td width="1%">:</td>
                    <td>
                        <input type="hidden" class="form-control" name="id" value="<?= $get_id_berita ?>">
                        <input type="hidden" class="form-control" name="gambar_berita" value="<?= $data_berita[0]['gambar_berita'] ?>">
                        <input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg">
                        <span class="label label-info">JIka ingin Menganti Gambar, jika tidak bisa kosong kan</span>
                    </td>
                </tr>
                <tr>
                    <th>Judul Berita</th>
                    <td>:</td>
                    <td><input type="text" onkeyup="convertToSlug(this.value)" class="form-control" name="judul_berita" value="<?= $data_berita[0]['judul_berita'] ?>" required></td>
                </tr>
                <tr>
                    <th>Slug Berita</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="slug_berita" value="<?= $data_berita[0]['slug_berita'] ?>" id="slug_berita" readonly required></td>
                </tr>
                <tr>
                    <th>Isi Berita</th>
                    <td>:</td>
                    <td>
                        <textarea name="isi_berita" class="form-control" rows="10" required><?= $data_berita[0]['isi_berita'] ?></textarea>
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
        document.getElementById('slug_berita').value = slug;
    }
</script>