<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Galeri Desa</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">gambar</th>
                    <th scope="col">judul</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php foreach ($data_galeri as $galeri) : ?>
                    <tr>
                        <th scope="row"><?= $nomor ?></th>
                        <td><img src="../../assets/upload/<?= $galeri['path_galeri'] ?>" alt="<?= $galeri['judul_galeri'] ?>" width="50"></td>

                        <td><?= $galeri['judul_galeri'] ?></td>
                        <td>
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="ubah.php?id_galeri=<?= $galeri['id_galeri'] ?>"><span class="glyphicon glyphicon-pencil"></span> Ubah</a></li>
                                    <li><a href="delete.php?id_galeri=<?= $galeri['id_galeri'] ?>&path_galeri=<?= $galeri['path_galeri'] ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php $nomor++;
                endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<br><br>

<?php include('../_partials/bottom.php') ?>