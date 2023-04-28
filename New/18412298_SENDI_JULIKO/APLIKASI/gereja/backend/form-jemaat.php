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
              <h4 class="page-title">Form Data User</h4>
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
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Isi Data Jemaat</h4>
                    <div class="form-group row">
                      <label
                        for="tanggalmasuk"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Tanggal Masuk</label
                      >
                      <div class="col-md-2">
                        <input
                          type="date"
                          class="form-control"
                          id="tanggalmasuk"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="namajemaat"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama Jemaat</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control text-uppercase"
                          id="namajemaat"
                          placeholder="Isi nama jemaat"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="tanggallahir"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Tanggal Lahir</label
                      >
                      <div class="col-md-2">
                        <input
                          type="date"
                          class="form-control"
                          id="tanggallahir"
                        />
                      </div>
                    </div>
                    <div class="form-group row d-flex flex-warp">
                      <div class="col-md-3 text-end">
                        <label
                            for="jk"
                            class="text-end control-label col-form-label"
                            >Jenis Kelamin
                        </label>
                      </div>
                      <div class="col-md-9">
                        <div class="form-check form-check-inline col-auto mt-2">
                          <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-Laki">
                          <label class="form-check-label" for="laki">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check form-check-inline col-auto mt-2">
                          <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                          <label class="form-check-label" for="perempuan">
                            Perempuan
                          </label>
                        </div>
                      </div>
                    </div>                    
                    <div class="form-group row">
                      <label
                        for="alamat"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Alamat</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="input-group-text"
                          class="form-control text-uppercase"
                          id="alamat"
                          placeholder="Masukkan alamat jemaat"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="nohp"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nomor Handphone</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="number"
                          class="form-control"
                          id="nohp"
                          placeholder="Masukkan nomor handphone jemaat"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-3 text-end">
                        <label
                            for="status"
                            class="text-end control-label col-form-label"
                            >Status
                        </label>
                      </div>
                      <div class="col-md-9">
                        <div class="form-check form-check-inline col-auto mt-2">
                          <input class="form-check-input" type="radio" name="status" id="menikah" value="Menikah">
                          <label class="form-check-label" for="menikah">
                            Menikah
                          </label>
                        </div>
                        <div class="form-check form-check-inline col-auto mt-2">
                          <input class="form-check-input" type="radio" name="status" id="belummenikah" value="Belum Menikah">
                          <label class="form-check-label" for="belummenikah">
                            Belum Menikah
                          </label>
                        </div>                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="pekerjaan"
                        class="col-md-3 text-end control-label col-form-label"
                        >Pekerjaan</label
                      >
                      <div class="col-md-9">
                        <select name="pekerjaan" id="pekerjaan" class="form-select">
                          <option disabled selected>-- Pilih pekerjaan --</option>
                          <option value="Tidak bekerja">Tidak bekerja</option>
                          <option value="Pelajar">Pelajar/Mahasiswa</option>
                          <option value="Karyawan">Karyawan</option>
                          <option value="Pengusaha">Pengusaha</option>
                          <option value="Self-employed">Self-Employed</option>
                        </select>
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
          </div>  -->
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
    var idjemaatskrg = "";

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
      ajaxku("proses-jemaat.php");
    }

    function resetForm(){
      document.getElementById("tanggalmasuk").value = "";
      document.getElementById("namajemaat").value = "";
      document.getElementById("tanggallahir").value = "";
      document.getElementById("laki").checked = false;
      document.getElementById("perempuan").checked = false
      document.getElementById("alamat").value = "";
      document.getElementById("nohp").value = "";
      document.getElementById("menikah").checked = false;
      document.getElementById("belummenikah").checked = false;
      document.getElementById("pekerjaan").value =  "";
      document.getElementById("cmd").value = "Simpan";
    }

    function simpan(){
      let tanggalmasuk = document.getElementById("tanggalmasuk").value;
      let namajemaat = document.getElementById("namajemaat").value;
      let tanggallahir = document.getElementById("tanggallahir").value;
      let jk = document.querySelector('input[name="jk"]:checked').value;
      let alamat = document.getElementById("alamat").value;
      let nohp = document.getElementById("nohp").value;
      let status = document.querySelector('input[name="status"]:checked').value;
      let pekerjaan = document.getElementById("pekerjaan").value;
      let cmd = document.getElementById("cmd").value;


      let data = new FormData();
      data.append("tanggalmasuk", tanggalmasuk);
      data.append("namajemaat", namajemaat);
      data.append("tanggallahir", tanggallahir);
      data.append("jk", jk);
      data.append("alamat", alamat);
      data.append("nohp", nohp);
      data.append("status", status);
      data.append("pekerjaan", pekerjaan);
      data.append("cmd", cmd);

      if(cmd == "Ubah"){
        if(confirm("Apakah anda ingin mengubah data ini?")){
          data.append("idjemaat", idjemaatskrg);
          ajaxku("proses-jemaat.php", data);
        }
      }
      else{
        ajaxku("proses-jemaat.php", data);
      }
      resetForm();
    }

    function ubah(idjemaat, tanggalmasuk, namajemaat, tanggallahir, jk, alamat, nohp, status, pekerjaan){
      idjemaatskrg = idjemaat;
      document.getElementById("tanggalmasuk").value = tanggalmasuk;
      document.getElementById("namajemaat").value = namajemaat;
      document.getElementById("tanggallahir").value = tanggallahir;
      document.querySelector(`input[name='jk'][value='${jk}']`).checked = true;
      document.querySelector(`input[name='status'][value='${status}']`).checked = true;
      document.getElementById("alamat").value = alamat; 
      document.getElementById("nohp").value = nohp;
      document.getElementById("pekerjaan").value = pekerjaan;
      document.getElementById("cmd").value = "Ubah";
    }

    function hapus(idjemaat){
      if (confirm("Apakah anda yakin ingin menghapus data ini ?")) {
        let data = new FormData();
        data.append("cmd", "Hapus");
        data.append("idjemaat", idjemaat);

        ajaxku("proses-jemaat.php", data);
      }
    }
  </script>
</html>
