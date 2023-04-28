<?php
    // memanggil library FPDF
    require('../fpdf/fpdf.php');
    include 'koneksi.php';
    
    // intance object dan memberikan pengaturan halaman PDF
    $pdf=new FPDF('L','mm','A4');
    $pdf->AddPage();
    
    $pdf->SetFont('Times','B',13);
    $pdf->Cell(270,10,'PRESENSI KELAS BIMBINGAN PRANIKAH',0,0,'C');
    
    $pdf->Cell(10,15,'',0,1,);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(10,7,'NO',1,0,'C');
    $pdf->Cell(50,7,'NAMA LENGKAP' ,1,0,'C');
    $pdf->Cell(50,7,'NAMA PASANGAN' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    $pdf->Cell(15,7,'' ,1,0,'C');
    
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Times','',10);
    $no=1;
    $sql = mysqli_query($con,"SELECT  * FROM tbdaftarpranikah inner join tbuser on tbdaftarpranikah.username = tbuser.username");
    while($data = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6, $no++,1,0,'C');
        $pdf->Cell(50,6, $data['namaLengkap'],1,0);
        $pdf->Cell(50,6, $data['namaPasangan'],1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
        $pdf->Cell(15,6,'',1,0);
    }
 
$pdf->Output('D', 'cetak-presensipranikah.pdf');
 
?>