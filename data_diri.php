<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>BMI - Form Data Diri</title>
      <link href="assets/css/bmi_instant.css" rel="stylesheet">
      <link rel="icon" href="assets/img/preview.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body style="background: linear-gradient(#F9FCFC, #F9FCFC) !important;">
      <section class="h-100 w-100" style="box-sizing: border-box;">
        <div style="padding: 1.5rem;" class="content-3-5 col-md-12 d-flex flex-column align-items-center nol">
          <h3 style="text-align:center;" class="title-text">Formulir Data Diri Membership <span style="color: #E98300;">BMI Check</span></h3>
          <p style="text-align:center;" class="caption-text">
            Silahkan isi data-data dibawah ini, untuk menjadi member dan Anda dapat melihat perkembangan BMI Anda.
          </p>
        </div>
        <div class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row-reverse"
          style="font-family: 'Poppins', sans-serif">
          <div class="position-relative d-none d-lg-block h-100 width-left">
            <img class="position-absolute img-fluid centered"
              src="assets/img/Checklist.jpg"
              alt="" />
          </div>
          <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
            <div class="right mx-lg-0 mx-auto">
              <div style="margin-bottom:1rem" class="align-items-center justify-content-center d-lg-none d-flex">
                <img class="img-fluid"
                  src="assets/img/Checklist.jpg"
                  alt="" />
              </div>
              <form style="margin-top: 1rem" class="form-horizontal" action="data_diri.php" method="POST">
                <div style="margin-bottom: 1rem">
                  <label for="nama" class="d-block input-label satu">Nama lengkap Anda!</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="text" name="nama" id="nama" placeholder="Input nama lengkap Anda!"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="email" class="d-block input-label satu">Email Anda?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="email" name="email" id="email" placeholder="Silahkan input yang valid!"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="tmp_lahir" class="d-block input-label satu">Tempat lahir Anda?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="text" name="tmp_lahir" id="tmp_lahir" placeholder="Silahkan input tempat lahir Anda!"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="tgl_lahir" class="d-block input-label satu">Tanggal lahir Anda?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Silahkan input tanggal lahir Anda!"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="usia" class="d-block input-label satu">Berapa usia Anda?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="number" name="usia" id="usia" placeholder="Usia Anda saat ini! (tahun)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="tb" class="d-block input-label satu">Berapa tinggi Anda?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="text" name="tb" id="tb" placeholder="Input tinggi badan Anda! (cm)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="bb" class="d-block input-label satu">Berapa berat badan Anda?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="text" name="bb" id="bb" placeholder="Input berat badan Anda! (kg)"
                      autocomplete="on" required />
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 1rem">
                  <label for="gender" class="input-label satu">Gender</label> 
                  <div class="d-flex w-100 div-input dua">
                    <select id="gender" name="gender" required="required" class="input-field border-0 custom-select">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div style="margin-bottom: 1rem">
                  <label for="tgl_bmi" class="d-block input-label satu">Tanggal pemeriksaan?</label>
                  <div class="d-flex w-100 div-input dua">
                    <input class="input-field border-0" type="date" name="tgl_bmi" id="tgl_bmi" placeholder="Silahkan input data yang sesuai"
                      autocomplete="on" required />
                  </div>
                </div>
                <input value="Isi Data Diri" class="btn btn-fill text-white d-block w-100" type="submit" name="proses">
              </form>
              <p class="text-center bottom-caption">
                Cek BMI Instant?
                <a href="index.php"><span class="green-bottom-caption">Disini</span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <?php
                require_once 'assets/class/class_pasien.php';
                require_once 'assets/class/class_bmi.php';
                require_once 'assets/class/class_bmipasien.php';

                $proses= $_POST['proses'];
                $nama = $_POST['nama'];
                $tmp_lahir = $_POST['tmp_lahir'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $email = $_POST['email'];
                $tinggi_badan = $_POST['tb'];
                $berat_badan = $_POST['bb'];
                $usia = $_POST['usia'];
                $gender = $_POST['gender'];
                $tgl_periksa = $_POST['tgl_bmi'];
                
                $pasien1 = new BMIPasien('P001', 'Ahmad', 'Bogor', '17 Oktober 2002', 'ahmad@gmail.com', 'L', 69.8, 169, '2022-01-10');
                $pasien2 = new BMIPasien('P002', 'Rina', 'Jakarta', '21 Agustus 1998', 'rina@gmail.com', 'P', 55.3, 165, '2022-01-10');
                $pasien3 = new BMIPasien('P003', 'Luffy', 'Bandung', '13 November 2003', 'luffy@gmail.com', 'L', 45.2, 171, '2022-01-11');
                $pasien4 = new BMIPasien('P004', $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat_badan, $tinggi_badan, $tgl_bmi);
              ?>

              <table id="table_id" class="table table-striped table-bordered" style="border: 1px solid #2ec49c;font: 400 1rem/1.4rem Poppins, sans-serif;" cellspacing="0" width="100%">
                <thead style="background-image: linear-gradient(#2ec49c,#2ec49c);">
                  <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Tanggal Periksa</th>
                    <th style="text-align: center;">Kode Pasien</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Gender</th>
                    <th style="text-align: center;">Berat (Kg)</th>
                    <th style="text-align: center;">Tinggi (m)</th>
                    <th style="text-align: center;">Nilai BMI</th>
                    <th style="text-align: center;">Status</th>
                  </tr>
                </thead>

                <?php
                    echo '<tbody>
                    <tr>
                      <th style="text-align: center;" scope="row">1</th>
                      <td style="text-align: center;">'.$pasien1->tgl_periksa.'</td>
                      <td style="text-align: center;">'.$pasien1->kode.'</td>
                      <td style="text-align: center;">'.$pasien1->nama.'</td>
                      <td style="text-align: center;">'.$pasien1->gender.'</td>
                      <td style="text-align: center;">'.$pasien1->berat.'</td>
                      <td style="text-align: center;">'.$pasien1->tinggi.'</td>
                      <td style="text-align: center;">'.$pasien1->hitung_BMI().'</td>
                      <td style="text-align: center;">'.$pasien1->status_BMI().'</td>
                    </tr>
                    <tr>
                      <th style="text-align: center;" scope="row">2</th>
                      <td style="text-align: center;">'.$pasien2->tgl_periksa.'</td>
                      <td style="text-align: center;">'.$pasien2->kode.'</td>
                      <td style="text-align: center;">'.$pasien2->nama.'</td>
                      <td style="text-align: center;">'.$pasien2->gender.'</td>
                      <td style="text-align: center;">'.$pasien2->berat.'</td>
                      <td style="text-align: center;">'.$pasien2->tinggi.'</td>
                      <td style="text-align: center;">'.$pasien2->hitung_BMI().'</td>
                      <td style="text-align: center;">'.$pasien2->status_BMI().'</td>
                    </tr>
                    <tr>
                      <th style="text-align: center;" scope="row">3</th>
                      <td style="text-align: center;">'.$pasien3->tgl_periksa.'</td>
                      <td style="text-align: center;">'.$pasien3->kode.'</td>
                      <td style="text-align: center;">'.$pasien3->nama.'</td>
                      <td style="text-align: center;">'.$pasien3->gender.'</td>
                      <td style="text-align: center;">'.$pasien3->berat.'</td>
                      <td style="text-align: center;">'.$pasien3->tinggi.'</td>
                      <td style="text-align: center;">'.$pasien3->hitung_BMI().'</td>
                      <td style="text-align: center;">'.$pasien3->status_BMI().'</td>
                    </tr>';
                  if (!empty($proses)){
                    echo '<tr>
                      <th style="text-align: center;" scope="row">4</th>
                      <td style="text-align: center;">'.$tgl_periksa.'</td>
                      <td style="text-align: center;">'.$pasien4->kode.'</td>
                      <td style="text-align: center;">'.$nama.'</td>
                      <td style="text-align: center;">'.$gender.'</td>
                      <td style="text-align: center;">'.$berat_badan.'</td>
                      <td style="text-align: center;">'.$tinggi_badan.'</td>
                      <td style="text-align: center;">'.$pasien4->hitung_BMI().'</td>
                      <td style="text-align: center;">'.$pasien4->status_BMI().'</td>
                    </tr>
                  </tbody>';
                  }
                ?>
              </table>          

            </div>
          </div>
        </div>
      </section>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
      </script> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>