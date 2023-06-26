<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
            $this->Image('../../pages/galeri/img/a5.jpeg', 20, 5, 22);

    	// Arial bold 15
    	$this->SetFont('Times','B',15);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
            $this->Cell(308, 8, 'DESA. SIBANDANG, KEC. MUARA', 0, 1, 'C');
            $this->Cell(308, 8, 'KABUPATEN TAPANULI UTARA', 0, 1, 'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(308,8,'LAPORAN DATA BLT',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);

        // header tabel
        $this->cell(10,7,'NO.',1,0,'C');
        $this->cell(60,7,'Nama Lengkap',1,0,'C');
        $this->cell(60,7,'Alamat',1,0,'C');
        $this->cell(40,7,'Desa',1,0,'C');
        $this->cell(40,7,'NIK',1,0,'C');
        $this->cell(30,7,'No KK',1,0,'C');
        $this->cell(35,7,'Jenis Kelamin',1,0,'C');
        $this->cell(30,7,'Jumlah Diterima',1,1,'C');

    }

    // Page footer
    function Footer()
    {
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ambil dari database
$query = "SELECT * FROM data_blt";
$hasil = mysqli_query($db, $query);
$data_pegawai = array();
while ($row = mysqli_fetch_assoc($hasil)) {
  $data_pegawai[] = $row;
}

$pdf = new PDF('L', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',9);

// set penomoran
$nomor = 1;

foreach ($data_pegawai as $pegawai) {

    $pdf->cell(10, 7, $nomor++ . '.', 1, 0, 'C');
    $pdf->cell(60, 7, strtoupper($pegawai['nama']), 1, 0, 'C');
    $pdf->cell(60, 7, strtoupper($pegawai['alamat']), 1, 0, 'L');
    $pdf->cell(40, 7, strtoupper($pegawai['desa']), 1, 0, 'C');
    $pdf->cell(40, 7, strtoupper($pegawai['nik']), 1, 0, 'L');
    $pdf->cell(30, 7, strtoupper($pegawai['no_kk']), 1, 0, 'C');
    $pdf->cell(35, 7, strtoupper($pegawai['jenis_kelamin']), 1, 0, 'C');
    $pdf->cell(30, 7, strtoupper(number_format($pegawai['jumlah_diterima'], 0, ',', '.')), 1, 1, 'C');

}

	$pdf->Ln(10);

$pdf->Output();
