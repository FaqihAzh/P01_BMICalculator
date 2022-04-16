<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Body Info</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/body_info.css">
    </head>
    <body>
    <section style="background:#ffffff;" class="choose">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <div class="container pb-4 px-4">
        <div class="row text-center d-block pt-5 pb-md-4">
            <h1 class="my-3">
              <span style="color:#E98300;font-size:40px">Apa itu</span> Index Massa Tubuh? 
              <span style="color:#E98300;font-size:40px">Berapa</span> Index Massa Tubuh Anda?
            </h1>
            <p>
            <span style="color:#E98300">Body Mass Index (BMI)</span> atau yang sering dikenal dengan <span style="color:#E98300">Indeks Massa Tubuh (IMT)</span>
            <br>adalah nilai ukur untuk mengetahui status gizi seseorang
            <br>berdasarkan berat dan tinggi badannya.
            </p>
        </div>
        <div class="row py-5">
            <div class="info col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                <img class="small" src="assets/img/bmi3.png"
                    alt="taxes" class="img-fluid">
                <img src="assets/img/bmi3-color.png"
                    alt="taxes" class="img-fluid" style="display: none;">
                <p class="font-weight-bold mt-4 mb-1 cl-blue">
                    Kekurangan Berat Badan
                </p>
                <p class="font-weight-bold mt-1 mb-1 cl-black">
                  < 18.5
                </p>
                <p class="text-center">
                  Perlu menambah berat badan dengan makan secukupnya dengan tetap memperhatikan kandungan gizi pada makanan yang dikonsumsi.
                </p>
            </div>
            <div class="info col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                <img class="small" src="assets/img/bmi4.png"
                    alt="user" class="img-fluid">
                <img src="assets/img/bmi4-color.png"
                    alt="user" class="img-fluid" style="display: none;">
                <p class="font-weight-bold mt-4 mb-1 cl-blue">
                    Berat Badan Normal
                </p>
                <p class="font-weight-bold mt-1 mb-1 cl-black">
                    18.5 - 24.9
                </p>
                <p class="text-center">
                  Standar kesehatan yang baik, tetap jaga pola makan dan jangan lupa untuk olahraga secara teratur.
                </p>
            </div>
            <div class="info col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                <img class="small" src="assets/img/bmi1.png"
                    alt="discount" class="img-fluid">
                <img src="assets/img/bmi1-color.png"
                    alt="user" class="img-fluid" style="display: none;">
                <p class="font-weight-bold mt-4 mb-1 cl-blue">
                    Kelebihan Berat Badan
                </p>
                <p class="font-weight-bold mt-1 mb-1 cl-black">
                    25 - 29.9
                </p>
                <p class="text-center">
                  Berat badan berlebih, diperlukan olahraga serta mengurangi dan mengatur pola makan untuk mengurangi kelebihan berat badan.
                </p>
            </div>
            <div class="info col-md-3 p-4" onmouseover="coloringgoals(this)" onmouseout="normalgoals(this)">
                <img class="small" src="assets/img/bmi2.png"
                    alt="calendar" class="img-fluid">
                <img src="assets/img/bmi2-color.png"
                    alt="user" class="img-fluid" style="display: none;">
                <p class="font-weight-bold mt-4 mb-1 cl-blue">
                    Bera Badan Obesitas
                </p>
                <p class="font-weight-bold mt-1 mb-1 cl-black">
                    > 30
                </p>
                <p class="text-center">
                    Standar kesehatan yang paling berbahaya dan sebaiknya berkonsultasi kepada dokter.
                </p>
            </div>
        </div>
    </div>

    <script>
        function coloringgoals(x) {
            x.classList.add('bg-white');
            x.classList.add('rounded-24');
            x.childNodes[1].style.display = "none";
            x.childNodes[3].style.display = "block";
        }

        function normalgoals(x) {
            x.classList.remove('bg-white');
            x.classList.remove('rounded-24');
            x.childNodes[1].style.display = "block";
            x.childNodes[3].style.display = "none";
        }
    </script>
</section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>