<?php
include('../../config/koneksi.php');

// Periksa apakah parameter ID permohonan telah diterima dari URL
if (isset($_GET['id'])) {
    $id_permohonan = $_GET['id'];

    // Lakukan validasi akses ke halaman ini, misalnya cek apakah pengguna telah login atau memiliki hak akses yang sesuai.

    // Periksa apakah permohonan dengan ID yang diberikan ada dalam database
    $query = "SELECT * FROM permohonan_surat WHERE id = $id_permohonan";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        // Permohonan ditemukan, lakukan pembaruan status menjadi "selesai"
        $update_query = "UPDATE permohonan_surat SET status = 'selesai' WHERE id = $id_permohonan";
        mysqli_query($db, $update_query);

        // Ambil nomor handphone dari kolom nohp
        $query = "SELECT nohp, nama FROM permohonan_surat WHERE id = $id_permohonan";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $no_hp = $row['nohp'];
        if (substr($no_hp, 0, 1) === '0') {
            $no_hp = '62' . substr($no_hp, 1);
        }
        $nama = $row['nama'];

        // Buat pesan
        $pesan = "Surat Pengajuan Atas nama $nama telah selesai,silakan ambil di kantor";

        // Encode URL pesan
        $pesan_encoded = urlencode($pesan);

        // Buat URL API WhatsApp
        $api_url = "https://dufol.com/botwa/?no=$no_hp&text=$pesan_encoded";

        // Kirim permintaan HTTP ke API WhatsApp
        file_get_contents($api_url);

        // Redirect pengguna kembali ke halaman data-index.php
        header('Location: index.php');
        exit;
    } else {
        // Jika permohonan tidak ditemukan, berikan pesan atau tindakan yang sesuai
        echo "Permohonan tidak ditemukan";
    }
} else {
    // Jika parameter ID tidak diberikan, berikan pesan atau tindakan yang sesuai
    echo "ID permohonan tidak diberikan";
}
?>