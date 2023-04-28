<?php
    // memanggil library FPDF
    require('../fpdf/fpdf.php');
    include 'koneksi.php';
    
    // intance object dan memberikan pengaturan halaman PDF
    $pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    
    $pdf->SetFont('Times','B',13);
    $pdf->Cell(200,10,'DATA PENDAFTARAN PEMBAPTISAN',0,0,'C');
    
    $pdf->Cell(10,15,'',0,1,);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(10,7,'NO',1,0,'C');
    $pdf->Cell(50,7,'TANGGAL DAFTAR' ,1,0,'C');
    $pdf->Cell(50,7,'USERNAME' ,1,0,'C');
    $pdf->Cell(50,7,'NAMA LENGKAP' ,1,0,'C');
    $pdf->Cell(30,7,'OPSI BAPTIS' ,1,0,'C');
    
    
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Times','',10);
    $no=1;
    $sql = mysqli_query($con,"SELECT  * FROM tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username");
    while($data = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6, $no++,1,0,'C');
        $pdf->Cell(50,6, $data['tanggalDaftar'],1,0);
        $pdf->Cell(50,6, $data['username'],1,0);
        $pdf->Cell(50,6, $data['namaLengkap'],1,0);
        $pdf->Cell(30,6, $data['opsiBaptis'],1,1);
    }
 
$pdf->Output('D', 'laporan-daftarbaptis.pdf');
 
?>