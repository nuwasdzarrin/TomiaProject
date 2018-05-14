@extends ('fix')
    @section ('content')

    <header id="page-header">
        <img src="{{ asset('uploadgambar/galeris/01.jpg') }}" alt="page header">
        <div class="header-overlay">
            <div class="header-content">
                <h1>Galeri</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi eveniet cupiditate harum minima dignissimos quia debitis quod asperiores beatae, dolorem quis.</p>
            </div>
        </div>
    </header>

    <section id="galeri" class="row">
        @foreach ($terbaru as $terbaru)
        <div class="col s12 m4 l3">
            <div class="galeri-img">
                <img src="{{ asset('uploadgambar/galeris/thumbnail/'.$terbaru->thumbnail) }}">
                <a href="{{ asset('uploadgambar/galeris/'.$terbaru->gambar) }}" data-lightbox="mygallery" data-title="Galeri Foto 1">
                    <div class="caption-galeri-img">
                        <div class="caption-text">{{$terbaru->judul}}</div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        
    </section>

    <div class="pagination-div row">
        <ul class="pagination col s12 m12 l12">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>  
    </div>
@endsection
    