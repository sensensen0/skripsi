<!DOCTYPE html>
<html dir="ltr" lang="en">
  <?php 
    session_start();

    include "koneksi.php";
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
    <title>Daftar Baptis</title>
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
      <?php include "header.php" ?>
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
              <h4 class="page-title">Verifikasi Daftar Pembaptisan</h4>
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
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <form class="form-horizontal">
                          <div class="card-body">
                              <h4 class="card-title">Tabel Data</h4>
                              <table class="table table-responsive table-bordered">
                                  <thead class="table-dark">
                                      <tr>
                                          <td>ID Daftar</td>
                                          <td>Tanggal Daftar</td>
                                          <td>Username</td>
                                          <td>Nama Lengkap</td>
                                          <td>Opsi Baptis</td>
                                          <td>Ukuran Jubah</td>
                                          <td>Upload Foto</td>
                                          <td>Status Verifikasi</td>
                                          <td>Aksi</td>
                                      </tr>
                                  </thead>
                              <?php 
                                  $sql = mysqli_query($con, "select * from tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username");
                                  while($data = mysqli_fetch_array($sql)){    
                                      $idDaftarBaptis = $data[0];
                                      $tanggalDaftar = $data[1];
                                      $username = $data[2];
                                      $namaLengkap = $data['namaLengkap'];
                                      $opsiBaptis = $data[3];
                                      $ukuranJubah = $data[4];
                                      $uploadFoto = $data[5];
                                      $statusVerifikasi = $data[6];

                                      ?>
                                          <tbody>
                                              <td><?php echo $idDaftarBaptis; ?></td>
                                              <td><?php echo $tanggalDaftar; ?></td>
                                              <td><?php echo $username; ?></td>
                                              <td><?php echo $namaLengkap; ?></td>
                                              <td><?php echo $opsiBaptis; ?></td>
                                              <td><?php echo $ukuranJubah; ?></td>
                                              <td>
                                                  <img src="uploads/fotoprofile/<?php echo $uploadFoto ?>" style="width:200px;" alt="">
                                              </td>
                                              <td id="statusVerifikasi"><?php if($statusVerifikasi=="0"){echo $statusVerifikasi="Belum terverifikasi";}else if($statusVerifikasi=="1"){echo $statusVerifikasi="Telah terverifikasi";}?></td>
                                              <td  class="text-center">
                                                  <input id = "accept" type="button" class="btn btn-primary btn-success center col-md-auto mb-1" value="Terima" onclick="terima()">
                                                  <input id = "decline" type="button" class="btn btn-danger col-md-auto mb-1" value="Tolak" onclick="tolak(<?php echo "'$idDaftarBaptis'"; ?>)">
                                              </td>
                                          </tbody>
                                      <?php
                                    }
                                ?>
                              </table>
                          </div>
                      </form>
                  </div>
               </div>
             </div> 
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <!-- <div id="tableku"></div> -->
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
    var idDaftarBaptisSkrg = "";

    function ajaxku(url, data){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var dataku = this.responseText;

          var bagi = dataku.split("###");

          if(bagi[1] == "terima"){
            alert("Verifikasi berhasil!");
          }else if (bagi[1] == "tolak") {
            alert("Verifikasi ditolak, Data dihapus");
          }
        }
      };
      xhttp.open("POST", url, true);
      xhttp.send(data);
    }
    
    function loading(){
      ajaxku("proses-daftarbaptis.php");
    }

    function terima(){

      let statusVerifikasi = document.getElementById("statusVerifikasi").value;
      let accept = document.getElementById("accept").value;

      let data = new FormData();
      data.append("statusVerifikasi", statusVerifikasi);
      data.append("accept", accept);

      if( accept == "Terima") {
        if(confirm("Apakah anda yakin verifikasi data ini?")) {
          data.append("idDaftarBaptis", idDaftarBaptisSkrg);
          ajaxku("proses-daftarbaptis.php", data);
          window.location.reload();
        }
      }
    }

    function tolak(idDaftarBaptis){
     let decline = document.getElementById("decline").value;

      if( decline == "Tolak") {
        if(confirm("Apakah anda yakin menolak verifikasi data ini?")) {
          let data = new FormData();
          data.append("decline", "Tolak");
          data.append("idDaftarBaptis", idDaftarBaptis);

          ajaxku("proses-daftarBaptis.php", data);
          window.location.reload();
        }
      }
    }
  </script>
</html>
