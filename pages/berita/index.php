<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Berita</h1>
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
                <?php foreach ($data_berita as $berita) : ?>
                    <tr>
                        <th scope="row"><?= $nomor ?></th>
                        <td><img src="../../assets/berita/upload/<?= $berita['gambar_berita'] ?>" alt="<?= $berita['judul_berita']?>" width="50"></td>

                        <td><?= $berita['judul_berita']?></td>
                        <td>
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="ubah.php?id_berita=<?= $berita['id_berita']?>"><span class="glyphicon glyphicon-pencil"></span> Ubah</a></li>
                                    <li><a href="delete.php?id_berita=<?= $berita['id_berita']?>&gambar_berita=<?= $berita['gambar_berita']?>"> <span class="glyphicon glyphicon-trash"></span> Hapus</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php $nomor++; endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<br><br>

<?php include('../_partials/bottom.php') ?>