@extends ('fix')
    @section ('content')
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/page-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/galeri.css') }}">
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
            <li class="disabled"><a href="@if ($id>1) {{ $id-1 }} @endif"><i class="material-icons">chevron_left</i></a></li>
            @for ($i=1;$i<=($count/8+1);$i++)
            <li @if($i==$id) class="active" @else class="waves-effect" @endif ><a href="{{ $i }}">{{ $i }}</a></li>
            @endfor
            <li class="waves-effect"><a href="@if($id<=($count/8)) {{ $id+1 }} @endif"><i class="material-icons">chevron_right</i></a></li>
        </ul>  
    </div>
    <script> 
        document.addEventListener('DOMContentLoaded', function() { 
            var elems = document.querySelectorAll('.sidenav'); 
            var instances = M.Sidenav.init(elems, { 
                edge: 'left', 
                draggable: true 
            }); 
        }); 
    </script>
@endsection
    