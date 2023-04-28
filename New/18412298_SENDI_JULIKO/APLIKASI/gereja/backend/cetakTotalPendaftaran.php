<?php
    // memanggil library FPDF
    require('../fpdf/fpdf.php');
    include 'koneksi.php';
    
    // intance object dan memberikan pengaturan halaman PDF
    $pdf=new FPDF('L','mm','A4');
    $pdf->AddPage();
    
    $pdf->SetFont('Times','B',13);
    $pdf->Cell(270,10,'Total Pendaftaran',0,0,'C');

    //Data Pendaftaran Kelas Baptis
    $pdf->Cell(10,15,'',0,1,);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(10,7,'NO',1,0,'C');
    $pdf->Cell(50,7,'TANGGAL DAFTAR' ,1,0,'C');
    $pdf->Cell(50,7,'USERNAME' ,1,0,'C');
    $pdf->Cell(50,7,'NAMA LENGKAP' ,1,0,'C');

    $pdf->Text(10,24,"Pendaftaran Kelas Baptis");
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Times','',10);
    $no=1;
    $sql = mysqli_query($con,"SELECT  * FROM tbdaftarkelasbaptis inner join tbuser on tbdaftarkelasbaptis.username = tbuser.username");
    while($data = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6, $no++,1,0,'C');
        $pdf->Cell(50,6, $data['tanggalDaftar'],1,0);
        $pdf->Cell(50,6, $data['username'],1,0);
        $pdf->Cell(50,6, $data['namaLengkap'],1,1);
    }
    //Data pendaftaran pembaptisan

    $pdf->Cell(10,15,'',0,1,);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(10,7,'NO',1,0,'C');
    $pdf->Cell(50,7,'TANGGAL DAFTAR' ,1,0,'C');
    $pdf->Cell(50,7,'USERNAME' ,1,0,'C');
    $pdf->Cell(50,7,'NAMA LENGKAP' ,1,0,'C');
    $pdf->Cell(50,7,'OPSI BAPTIS' ,1,0,'C');
    
    $pdf->Text(10,58,"Pendaftaran Pembaptisan");
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Times','',10);
    $no=1;
    $sql = mysqli_query($con,"SELECT  * FROM tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username");
    while($data = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6, $no++,1,0,'C');
        $pdf->Cell(50,6, $data['tanggalDaftar'],1,0);
        $pdf->Cell(50,6, $data['username'],1,0);
        $pdf->Cell(50,6, $data['namaLengkap'],1,0);
        $pdf->Cell(50,6, $data['opsiBaptis'],1,1);
    }
    //Data pendaftaran pembaptisan
    $pdf->Cell(10,15,'',0,1,);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(10,7,'NO',1,0,'C');
    $pdf->Cell(50,7,'TANGGAL DAFTAR' ,1,0,'C');
    $pdf->Cell(50,7,'USERNAME' ,1,0,'C');
    $pdf->Cell(50,7,'NAMA LENGKAP' ,1,0,'C');
    $pdf->Cell(50,7,'NAMA PASANGAN' ,1,0,'C');

    $pdf->Text(10,98,"Pendaftaran Kelas Bimbingan Pranikah");
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Times','',10);
    $no=1;
    $sql = mysqli_query($con,"SELECT  * FROM tbdaftarpranikah inner join tbuser on tbdaftarpranikah.username = tbuser.username");
    while($data = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6, $no++,1,0,'C');
        $pdf->Cell(50,6, $data['tanggalDaftar'],1,0);
        $pdf->Cell(50,6, $data['username'],1,0);
        $pdf->Cell(50,6, $data['namaLengkap'],1,0);
        $pdf->Cell(50,6, $data['namaPasangan'],1,1);   
    }
    //Data pendaftaran Pemberkatan Pernikahan
    $pdf->Cell(10,15,'',0,1,);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(10,7,'NO',1,0,'C');
    $pdf->Cell(35,7,'TANGGAL DAFTAR' ,1,0,'C');
    $pdf->Cell(35,7,'USERNAME' ,1,0,'C');
    $pdf->Cell(35,7,'NAMA LENGKAP' ,1,0,'C');
    $pdf->Cell(35,7,'NAMA PASANGAN' ,1,0,'C');
    $pdf->Cell(50,7,'TANGGAL PEMBERKATAN' ,1,0,'C');
    $pdf->Cell(50,7,'WAKTU PEMBERKATAN' ,1,0,'C');    
    
    $pdf->Text(10,132,"Pendaftaran Pemberkatan Pernikahan");
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Times','',10);
    $no=1;
    $sql = mysqli_query($con,"SELECT  * FROM tbdaftarpemberkatan inner join tbuser on tbdaftarpemberkatan.username = tbuser.username");
    while($data = mysqli_fetch_array($sql)){
        $pdf->Cell(10,6, $no++,1,0,'C');
        $pdf->Cell(35,6, $data['tanggalDaftar'],1,0);
        $pdf->Cell(35,6, $data['username'],1,0);
        $pdf->Cell(35,6, $data['namaLengkap'],1,0);
        $pdf->Cell(35,6, $data['namaPasangan'],1,0);
        $pdf->Cell(50,6, $data['tanggalPemberkatan'],1,0);
        $pdf->Cell(50,6, $data['waktuPemberkatan'],1,1);
    }
 
$pdf->Output('D', 'laporan-totalpendaftaran.pdf');
 
?>