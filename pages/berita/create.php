<?php include('../_partials/top.php') ?>

<h1 class="page-header">Berita</h1>
<?php include('_partials/menu.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="store.php" method="post" enctype="multipart/form-data">
            <h3>Tambah data Berita</h3>
            <table class="table table-striped table-middle">
                <tr>
                    <th width="20%">Gambar Berita</th>
                    <td width="1%">:</td>
                    <td><input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg" required></td>
                </tr>
                <tr>
                    <th>Judul Berita</th>
                    <td>:</td>
                    <td><input onkeyup="convertToSlug(this.value)" type="text" class="form-control" name="judul_berita" required></td>
                </tr>
                <tr>
                    <th>Slug Berita</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="slug_berita" id="slug_berita" readonly required></td>
                </tr>
                <tr>
                    <th>Isi Berita</th>
                    <td>:</td>
                    <td>
                        <textarea name="isi_berita" class="form-control" rows="10" required></textarea>
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