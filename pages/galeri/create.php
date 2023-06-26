<?php include('../_partials/top.php') ?>

<h1 class="page-header">Galeri</h1>
<?php include('_partials/menu.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form action="store.php" method="post" enctype="multipart/form-data">
            <h3>Tambah data Galeri</h3>
            <table class="table table-striped table-middle">
                <tr>
                    <th width="20%">Path</th>
                    <td width="1%">:</td>
                    <td><input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg" required></td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="judul_galeri" required></td>
                </tr>
                <tr>
                    <th>Caption</th>
                    <td>:</td>
                    <td>
                        <textarea name="caption_galeri" class="form-control" rows="3" required></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Tautan</th>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="tautan_galeri"></td>
                </tr>
            </table>

            <button type="submit" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-floppy-save"></i> Simpan
            </button>
        </form>
    </div>
</div>

<?php include('../_partials/bottom.php') ?>