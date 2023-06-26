<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

try {
    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
            // Logo
            $this->Image('../../pages/galeri/img/a5.jpeg', 20, 5, 22);

            // Arial bold 15
            $this->SetFont('Times', 'B', 12);
            // Move to the right
            // $this->Cell(60);
            // Title
            $this->Cell(308, 8, 'DESA. SIBANDANG, KEC. MUARA', 0, 1, 'C');
            $this->Cell(308, 8, 'KABUPATEN TAPANULI UTARA', 0, 1, 'C');
            // Line break
            $this->Ln(5);

            $this->SetFont('Times', 'BU', 12);
            for ($i = 0; $i < 10; $i++) {
                $this->Cell(308, 0, '', 1, 1, 'C');
            }

            $this->Ln(1);

            $this->Cell(308, 8, 'LAPORAN DATA PERMOHONAN SURAT', 0, 1, 'C');
            $this->Ln(2);

            $this->SetFont('Times', 'B', 8);

            // header tabel
            $this->cell(8, 7, 'NO.', 1, 0, 'C');
            $this->cell(40, 7, 'NIK', 1, 0, 'C');
            $this->cell(40, 7, 'NAMA', 1, 0, 'C');
            $this->cell(40, 7, 'NOMOR HANPHONE', 1, 0, 'C');
            $this->cell(40, 7, 'JENIS PEMOHON', 1, 0, 'C');
            $this->cell(40, 7, 'STATUS PEMOHONAN', 1, 1, 'C');
        }

        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);
            // Page number
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    // ambil dari database
    $query = "SELECT * FROM permohonan_surat";
    $hasil = mysqli_query($db, $query);
    $permohonan_surat = array();
    while ($row = mysqli_fetch_assoc($hasil)) {
        $permohonan_surat[] = $row;
    }

    $pdf = new PDF('L', 'mm', [210, 330]);
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // set font
    $pdf->SetFont('Times', '', 7);

    // set penomoran
    $nomor = 1;

    foreach ($permohonan_surat as $surat) {
        $pdf->cell(8, 7, $nomor++ . '.', 1, 0, 'C');
        $pdf->cell(40, 7, strtoupper($surat['nik']), 1, 0, 'C');
        $pdf->cell(40, 7, substr(strtoupper($surat['nama']), 0, 17), 1, 0, 'L');
        $pdf->cell(40, 7, substr(strtoupper($surat['nohp']), 0, 17), 1, 0, 'L');
        $pdf->cell(40, 7, substr(strtoupper($surat['jenis']), 0, 17), 1, 0, 'L');
        $pdf->cell(40, 7, substr(strtoupper($surat['status']), 0, 17), 1, 1, 'L');
    }

    $pdf->Ln(10);

    // Output the PDF in the browser
    $pdf->Output();
} catch (Exception $e) {
    echo 'An error occurred: ' . $e->getMessage();
}
