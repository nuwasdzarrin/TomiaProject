@extends ('pokdarwis/lay')
    @section ('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Silahkan Edit Slider anda
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/{{$slider->id}}/editSli" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Gambar</label><br/>
                                            <label><img src="{{url('/uploadgambar/sliders/'.$slider->gambar)}}" style="width: 150px; height:150px;"></label><br>
                                            <label>Apakah Ingin Mengganti Gambar?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options" id="optionsRadiosInline1" value="option1" checked>Tidak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options" id="optionsRadiosInline2" value="option2">Ya
                                            </label>
                                            <input type="file" name="gambar" value="{{$slider->gambar}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="judul" value="{{$slider->judul}}">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" rows="3">{{$slider->deskripsi}}</textarea>
                                        </div>
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