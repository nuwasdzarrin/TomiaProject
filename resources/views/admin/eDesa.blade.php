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
                                    <form enctype="multipart/form-data" method="POST" action="/{{$d->id}}/eDesa" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Desa</label>
                                            <input class="form-control" type="text" name="nama" value="{{$d->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Singkat</label>
                                            <textarea name="sing" class="form-control" rows="4">{{$d->sing}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Profil Desa</label>
                                            <textarea name="panj" class="form-control" rows="7">{{$d->panj}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label><br/>
                                            <label> <img src="{{url('/uploadgambar/maps/'.$d->maps)}}" style="width: 150px; height:150px;"> </label><br>
                                            <label>Apakah Ingin Mengganti Gambar?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options" id="optionsRadiosInline1" value="option1" checked>Tidak
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="options" id="optionsRadiosInline2" value="option2">Ya
                                            </label>
                                            <input type="file" name="gambar" value="">
                                        </div>
                                        <button type="submit" class="btn btn-default">Save Desa</button>
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="reset" class="btn btn-default">Reset Desa</button>
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