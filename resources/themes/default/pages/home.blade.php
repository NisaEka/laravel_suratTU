<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <section class="main-banner" id="home">
        <div class="header-top-w3layouts text-right">
            <ul id="menu">
                <li>
                    <input id="check02" type="checkbox" name="menu" />
                    <label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
                    <ul class="submenu">
                        <li><a href="#home">Tentang APPS</a></li>
                        <li><a href="#about" class="scroll">Fitur & Teknologi</a></li>
                        @if (Auth::user())
                        <li><a href="#team" class="scroll">Buka Dashboard</a></li>
                        <li><a href="{{ url('/logout') }}" class="scroll">Logout</a></li>
                        @else
                        <li><a href="{{url('login')}}" class="scroll">Login</a></li>
                        @endif
                        
                    </ul>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="baner-info-w3ls text-left">
                <h1><a href="index.html">Aplikasi Pengajuan Pembuatan Surat</a></h1>
                <h6 class="mx-auto mt-4">Aplikasi untuk mengajukan pembuatan surat fakultas sains dan teknologi</h6>
                <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr scroll" href="#about" role="button">Learn More</a>
                <div class="banner-high-lights text-left">
                    <div class="rotate">
                        <a href="#about" class="scroll">
                               <span class="fa fa-long-arrow-down"></span>                 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- what we do -->
    <section class="wedo py-lg-5 py-5" id="about">
        <div class="container py-lg-5">
            <div class="text-center">
                <h3 class="tittle_head">Fitur & Teknologi </h3>
            </div>
            <div class="wedo_top text-center py-5">
                <ul>
                    <li><span class="fa fa-code"></span><h3>Solid Stack</h3>
                    <p class="text-muted">Menggunakan web frameworks &amp; teknologi yang update.</p></li>
                    <li><span class="fa fa-dashboard"></span><h3>Mudah Digunakan</h3><p class="text-muted">Sederhana, dengan UI/UX yang slim dan bersih.</p></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //what we do -->
    
    <!-- footer -->
    <section class="foot-top-w3layouts pt-5">
        <div class="container py-lg-5">
            <div class="text-center">
                <h3 class="tittle_head text-white">Login terlebih dahulu untuk masuk ke sistem </h3>
            </div>
            <div class="newsletter-info-wthree text-center pt-md-5 pt-3">
                @if (Auth::user())
                <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr scroll" href="" data-toggle="modal" data-target="#login" role="button">Buka Dashboard </a>
                @else        
                <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr scroll" href="{{url('login')}}" data-toggle="modal" data-target="#login" role="button">Login</a>
                @endif
            </div>

        </div>
        <div class="cpy-right text-center pb-5">
            
            <p class="copy-w3ls mb-4">© 2019 K.
            </p>
            <a href="#home" class="move-top scroll"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
        </div>
    </section>
    <!-- //footer -->



</body>

</html>
