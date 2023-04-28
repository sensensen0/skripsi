<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <title>
            Login Akun
        </title>
        <style>
            body {
                overflow-x: hidden;
                background-image: url(../assets/img/bg1.jpg);
                background-size: cover;
                background-repeat: no-repeat;           
            }
            .link {
                text-decoration: none;
                color: white;
                
            }
            .link:hover{
                color: rgb(144, 144, 144);
            }
            .warnabg {
              background-color: rgb(77, 77, 77);
            }
        </style>
</head>
<body onload="loading()">
    <div class="container-fluid text-light">
        <div class="row">
          <div class="mask vh-100 vw-100" style="background-color: rgba(0, 0, 0, 0.4);">
            <div class="warnabg row text-center mb-3">
              <a href="index.htm"><img src="../assets/img/logo.png" alt="Logo gkkb serdam" width="120px" height="120px"></a>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-md-3">
                <form id="login-form">
                  <h1 class="text-center mb-4">Login Form</h1>
                  <div class="col-md-12 border border-light px-5 pt-5 pb-4">
                      <div class="mb-3 align-items-center">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan username">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
                      </div>
                      <div class="text-center">
                        <input type="button" class="btn btn-primary justify-content-center" value="Login" onclick="login()">
                      </div>
                      <div class="text-center">
                        <a class ="text-decoration-none" href="form-register.php"><p class="link fw-light">Belum punya akun?</p></a>
                      </div>
                      <div id="alert" class="alert d-none"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      function ajax (url, data){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (){
          if (this.readyState == 4 && this.status == 200) {
            var dataku = this.responseText;

            if (dataku == "login"){
                alert("Berhasil Login!");
                location.href="halamanUser.php";
            } else if(dataku == "gagal"){
                alert("Username atau Password Salah!");
                document.getElementById("username").value="";
                document.getElementById("password").value="";
                document.getElementById("username").focus();
            }
          }
        };
        xhttp.open("POST", url, true);
        xhttp.send(data);
      }
        
      function login(){
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        var data = new FormData;
        data.append("username", username);
        data.append("password", password);
            
        ajax("proses-login.php", data);
      }

      function loading(){
        ajax("proses-login.php");
      }
      let user = document.getElementById("username");
        user.addEventListener("keypress", function(event){
        if (event.key === "Enter") {
          event.preventDefault();
          alert("Username / Password belum diisi!");
          user.value="";
        }
      });

      let pwd = document.getElementById("password");
        pwd.addEventListener("keypress", function(event) {
          if (event.key === "Enter" && user.value === "") {
            event.preventDefault();
            alert("Username / Password belum diisi!");
            user.focus();
            pwd.value="";
          } else if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("login").click();
          }
      });  
    </script>
    <!-- end script -->
</body>
</html>