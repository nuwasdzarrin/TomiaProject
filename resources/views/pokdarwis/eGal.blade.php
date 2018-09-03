@extends ('pokdarwis/lay')
    @section ('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Galeri</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Silahkan Edit Galeri anda
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/{{$galeri->id}}/editGal" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Gambar</label><br/>
                                            <label><img src="{{url('/uploadgambar/galeris/'.$galeri->gambar)}}" style="width: 150px; height:150px;"></label><br>
                                            <label>Apakah Ingin Mengganti Gambar?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options2" id="optionsRadiosInline1" value="option1" checked>Tidak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options2" id="optionsRadiosInline2" value="option2">Ya
                                            </label>
                                            <input type="file" name="gambar" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Thumbnail</label><br/>
                                            <label><img src="{{url('/uploadgambar/galeris/thumbnail/'.$galeri->thumbnail)}}" style="width: 150px; height:150px;"></label><br>
                                            <label>Apakah Ingin Mengganti Thumbnail?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options4" id="optionsRadiosInline1" value="option3" checked>Tidak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options4" id="optionsRadiosInline2" value="option4">Ya
                                            </label>
                                            <input type="file" name="thumbnail" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="judul" value="{{$galeri->judul}}">
                                        </div>
                                        <input type="hidden" name="desa" value="{{ Auth::user()->desa }}">
                                        <button type="submit" class="btn btn-default">Save</button>
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="reset" class="btn btn-default">Reset</button>
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