<?php include('../_partials/top.php') ?>

<h1 class="page-header">Kuliner</h1>
<?php include('_partials/menu.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="store.php" method="post" enctype="multipart/form-data">
            <h3>Tambah data Kuliner</h3>
            <table class="table table-striped table-middle">
                <tr>
                    <th width="20%">Gambar Kuliner</th>
                    <td width="1%">:</td>
                    <td><input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg" required></td>
                </tr>
                <tr>
                    <th>Judul Kuliner</th>
                    <td>:</td>
                    <td><input onkeyup="convertToSlug(this.value)" type="text" class="form-control" name="judul_kuliner" required></td>
                </tr>
                <tr>
                    <th>Slug Kuliner</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="slug_kuliner" id="slug_kuliner" readonly required></td>
                </tr>
                <tr>
                    <th>Harga Kuliner</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="harga" id="harga" required></td>
                </tr>
                <tr>
                    <th>No WA</th>
                    <td>:</td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">+62</span>
                            <input type="number" class="form-control" placeholder="85227xxxxxx" name="no_wa" aria-describedby="basic-addon1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Detail Kuliner</th>
                    <td>:</td>
                    <td>
                        <textarea name="detail_kuliner" class="form-control" rows="5" required></textarea>
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