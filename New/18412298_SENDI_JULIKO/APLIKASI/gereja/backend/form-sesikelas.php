<!DOCTYPE html>
<html dir="ltr" lang="en">
  <?php 
    session_start();
  ?>
  <head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/select2/dist/css/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/jquery-minicolors/jquery.minicolors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/quill/dist/quill.snow.css"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- CSS untuk gaya cetakan -->
    <style>
      @media print {
      body * {
        visibility: hidden;
      }
      .modal-body, .modal-body * {
        visibility: visible;
      }
      .modal-body {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
      }
    }
    </style>

  </head>

  <body onload="loading()">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >

      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <?php include "header.php"; ?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Form Sesi Kelas</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Isi Data Sesi Kelas</h4>
                    <div class="form-group row">
                      <label
                        for="idKelas"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Pilih Kelas</label
                      >
                      <div class="col-md-9">
                        <select name="idKelas" id="idKelas" class="form-select">
                          <option disabled selected>-- Pilih Kelas --</option>
                          <?php
                            include "koneksi.php";
                            $sql = mysqli_query($con, "select * from tbkelas");
                            while($data = mysqli_fetch_array($sql)){
                              $idKelas = $data['idKelas'];
                              $namaKelas = $data['namaKelas'];
                              ?>
                                <option value="<?php echo $idKelas ?>"><?php echo $namaKelas; ?></option>
                              <?php
                            } 
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="namaSesi"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama Sesi</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="namaSesi"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="hariSesi"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Hari Sesi</label
                      >
                      <div class="col-md-9">
                        <select name="hariSesi" id="hariSesi" class="form-select">
                          <option disabled selected>-- Pilih Hari --</option>
                          <option value="Senin">Senin</option>
                          <option value="Selasa">Selasa</option>
                          <option value="Rabu">Rabu</option>
                          <option value="Kamis">Kamis</option>
                          <option value="Jum\'at">Jum'at</option>
                          <option value="Sabtu">Sabtu</option>
                          <option value="Minggu">Minggu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="waktuMulai"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Waktu Mulai</label
                      >
                      <div class="col-md-2">
                        <input
                          type="time"
                          class="form-control"
                          id="waktuMulai"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="waktuAkhir"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Waktu Akhir</label
                      >
                      <div class="col-md-2">
                        <input
                          type="time"
                          class="form-control"
                          id="waktuAkhir"
                        />
                      </div>
                    </div>    
                  </div>  
                  <div class="border-top">
                    <div class="card-body">
                          <input id="cmd" type="button" class="btn btn-primary float-end mb-3" value="Simpan" onclick="simpan()">
                    </div>    
                  </div>
                </form>
              </div>
            </div>
          </div> 
          <div id="tableku">
          </div>
          <input type="button" class="btn btn-primary float-end mb-3" name="tes" id="tes" value="Tes Modal" data-bs-toggle="modal" data-bs-target="#modalCetak">
          <div class="col-md-12">
          <div class="modal fade" id="modalCetak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cetak</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div id="tableku"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="cobaPrint" class="btn btn-primary" onclick="window.print()">Print</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p id="hitungJumlahData"></p>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
  <script type="text/javascript">
    var idSesiKelasskrg = "";

    function ajaxku(url, data){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var dataku = this.responseText;
          console.log(dataku);
          var bagi = dataku.split("###");

          if(bagi[1] == "simpan"){
            alert("Sukses: Data telah tersimpan");
          }else if(bagi[1] == "namasesiada"){
            alert("Error: Nama Sesi Telah Ada");
          }else if (bagi[1] == "ubah") {
            alert("Error: Data telah berubah");
          }else if (bagi[1] == "hapus") {
            alert("Error: Data telah terhapus");
          }

          document.getElementById("tableku").innerHTML = bagi[2];

        }
      };
      xhttp.open("POST", url, true);
      xhttp.send(data);
    }
    
    function loading(){
      ajaxku("proses-sesikelas.php");
    }

    function resetForm(){
      document.getElementById("idKelas").value = "-1";
      document.getElementById("namaSesi").value = "";
      document.getElementById("hariSesi").value = "-1";
      document.getElementById("waktuMulai").value = "";
      document.getElementById("waktuAkhir").value="";
      document.getElementById("cmd").value = "Simpan";
      document.getElementById("idKelas").focus();
    }

    function simpan(){
      let idKelas = document.getElementById("idKelas").value
      let namaSesi = document.getElementById("namaSesi").value;
      let hariSesi = document.getElementById("hariSesi").value;
      let waktuMulai = document.getElementById("waktuMulai").value;
      let waktuAkhir = document.getElementById ("waktuAkhir").value;
      let cmd = document.getElementById("cmd").value;


      let data = new FormData();
      data.append("idKelas", idKelas)
      data.append("namaSesi", namaSesi);
      data.append("hariSesi", hariSesi);
      data.append("waktuMulai", waktuMulai);
      data.append("waktuAkhir", waktuAkhir);
      data.append("cmd", cmd);

      if(cmd == "Ubah"){
        if(confirm("Apakah anda ingin mengubah data ini?")){
          data.append("idSesiKelas", idSesiKelasskrg);
          ajaxku("proses-sesikelas.php", data);
        }
      }
      else{
        ajaxku("proses-sesikelas.php", data);
      }
      resetForm();
    }

    function ubah(idSesiKelas, idKelas,  namaSesi, hariSesi, waktuMulai, waktuAkhir){
      idSesiKelasskrg = idSesiKelas;
      document.getElementById("idKelas").value = idKelas;
      document.getElementById("namaSesi").value = namaSesi;
      document.getElementById("hariSesi").value = hariSesi;
      document.getElementById("waktuMulai").value = waktuMulai;
      document.getElementById("waktuAkhir").value = waktuAkhir;
      document.getElementById("cmd").value = "Ubah";
      document.getElementById("idKelas").focus();
    }

    function hapus(idSesiKelas){
      if (confirm("Apakah anda yakin ingin menghapus data ini ?")) {
        let data = new FormData();
        data.append("cmd", "Hapus");
        data.append("idSesiKelas", idSesiKelas);

        ajaxku("proses-sesikelas.php", data);
      }
    }
    
    // function hitungJumlahData(){
    //   document.addEventListener("DOMContentLoaded", function(){
    //     let table = document.getElementById("tableku");
    //     let hitungBaris = 0;

    //     if (table) {
    //       hitungBaris = table.getElementsByClassName("tr-body");
    //     }

    //     if (hitungBaris === 0) {
    //     document.getElementById("hitungJumlahData").innerHTML = "Tidak ada data.";
    //     } else {
    //     document.getElementById("hitungJumlahData").innerHTML = "Jumlah Data pada table: " + hitungBaris.length;
    //     }
    //   });
    // }
    // hitungJumlahData();
      
    // let table = document.getElementById("tableku");
    // let hitungBaris = 0;

    //   if (table) {
    //     // hitungBaris = table.getElementsByClassName("tr-body").length;
    //   } 
    // document.getElementById("hitungJumlahData").innerHTML = "Jumlah data dalam tabel: " + table.getElementsByClassName("tr-body").length;
  </script>
</html>