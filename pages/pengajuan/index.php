<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Permohonan Surat</h1>
<?php include('../user/_partials/menu.php') ?>

<?php include('data-index.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-striped table-bordered table-condensed table-hover" id="datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor Handphone</th>
                    <th>Jenis Permohonan</th>
                    <th>Status Permohonan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_permohonan_surat as $permohonan_surat) : ?>
                    <tr>
                        <td><?= $permohonan_surat['id'] ?></td>
                        <td><?= $permohonan_surat['nik'] ?></td>
                        <td><?= $permohonan_surat['nama'] ?></td>
                        <td><?= $permohonan_surat['nohp'] ?></td>
                        <td><?= $permohonan_surat['jenis'] ?></td>
                        <td>
                            <?php if ($permohonan_surat['status'] == 'Selesai') : ?>
                                <span class="text-success">
                                    <?= $permohonan_surat['status'] ?>
                                </span>
                            <?php elseif ($permohonan_surat['status'] == 'Ditolak') : ?>
                                <span class="text-danger">
                                    <?= $permohonan_surat['status'] ?>
                                </span>
                            <?php else : ?>
                                <span class="text-info">
                                    <?= $permohonan_surat['status'] ?>
                                </span>
                            <?php endif; ?>

                        </td>
                        <td>
                            <a class="btn btn-warning" href="update.php?status=Selesai&id=<?= $permohonan_surat['id'] ?>">
                                Selesai
                            </a>
                            <a class="btn btn-danger" href="update.php?status=Ditolak&id=<?= $permohonan_surat['id'] ?>">
                                Ditolak
                            </a>
                            <a class="btn btn-info" href="update.php?status=Ditangguhkan&id=<?= $permohonan_surat['id'] ?>">
                                Ditangguhkan
                            </a>
                        </td>



                        <td>
                            <!-- Single button -->
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="show.php?id=<?= $permohonan_surat['id'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php if ($permohonan_surat['status'] !== 'selesai') : ?>
                                        <li>
                                            <a href="ubah-status.php?id=<?= $permohonan_surat['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin mengubah status permohonan ini menjadi selesai?')">
                                                <span class="glyphicon glyphicon-edit"></span> Ubah
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="delete.php?id=<?= $permohonan_surat['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                                            <i class="glyphicon glyphicon-trash"></i> Hapus
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php include('../_partials/bottom.php') ?>
    </div>
</div>