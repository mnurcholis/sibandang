<?php include('../_partials/top.php') ?>

<h1 class="page-header">Detail Data Permohonan Surat</h1>
<!-- <?php include('../user/_partials/menu.php') ?> -->

<?php include('data-show.php') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <h3>A. Data Permohonan</h3>
        <table class="table table-striped table-middle">
            <tr>
                <th width="20%">NIK</th>
                <td width="1%">:</td>
                <td><?php echo $data_permohonan_surat[0]['nik'] ?></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>:</td>
                <td><?php echo $data_permohonan_surat[0]['nama'] ?></td>
            </tr>
            <tr>
                <th>Nomor Handphone</th>
                <td>:</td>
                <td><?php echo $data_permohonan_surat[0]['nohp'] ?></td>
            </tr>
            <tr>
                <th>Jenis Pengajuan</th>
                <td>:</td>
                <td><?php echo $data_permohonan_surat[0]['jenis'] ?></td>
            </tr>
            <tr>
                <th>Lampiran Surat</th>
                <td>:</td>
                <td>
                    <?php
                    if ($data_permohonan_surat[0]['file_lampiran'] == null) {
                        echo "Data Tidak Ada...";
                    } else {
                    ?>
                        <embed src="<?php echo '../../user/uploads/' . $data_permohonan_surat[0]['file_lampiran'] ?>" type="application/pdf" width="100%" height="600px" />
                    <?php
                    }
                    ?>
                </td>
            </tr>
        </table>

        <?php include('../_partials/bottom.php') ?>
    </div>
</div>