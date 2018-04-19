<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treasure Tomia Timur</title>

    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/ionicons/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/circlepoint.css') }}">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><span class="blue-text-brand">Treasure</span> Tomia Timur</a>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#artikel">Artikel</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#rencana-wisata">Rencana Wisata</a></li>
                <li><a href="#paket-wisata">Paket Wisata</a></li>
                <li><a href="#peta">Destinasi Wisata</a></li>
            </ul>
        </div>
    </nav>
    
    <section id="main-carousel">
        <div class="carousel carousel-slider">
            <!--phpnya tak taruk disini-->
            @foreach ($slider as $slider)
            <div class="carousel-item" href="#one!">
                <div class="caption caption-kanan opacity-carousel">
                    <h2 class="animated bounce">{{$slider->judul}}</h2>
                    <p>{{$slider->deskripsi}}</p>
                </div>
                <img src="{{ asset('uploadgambar/sliders/'.$slider->gambar) }}">
            </div>
            @endforeach
        </div>
        <div class="arrows center">
            <div class="arrow ar right">
                <div class="center">
                    <i class="material-icons center">chevron_right</i>
                </div>
            </div>
            <div class="arrow al left">
                <div class="center">
                    <i class="material-icons center">chevron_left</i>
                </div>
            </div>
        </div> 
    </section>

    <section id="shortcut" class="container js--section-features">
        <div class="row horizontal-list">
            <!--php untuk fitur-->
            @foreach ($fitur as $fitur)
            <div class="col s12 m3 l3 center">
                <img src="{{ asset('uploadgambar/icons/'.$fitur->gambar) }}">
                <h5>{{$fitur->judul}}</h5>
                <p>{{$fitur->deskripsi}}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section id="artikel">
        <div class="row container">
            <div class="destinasi-terbaru col s12 m4 l4">
                <div class="kategori-artikel col s12 m12 l12 row">
                    <div><span>Artikel Terbaru</span></div>
                </div>
                <div class="col s12 m12 l12">
                    <img class="destinasi-favorit-img" src="{{ asset('uploadgambar/artikels/'.$terbaru->gambar) }}">
                    <span class="judul-artikel besar">{{$terbaru->judul}}</span>
                    <span class="nama-penulis">{{$terbaru->penulis}}</span> - <span><?php echo substr($terbaru->updated_at, 0,10);?></span>
                    <p class="deskripsi"><?php echo substr($terbaru->isi, 0,170);?> ...</p>
                </div>
            </div>
            <div class="artikel-destinasi col s12 m4 l4">
                <div class="row">
                    <div class="kategori-artikel col s12 m12 l12 row">
                        <div><span>Artikel Terbaru</span></div>
                    </div>
                    @foreach ($latesArt as $latesArt)
                    @if ($latesArt->id!=$terbaru->id && $no<6)
                    <div class="artikel-item col s12 m12 l12 row">
                        <div class="col s4 m4 l4">
                            <img class="gambar-artikel" src="{{ asset('uploadgambar/artikels/'.$latesArt->gambar) }}">
                        </div>
                        <div class="col s8 m8 l8">
                            <span class="judul-artikel">{{$latesArt->judul}}</span>
                            <span class="nama-penulis">{{$latesArt->penulis}}</span> - <span><?php echo substr($latesArt->updated_at, 0,10);?></span>
                            <p><?php echo substr($latesArt->isi, 0,50);?> ...</p>
                        </div>
                    </div>
                    @endif
                    <?php $no++ ?>
                    @endforeach
                </div>
            </div>
            <div class="artikel-terbaru col s12 m4 l4">
                <div class="row">
                    <div class="kategori-artikel col s12 m12 l12 row">
                        <div><span>Artikel Populer</span></div>
                    </div>
                    <?php $no=1;?>
                    @foreach ($populer as $populer)
                    @if($no<5)
                    <div class="artikel-item col s12 m12 l12 row">
                        <div class="col s4 m4 l4">
                            <img class="gambar-artikel" src="{{ asset('uploadgambar/artikels/'.$populer->gambar) }}">
                        </div>
                        <div class="col s8 m8 l8">
                            <span class="judul-artikel">{{$populer->judul}}</span>
                            <span class="nama-penulis">{{$populer->penulis}}</span> - <span><?php echo substr($populer->updated_at, 0,10);?></span>
                            <p><?php echo substr($populer->isi, 0,50);?> ...</p>
                        </div>
                    </div>
                    @endif
                    <?php $no++ ?>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="center">
            <a href="#" class="btn-default-effect">Lihat lebih banyak artikel</a>
        </div>
    </section>

    <section id="galeri">
        <h2>Galeri</h2>
        <div class="row">
            <!--php untuk galeri-->
            @foreach ($galeri as $galeri)
            <div class="col s12 m4 l3">
                <div class="galeri-img">
                    <img src="{{ asset('uploadgambar/galeris/thumbnail/'.$galeri->thumbnail) }}">
                    <a href="{{ asset('uploadgambar/galeris/'.$galeri->gambar) }}" data-lightbox="mygallery" data-title="Galeri Foto 1">
                        <div class="caption-galeri-img">
                            <div class="caption-text">{{$galeri->judul}}</div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="center">
            <a href="#" class="btn-default-effect">Lihat galeri</a>
        </div>
    </section>

    <section id="rencana-wisata" class="center">
        <div class="container">
            <h2>Rencanakan Wisata Anda</h2>
            <div class="row horizontal-list">
                <!--php untuk plan-->
                @foreach ($plan as $plan)
                <div class="col s12 m4 l4 center">
                    <img src="{{ asset('uploadgambar/icons/'.$plan->gambar) }}">
                    <h5>{{$plan->judul}}</h5>
                    <p>{{$plan->deskripsi}}</p>
                </div>
                @endforeach
            </div>
            <a href="#" class="btn-default-effect btn-inverse">Rencanakan Lebih Lanjut</a>
        </div>
    </section>
    
    <div id="paket-wisata" class="center">
        <div class="container">
            <h2>Paket Wisata</h2>
            <div class="row paket-list">
                <!--php untuk paket-->
                @foreach ($paket as $paket)
                <div class="col s12 m4 l4 center">
                    <div class="content paket-1">
                        <div class="paket-img-1">
                            <div class="overlay">
                                <span class="judul-paket">{{$paket->paket}}</span>
                                <span class="mata-uang">IDR </span><span class="harga">{{$paket->harga}}</span>
                            </div>
                        </div>
                        <div class="paket-container">
                            <div class="deskripsi-paket">
                                <p>{{$paket->deskripsi}}</p>
                            </div>
                            <div class="deskripsi-paket">
                                <ul>
                                    <li><i class="icon-large ion-ios-checkmark-empty"></i>Pemandu Wisata</li>
                                    <li><i class="icon-large ion-ios-checkmark-empty"></i>Penginapan 2 Hari 1 Malam</li>
                                    <li><i class="icon-large ion-ios-checkmark-empty"></i>Makan Lengkap</li>
                                    <li><i class="icon-large ion-ios-checkmark-empty"></i>Peralatan Menyelam</li>
                                    <li><i class="icon-large ion-ios-checkmark-empty"></i>Tour ke desa A, B, C</li>
                                </ul>
                            </div>
                        </div>
                        <div class="deskripsi-paket">
                            <button class="pesan-btn waves-effect" type="submit">Pesan Paket</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="peta">
        <div class="container row">
            <div class="deskripsi-peta col s12 m6 l6">
                <h2>Destinasi<br/>Tomia Timur</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet nisi facilis modi veniam inventore voluptatem corporis iure incidunt. Veritatis modi, distinctio perferendis deleniti explicabo minima molestiae ea hic temporibus provident.</p>
                <a href="#" class="btn-default-effect waves-effect">Lihat Destinasi</a>
            </div>
            <div class="gambar-peta col s12 m6 l6">
                <img src="{{ asset('assetsnya/img/peta/main.svg') }}" alt="">
                <div class="spot-pointer">
                    <div class="hotspot__positioner--01">
                        <div class="hotspot__container">
                            <a href="#">
                                <div class="hotspot hotspot--01"></div>
                                <div class="hotspot hotspot--02"></div>
                            </a>
                        </div>
                    </div>   
                    <div class="hotspot__positioner--02">
                        <div class="hotspot__container">
                            <a href="#">
                                <div class="hotspot hotspot--01"></div>
                                <div class="hotspot hotspot--02"></div>
                            </a>
                        </div>
                    </div>   
                    <div class="hotspot__positioner--03">
                        <div class="hotspot__container">
                            <a href="#">
                                <div class="hotspot hotspot--01"></div>
                                <div class="hotspot hotspot--02"></div>
                            </a>
                        </div>
                    </div>   
                    <div class="hotspot__positioner--04">
                        <div class="hotspot__container">
                            <a href="#">
                                <div class="hotspot hotspot--01"></div>
                                <div class="hotspot hotspot--02"></div>
                            </a>
                        </div>
                    </div>   
                    <div class="hotspot__positioner--05">
                        <div class="hotspot__container">
                            <a href="#">
                                <div class="hotspot hotspot--01"></div>
                                <div class="hotspot hotspot--02"></div>
                            </a>
                        </div>
                    </div>   
                    <div class="hotspot__positioner--06">
                        <div class="hotspot__container">
                            <a href="#">
                                <div class="hotspot hotspot--01"></div>
                                <div class="hotspot hotspot--02"></div>
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="about-footer row hide-on-med-and-down">
            <div class="col m4 l4">
                <a href="#" class="brand-logo"><span class="blue-text-brand">Treasure</span> Tomia Timur</a>
                <h5>Tentang Treasure Tomia Timur</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, commodi voluptatem nobis obcaecati eligendi sed qui, inventore quasi assumenda dignissimos rem ipsa rerum! Iure nesciunt necessitatibus alias, non provident eius.</p>
                <div class="grey-text text-lighten-1 social-media">
                    <a href="#"><i class="ion-large ion-social-facebook"></i></a>
                    <a href="#"><i class="ion-large ion-social-twitter"></i></a>
                    <a href="#"><i class="ion-large ion-social-instagram"></i></a>
                </div>
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