<?php
function is_active($page)
{
    $uri = "$_SERVER[REQUEST_URI]";
    if (strpos($uri, $page)) {
        echo 'active';
    }
}
?>

<ul class="nav nav-sidebar">
    <li class="<?php is_active('dasbor'); ?>">
        <a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Dasbor</a>
    </li>
</ul>

<ul class="nav nav-sidebar">
    <li class="<?php is_active('pengajuan'); ?>">
        <a href="../pengajuan"><i class="glyphicon glyphicon-export"></i> Data Pengajuan</a>
    </li>
    <li class="<?php is_active('warga'); ?>">
        <a href="../warga"><i class="glyphicon glyphicon-copy"></i> Data Warga</a>
    </li>
    <li class="<?php is_active('pegawai'); ?>">
        <a href="../pegawai"><i class="glyphicon glyphicon-copy"></i> Data Pegawai</a>
    </li>
    <li class="<?php is_active('blt'); ?>">
        <a href="../blt"><i class="glyphicon glyphicon-book"></i> Data Penerima BLT</a>
    </li>
    <li class="<?php is_active('mutasi'); ?>">
        <a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>
    </li>
    <li class="<?php is_active('laporan'); ?>">
        <a href="../laporan"><i class="glyphicon glyphicon-export"></i> Laporan</a>
    </li>
</ul>


<?php if ($_SESSION['user']['status_user'] != 'RW') : ?>
    <ul class="nav nav-sidebar">
        <li class="<?php is_active('user'); ?>">

        </li>
    </ul>
<?php endif; ?>