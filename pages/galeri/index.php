<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Program dan Kegiatan</h1>
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
                        <td><img src="../../assets/upload/<?= $galeri['path_galeri'] ?>" alt="<?= $galeri['judul_galeri']?>" width="50"></td>

                        <td><?= $galeri['judul_galeri']?></td>
                        <td>
                            <!-- Single button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="ubah.php?id_galeri=<?= $galeri['id_galeri']?>">Ubah</a></li>
                                    <li><a href="delete.php?id_galeri=<?= $galeri['id_galeri']?>&path_galeri=<?= $galeri['path_galeri']?>">Hapus</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php $nomor++; endforeach ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <img src="img/a2.jpeg" class="img-fluid" style="width:300px;">
                <p class="m-3 shadow-lg">
                    <br>
                    Di Pulau Sibandang wisatawan bisa menyaksikan proses pembuatan Ulos Harungguan di Desa Papande. Ulos di desa tersebut masih dibuat dengan alat tenun tradisional. Konon, ulos dari Desa Papande tidak diperuntukan kepada orang biasa, namun hanya kepada para raja Batak. Oleh karena itu, Ulos Harungguan terkenal sebagai ulos mewah. Dalam proses pembuatannya dikerjakan oleh masyarakat lokal dari generasi muda hingga tua. Jika kamu ingin mencari ulos dengan motif yang indah dan kualitas yang baik, maka bisa berkunjung ke Desa ini.
                </p>
            </div>

            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <img src="img/a3.jpeg" class="img-fluid" style="width:300px;">
                <p>
                    <br>
                    Panen mangga merupakan mata pencaharian Desa Sibandang yang dipanen 2 kali setahun. Dengan hasil yang memuaskan dan rasa mangga yang sangat manis
                </p>
            </div>

            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <img src="img/a4.jpeg" class="img-fluid" style="width:300px;">
                <p>
                    <br>
                    Kegiatan panen Coklat juga merupakan mata pencaharian Desa Sibandang, dan sudah banyak di tanam dan hasilnya sangat banyak.
                </p>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <img src="img/a8.jpeg" class="img-fluid" style="width:300px;">
                <p>
                    <br>
                    Program Imunisasi anak di bawah umur ini dilaksanakan di Kantor Desa Sibandang. Para bidan desa akan datang ke Desa tersebut, memberikan obat dan menyuntik anak di bawah umur itu.
                </p>
            </div>

            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <img src="img/a6.jpeg" class="img-fluid" style="width:300px;">
                <p>
                    <br>
                    Program pembersihan dan perbaikan jalan. Yang dilakukan oleh para warga Desa Sibandang dan di tugaskan oleh Kepala Desa, demi menjaga kelestarian lingkungan tersebut
                </p>
            </div>

            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
                <img src="img/a7.jpeg" class="img-fluid" style="width:300px;">
                <p>
                    <br>
                    Program pembersihan dan perbaikan jalan. Yang dilakukan oleh para warga Desa Sibandang dan di tugaskan oleh Kepala Desa, demi menjaga kelestarian lingkungan tersebut
                </p>
            </div>
        </div>
    </div>
</div>
<br><br>

<?php include('../_partials/bottom.php') ?>