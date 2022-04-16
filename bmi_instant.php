<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>GetShayna by BuildWith Angga</title>
      <link href="assets/css/bmi_instant.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
      <section style="background-image: linear-gradient(#ffffff, #aafae5, #aafae5, #aafae5, #aafae5, #aafae5, #ffffff);" class="h-100 w-100" style="box-sizing: border-box;">
        <div id="bmi_instant" class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row"
          style="font-family: 'Poppins', sans-serif">
          <div class="position-relative d-none d-lg-block h-100 width-left">
            <img class="position-absolute img-fluid centered"
              src="assets/img/bmi.png"
              alt="" />
          </div>
          <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
            <div class="right mx-lg-0 mx-auto">
              <div style="margin-bottom:1rem" class="align-items-center justify-content-center d-lg-none d-flex">
                <img class="img-fluid"
                  src="assets/img/bmi.jpg"
                  alt="" />
              </div>
              <h3 class="title-text">Instant <span style="color: #E98300;">IMT Kalkulator</span></h3>
              <p class="caption-text">
                Silahkan isi data-data dibawah ini, untuk mengetahui nilai IMT anda.
              </p>
              <form style="margin-top: 1rem" class="form-horizontal" action="index.php" method="POST">
                <div style="margin-bottom: 1.3rem">
                  <label for="tb" class="d-block input-label">Berapa tinggi Anda?</label>
                  <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="text" name="tb" id="tb" placeholder="Input tinggi badan Anda! (cm)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1.3rem">
                  <label for="bb" class="d-block input-label">Berapa berat badan Anda?</label>
                  <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="text" name="bb" id="bb" placeholder="Input berat badan Anda! (kg)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1.3rem">
                  <label for="usia" class="d-block input-label">Berapa usia Anda?</label>
                  <div class="d-flex w-100 div-input">
                    <input class="input-field border-0" type="number" name="usia" id="usia" placeholder="Usia Anda saat ini! (tahun)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="gender" class="input-label">Gender</label> 
                  <div class="d-flex w-100 div-input">
                    <select id="gender" name="gender" required="required" class="input-field border-0 custom-select">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <input value="Hitung" class="btn btn-fill text-white d-block w-100" type="submit" name="proses">
              </form>
              <p class="text-center bottom-caption">
                Cek secara berkala?
                <a href="data_diri.php"><span class="green-bottom-caption">Ayo isi data diri</span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="hasil col-md-12" style="padding-bottom: 3rem;">
            <?php
              require_once 'assets/class/class_pasien.php';
              require_once 'assets/class/class_bmi.php';

              $proses= $_POST['proses'];
              $berat_badan = $_POST['bb'];
              $tinggi_badan = $_POST['tb'];
              $gender = $_POST['gender'];
              $usia = $_POST['usia'];

              $pasien_instant = new BMI('P001', 'instant', 'instant', 'instant', 'instant', $gender, $berat_badan, $tinggi_badan);
            
              if (!empty($proses)){
                echo '<h1 class="title-text-big" style="font: 600 2.5rem/2.875rem Poppins, sans-serif;color:#39465b;">Nilai Index Masa Tubuh (IMT) Anda adalah '.'<span style="color:#E98300;font-size:3rem">'.$pasien_instant->hitung_BMI().'</span>'.'</h1>';
                echo $pasien_instant->gambar_BMI();
                echo '<h1 class="title-text" style="font: 600 1.875rem/2.25rem Poppins, sans-serif;color:#39465b;margin-top:1rem">Anda '.$pasien_instant->status_BMI().'</h1>';           
              };
            ?>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>