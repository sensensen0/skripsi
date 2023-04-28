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
              <h4 class="page-title">Form Kelola Data Berita</h4>
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
                    <h4 class="card-title">Isi Data Berita</h4>
                    <div class="form-group row">
                      <label
                        for="judulBerita"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Judul Berita</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control text-uppercase"
                          id="judulBerita"
                          placeholder="xx-100-xx"
                          required
                        />
                      </div>
                    </div>                    
                    <div class="form-group row">
                      <label
                        for="isiBerita"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Isi Berita</label
                      >
                      <div class="col-sm-9">
                        <textarea class="form-control" placeholder="xx-500-xx" id="isiBerita" rows="10" required></textarea>
                      </div>
                    </div>
                    <form action="/upload" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label
                          for="gambarCover"
                          class="col-sm-3 text-end control-label col-form-label"
                          >Gambar Cover</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="file"
                            class="form-control"
                            id="gambarCover"
                            accept=".jpg, .jpeg, .png"
                            max-size="5000"
                            onchange="validateImageFile"
                            placeholder="Masukkan gambar cover"
                          />
                        </div>
                        <span id="errorMsg" style="color:red;"></span>
                      </div>
                      <div class="form-group row">
                        <label
                          for="fileBerita"
                          class="col-sm-3 text-end control-label col-form-label"
                          >File</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="file"
                            class="form-control"
                            id="fileBerita"
                            accept=".pdf"
                            max-size="5000"
                            onchange="validateFile"
                            placeholder="Masukkan file pdf (opsional)"
                          />
                        </div>
                        <span id="errorMsg" style="color:red;"></span>
                      </div>         
                    </form>
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
          <div id="tableku"></div>
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
    var idBeritaskrg = "";

    function ajaxku(url, data){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var dataku = this.responseText;

          var bagi = dataku.split("###");

          if(bagi[1] == "simpan"){
            alert("Data telah tersimpan");
          }else if (bagi[1] == "ubah") {
            alert("Data telah berubah");
          }else if (bagi[1] == "hapus") {
            alert("Data telah terhapus");
          }

          document.getElementById("tableku").innerHTML = bagi[2]
        }
      };
      xhttp.open("POST", url, true);
      xhttp.send(data);
    }
    
    function loading(){
      ajaxku("proses-berita.php");
    }

    function resetForm(){
      document.getElementById("judulBerita").value = "";
      document.getElementById("isiBerita").value = "";
      document.getElementById("gambarCover").value = "";
      document.getElementById("fileBerita").value="";
      document.getElementById("cmd").value = "Simpan";
      document.getElementById("judulBerita").focus();
    }

    function simpan(){
      let judulBerita = document.getElementById("judulBerita").value;
      let isiBerita = document.getElementById("isiBerita").value;
      let gambarCover = document.getElementById("gambarCover").value;
      let fileBerita= document.getElementById("fileBerita").value;
      let cmd = document.getElementById("cmd").value;


      let data = new FormData();
      data.append("judulBerita", judulBerita);
      data.append("isiBerita", isiBerita);
      data.append("gambarCover", gambarCover);
      data.append("fileBerita", fileBerita);
      data.append("cmd", cmd);

      if(cmd == "Ubah"){
        if(confirm("Apakah anda ingin mengubah data ini?")){
          data.append("idBerita", idBeritaskrg);
          ajaxku("proses-berita.php", data);
        }
      }
      else{
        ajaxku("proses-berita.php", data);
      }
      resetForm();
    }

    function ubah(idBerita, judulBerita, isiBerita, gambarCover, fileBerita){
      idBeritaskrg = idBerita;
      document.getElementById("judulBerita").value = judulBerita;
      document.getElementById("isiBerita").value = isiBerita;
      document.getElementById("gambarCover").value = gambarCover;
      document.getElementById("filberitar").value = fileBerita;
      document.getElementById("cmd").value = "Ubah";
    }

    function hapus(idBerita){
      if (confirm("Apakah anda yakin ingin menghapus data ini ?")) {
        let data = new FormData();
        data.append("cmd", "Hapus");
        data.append("idBerita", idBerita);

        ajaxku("proses-berita.php", data);
      }
    }

    function publish(){

    }
    function validateFile() {
      function validateImageFile() {
            var gambarCover = document.getElementById("gambarCover");
            var fileName = gambarCover.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

            if (!allowedExtensions.exec(fileName)) {
                document.getElementById("imageErrorMsg").innerText = "Harap pilih file gambar dengan ekstensi .jpg, .jpeg, atau .png!";
                gambarCover.value = "";
                return false;
            } else {
                document.getElementById("imageErrorMsg").innerText = "";
                return true;
            }
        }
        function validatePdfFile() {
            var fileBerita = document.getElementById("fileBerita");
            var fileName = fileBerita.value;
            var allowedExtensions = /(\.pdf)$/i;

            if (!allowedExtensions.exec(fileName)) {
                document.getElementById("pdfErrorMsg").innerText = "Harap pilih file PDF dengan ekstensi .pdf!";
                fileBerita.value = "";
                return false;
            } else {
                document.getElementById("pdfErrorMsg").innerText = "";
                return true;
            }
        }
      }
          
  </script>
</html>
