<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore Tomia Timur</title>

    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://use.fontawesome.com/f56e4513c5.js"></script>
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/ionicons/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/circlepoint.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/nav.css') }}">
        
</head>
<body>
    <nav class="sticky">
        <div class="nav-wrapper">
            <a href="{{URL::to('/')}}" class="brand-logo"><span class="blue-text-brand">Explore</span> Tomia Timur</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a> 
            <ul class="right hide-on-med-and-down">
                <li><a href="{{URL::to('/#artikel')}}">Artikel</a></li>
                <li><a href="{{URL::to('/#galeri')}}">Galeri</a></li>
                <!-- <li><a href="{{URL::to('/#rencana-wisata')}}">Rencana Wisata</a></li> -->
                <li><a href="{{URL::to('/#paket-wisata')}}">Paket Wisata</a></li>
                <li><a href="{{URL::to('/#peta')}}">Destinasi Wisata</a></li>
                
            </ul>
        </div>
    </nav>

     <ul class="sidenav" id="mobile-demo"> 
        <li><a href="{{URL::to('/#artikel')}}">Artikel</a></li> 
        <li><a href="{{URL::to('/#galeri')}}">Galeri</a></li> 
        <li><a href="{{URL::to('/#rencana-wisata')}}">Rencana Wisata</a></li> 
        <li><a href="{{URL::to('/#paket-wisata')}}">Paket Wisata</a></li> 
        <li><a href="{{URL::to('/#peta')}}">Destinasi Wisata</a></li> 
    </ul>
    @yield('content')

    <footer>
        <div class="about-footer row hide-on-med-and-down">
            <div class="col m4 l4">
                <a href="#" class="brand-logo"><span class="blue-text-brand">Explore</span> Tomia Timur</a>
                <h5>Tentang Explore Tomia Timur</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, commodi voluptatem nobis obcaecati eligendi sed qui, inventore quasi assumenda dignissimos rem ipsa rerum! Iure nesciunt necessitatibus alias, non provident eius.</p>
            </div>
            <div class="col m4 l4">
                <div class="container">
                    <h5>Fasilitas</h5>
                    <ul class="list-footer">
                        <li><i class="ion-small ion-chevron-right"></i>Kegiatan di Tomia Timur</li>
                        <li><i class="ion-small ion-chevron-right"></i>Destinasi Wisata</li>
                        <li><i class="ion-small ion-chevron-right"></i>Tempat Penginapan</li>
                        <li><i class="ion-small ion-chevron-right"></i>Tempat Makan</li>
                        <li><i class="ion-small ion-chevron-right"></i>Transportasi Menuju Tomia Timur</li>
                        <li><i class="ion-small ion-chevron-right"></i>Paket Wisata</li>
                    </ul>
                </div>
            </div>
            <div class="col m4 l4 contact">
                <h5>Tanya Tomia Timur?</h5>
                <div>
                    Email: <br/>
                    <i class="ion-small ion-chevron-right"></i> contact.tomiatimur@gmail.com
                </div>
                <div>
                    Telepon: <br/>
                    <i class="ion-small ion-chevron-right"></i> (022) 222222
                </div>
                <div class="grey-text text-lighten-1 social-media">
                    <a href="#"><i class="ion-large ion-social-facebook"></i></a>
                    <a href="#"><i class="ion-large ion-social-twitter"></i></a>
                    <a href="#"><i class="ion-large ion-social-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            © 2018 Copyright KKN-PPM UGM Tomia Timur, All rights reserved.
        </div>
    </footer>

    <div class="back-to-top">
        <button class="back-to-top-btn"><a href="#main-carousel"><i class="ion-large ion-android-arrow-up"></i></a></button>
    </div>

    <script src="{{ asset('assetsnya/scripts/resources/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assetsnya/scripts/resources/materialize.min.js') }}"></script>
    <script src="{{ asset('assetsnya/scripts/carousel.js') }}"></script>
    <script src="{{ asset('assetsnya/scripts/resources/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assetsnya/scripts/nav-waypoint.js') }}"></script>
    <script src="{{ asset('assetsnya/scripts/resources/lightbox.min.js') }}"></script>
    <script src="{{ asset('assetsnya/scripts/img-view.js') }}"></script>
</body>
</html>