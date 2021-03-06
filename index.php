<!DOCTYPE html>
<html lang="en">
<head>
  <title>SISTEM TEMU JANJI VETERINAR KLINIK HAIWAN ALBY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>

  <!-- TAJUK UTAMA --> 
  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>SISTEM TEMU JANJI VETERINAR</h1>
    <p>KLINIK HAIWAN ALBY, MUAR, JOHOR</p> 
  </div>

  <div class="color-overlay">
  
  <!--Section 1--> 
  <div class="container mt-5">
    
    <div class="row">
      <div class="col-sm-4">
        <h3 style="text-align:center">PELANGGAN</h3>
        <p style="text-align:center">Log masuk / daftar akaun untuk pelanggan</p>
        <a href="login_pelanggan.php"><button type="button" class="btn btn-success">Log Masuk / Daftar Akaun</button></a>
      </div>
      <div class="col-sm-4">
        <h3 style="text-align:center">STAF KLINIK</h3>
        <p style="text-align:center">Log masuk untuk staf klinik</p>
        <a href="staf/login_staff.php"><button type="button" class="btn btn-success">Staf Klinik</button></a>
      </div>  
      <div class="col-sm-4">
        <h3>PENTADBIR SISTEM</h3>        
        <p>Log masuk untuk pentadbir sistem</p>
        <a href="pentadbir/login_admin.php"><button type="button" class="btn btn-success">Pentadbir Sistem</button></a>
      </div>
    </div>
    
    <div class="row">
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    </div>
  </div>

  <div class="footer">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? 2022
        <a>SISTEM TEMU JANJI VETERINAR KLINIK HAIWAN ALBY</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>

</div>
</body>
</html>

<style>
  html, body {
    background-image: url("media/cat_background.jpeg");
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: 100% 100%;

    /* no scroll, fixed one page */
    margin: 0;
    height: 100%;
    overflow: hidden
  }

  .color-overlay {
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    opacity: .7;
    position: absolute;
  }

  .footer {
    position: fixed;
    left: 0;
    right: 0;
    width: 100;
  }

</style>
