@extends ('fix')
    @section ('content')
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/detailartikel.css') }}">
    <section id="detailArtikel"  class="row">
        <div class="properti-artikel col s12 m12 l12">
            <p>{{$artikel->judul}}</p>
            <p><?php echo substr($artikel->updated_at, 0,10);?></p>
        </div>
        <div>
            <div class="col s12 m8 l8">
                <div class="detail-gambar-artikel">
                    <img src="{{ asset('uploadgambar/artikels/'.$artikel->gambar) }}" alt="gambar artikel">
                </div>
                <div class="isian-artikel">
                    <p>{{$artikel->isi}}</p>
                </div>
            </div>
            <div class="sidebar col s12 m4 l4">
                <div class="artikel-populer">
                    <div class="head">
                        <h5>Artikel Populer</h5>
                    </div>
                    <ul>
                    	@foreach ($populer as $populer)
                        <li>
                            <a href="{{URL::to('/detailArtikel/'.$populer->id)}}">
                                {{$populer->judul}}
                                <br/><span><?php echo substr($populer->updated_at, 0,10);?></span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="artikel-terkait">
        <h4 class="center">Artikel Terbaru</h4>
        <div class="row center">
        	@foreach ($terbaru as $terbaru)
            <div class="col s12 m4 l3 artikel-item">
                <div class="artikel-img">
                    <img src="{{ asset('uploadgambar/artikels/'.$terbaru->gambar) }}" alt="">
                </div>  
                <div class="konten-artikel">
                    <a href="{{URL::to('/detailArtikel/'.$terbaru->id)}}"></a>
                    <h5>{{$terbaru->judul}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection