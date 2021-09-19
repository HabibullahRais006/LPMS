<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    @yield('css')

    <title>{{ $title }} | LPMS</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light shadow px-5 py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/bitmap.png" alt="" width="200">
            </a>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><b>PENGADUAN</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><b>TENTANG KAMI</b></a>
                    </li>
                    <li class="nav-item ps-3">
                        <button type="button" class="btn btn-outline-success" style="border-radius: 100px;">LOGIN</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="py-4">
        @yield('content')
    </div>
    
    <footer class="text-center text-white" style="background-color: #58b431ff">

<div class="container">
    <section class="mt-5">
        <div class="row text-center d-flex justify-content-center pt-5">

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">TENTANG KAMI</a>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">KETENTUAN LAYANAN</a>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">KEBIJAKAN PRIVASI</a>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">HUBUNGI KAMI</a>
                </h6>
            </div>
        </div>
    </section>

    <hr class="my-5" />

    <section class="mb-5">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <p>
                Dinas Komunikasi dan Informatika Kabupaten Sumenep
            </p>
            </div>
        </div>
    </section>

    <section class="text-center mb-5">
        <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
        </a>
    </section>
</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" >
    © 2020 Copyright:
    <a class="text-white" href="" ></a >
</div>

</footer>



    @yield('js')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>