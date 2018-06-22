@extends ('layoutsadmin/layoutadmin')
    @section ('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit artikel anda dibawah ini
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form enctype="multipart/form-data" method="POST" action="/{{$data->id}}/editArticel" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="judul" value="{{$data->judul}}">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <?php $kat=$data->kategori; ?>
                                            <select name="kategori" class="form-control" style="width: 35%;">
                                                @if ($kat==0)
                                                <option value="0" selected="selected">General</option>
                                                <option value="1">Desa Dete</option>
                                                <option value="2">Desa Tiroau</option>
                                                <option value="3">Desa Kulati</option>
                                                @endif
                                                @if ($kat==1)
                                                <option value="0">General</option>
                                                <option value="1" selected="selected">Desa Dete</option>
                                                <option value="2">Desa Tiroau</option>
                                                <option value="3">Desa Kulati</option>
                                                @endif
                                                @if ($kat==2)
                                                <option value="0">General</option>
                                                <option value="1">Desa Dete</option>
                                                <option value="2" selected="selected">Desa Tiroau</option>
                                                <option value="3">Desa Kulati</option>
                                                @endif
                                                @if ($kat==3)
                                                <option value="0">General</option>
                                                <option value="1">Desa Dete</option>
                                                <option value="2">Desa Tiroau</option>
                                                <option value="3" selected="selected">Desa Kulati</option>
                                                @endif
                                            </select>
                                        </div>
                                        <input type="hidden" name="penulis" value="{{$data->penulis}}">
                                        <div class="form-group">
                                            <label>Gambar</label><br/>
                                            <label> <img src="{{url('/uploadgambar/artikels/'.$data->gambar)}}" style="width: 150px; height:150px;"> </label><br>
                                            <label>Apakah Ingin Mengganti Gambar?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options" id="optionsRadiosInline1" value="option1" checked>Tidak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options" id="optionsRadiosInline2" value="option2">Ya
                                            </label>
                                            <input type="file" name="gambar" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="content" class="form-control" rows="15">{{$data->isi}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Save Artikel</button>
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="reset" class="btn btn-default">Reset Artikel</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    @endsection