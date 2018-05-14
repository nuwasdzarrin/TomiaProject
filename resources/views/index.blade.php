@extends ('fix')
    @section ('content')
    
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
                    <span class="judul-artikel besar"><a href="{{URL::to('/detailArtikel/'.$terbaru->id)}}">{{$terbaru->judul}}</a></span>
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
                            <span class="judul-artikel"><a href="{{URL::to('/detailArtikel/'.$latesArt->id)}}">{{$latesArt->judul}}</a></span>
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
                            <span class="judul-artikel"><a href="{{URL::to('/detailArtikel/'.$populer->id)}}">{{$populer->judul}}</a></span>
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
            <a href="artikel/1" class="btn-default-effect">Lihat lebih banyak artikel</a>
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
            <a href="galeris" class="btn-default-effect">Lihat galeri</a>
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
                                <?php $harga=strrev(implode('.',str_split(strrev(strval($paket->harga)),3))); ?>
                                <span class="mata-uang">IDR </span><span class="harga">{{$harga}}</span>
                            </div>
                        </div>
                        <div class="paket-container">
                            <div class="deskripsi-paket">
                                <p>{{$paket->deskripsi}}</p>
                            </div>
                            <div class="deskripsi-paket">
                                <ul>
                                <?php
                                $data = explode(",", $paket->fasilitas);
                                $jumlah = count($data);
                                for ($i=0; $i < $jumlah ; $i++) { ?>
                                 <li><i class="icon-large ion-ios-checkmark-empty"></i><?php echo $data[$i]; ?></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="deskripsi-paket">
                            <a class="pesan-btn waves-effect" href="order/{{$paket->id}}">Pesan Paket</a>
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

@endsection