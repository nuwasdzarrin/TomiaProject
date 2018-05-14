@extends ('fix')
    @section ('content')

    <header id="page-header">
        <img src="{{ asset('uploadgambar/galeris/02.jpg') }}" alt="page header">
        <div class="header-overlay">
            <div class="header-content">
                <h1>Artikel</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi eveniet cupiditate harum minima dignissimos quia debitis quod asperiores beatae, dolorem quis.</p>
            </div>
        </div>
    </header>

    <section id="artikel" class="js--start-fixed-sidebar">
        <div class="row">
            <div class="col s12 m8 l8">
                <div class="list-artikel">
                    <?php $no=1; ?>
                    @foreach ($terbaru as $terbaru)
                        @if($no>=(($id-1)*6)+1)
                            <div class="artikel-item row">
                                <div class="col s4 m4 l4">
                                    <img src="{{ asset('uploadgambar/artikels/'.$terbaru->gambar) }}" alt="">
                                </div>
                                <div class="col s8 m8 l8">
                                    <a href="{{URL::to('/detailArtikel/'.$terbaru->id)}}"><h5>{{$terbaru->judul}}</h5></a>
                                    <span>{{$terbaru->penulis}}</span> - <span><?php echo substr($terbaru->updated_at, 0,10);?></span><br/>
                                    <p class="deskripsi-singkat">
                                        <?php echo substr($terbaru->isi, 0,170);?> ...
                                    </p>
                                    <a href="{{URL::to('/detailArtikel/'.$terbaru->id)}}" class="right">Read More</a>
                                </div>
                            </div>
                        @endif
                        @if ($no==6*$id)
                            @break
                        @endif
                        <?php $no++; ?>
                    @endforeach
                </div>
                <div class="pagination-div row">
                    <ul class="pagination col s12 m12 l12">
                        <li class="disabled"><a href="@if ($id>1) {{ $id-1 }} @endif"><i class="material-icons">chevron_left</i></a></li>
                        @for ($i=1;$i<=($count/6)+1;$i++)
                        <li @if($i==$id) class="active" @else class="waves-effect" @endif ><a href="{{ $i }}">{{ $i }}</a></li>
                        @endfor
                        <li class="waves-effect"><a href="@if($id<=($count/6)) {{ $id+1 }} @endif"><i class="material-icons">chevron_right</i></a></li>
                    </ul>  
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

@endsection