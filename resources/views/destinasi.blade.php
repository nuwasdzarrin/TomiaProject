@extends('fix')
@section('content')
<link rel="stylesheet" href="{{ asset('assetsnya/styles/peta-show.css') }}">
    @foreach ($d as $d)
	<section id="peta">
        <div class="row">
            <div class="col s12 m6 l6 center">
                <img src="{{ asset('assetsnya/img/peta/'.$d->maps) }}" alt="">
            </div>
            <div class="col s12 m6 l6 center">
                <h1>{{$d->nama}}</h1>
                <p>{{$d->sing}}</p>
            </div>
        </div>
    </section>
    <section id="deskripsi-lanjut">
        <p>{{$d->panj}}</p>
    </section>
    @endforeach
    <section id="galeri-terkait">
        <div class="row">
            @foreach ($g as $gal)
            <div class="col s6 m3 l3">
                <div class="galeri-item">
                    <a href="{{ asset('uploadgambar/galeris/'.$gal->gambar) }}" data-lightbox="mygallery" data-title="Galeri Foto 1">
                        <img src="{{ asset('uploadgambar/galeris/thumbnail/'.$gal->thumbnail) }}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="artikel-terkait">
        <h4 class="center">Artikel Terkait</h4>
        <div class="row center">
            @foreach ($a as $art)
            <div class="col s12 m4 l3 artikel-item">
                <div class="artikel-img">
                    <img src="{{ asset('uploadgambar/artikels/'.$art->gambar) }}" alt="">
                </div>  
                <div class="konten-artikel">
                    <a href="{{URL::to('/detailArtikel/'.$art->id)}}"></a>
                    <h5>{{$art->judul}}</h5>
                    <p><?php echo substr($art->isi, 0,150);?></p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection