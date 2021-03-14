<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perpustakaan Pengadilan Negeri Pasarwajo</title>

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* Navbar */
            .navbar{
                position: relative;
                z-index: 1;
            }

            .navbar img{
                width: 100px;
                height: 100px;
            }

            .navbar-brand{
                font-family: Viga;
                font-size: 32px;
                color: white;

            }

            .nav-link{
                text-transform: uppercase;
                margin-right: 0px;
            }

            .navbar-brand, .nav-link{
                color: white !important;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            }

            /* JUMBROTON */
            .jumbotron{
                background-image: url(/images/perpustakaan3.jpg); 
                background-size: cover;
                height: 700px;
                /*width: 1500px;*/
                text-align: center;
                position: relative;
                margin-top: -150px;
            }

            .jumbotron .container{
                position: relative;
                z-index: 1;
            }

            .jumbotron::after{
                content: '';
                display: block;
                width: 100%;
                height: 150%;
                background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
                position: absolute;
                bottom: 0;
            }

            .jumbotron .display-4{
                color: white;
                margin-top: 200px;
                font-weight: 150px;
                font-size: 50px;
                margin-bottom: 10px;
                color: white;
            }

            .jumbotron .display-4 span{
                font-weight: 500;
            }


        </style>
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <img src="/images/logo1.png" alt="Gambar" class="img-fluit">
        <a class="navbar-brand" href="#">Pengadilan Negeri Pasarwajo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
        
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbroton -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><span>Perpustakaan</span><br> <span>Pengadilan Negeri Pasarwajo</span></h1>
         @if (Route::has('login'))
                <div class="nav-link">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary tombol">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary tombol">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary tombol">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <!-- <a href="penyewaan.html" class="btn btn-primary tombol">Our Rental</a>
        <a href="penyewaan.html" class="btn btn-primary tombol">Visi Misi</a> -->
      </div>
    </div>
    <!-- Akhir Jumbroton -->

       <!--  <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h1 class="display-4"><span>Perpustakaan</span> <br>  <span></span> </h1>
                </div>
            </div>
        </div> -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
