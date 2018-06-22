@extends ('layoutguest/fixguest')
    @section ('content')
    <link href="{{ asset('adminassets/css/bootstrap-fileupload.min.css') }}" rel="stylesheet">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi artikel anda dibawah ini
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form enctype="multipart/form-data" method="POST" action="/inputArtikels" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="judul">
                                            <p class="help-block">Example: *Tanah Hijau Kebiruan </p>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="kategori" class="form-control" style="width: 35%;">
                                                <option value="0" selected="selected">General</option>
                                                <option value="1">Desa Dete</option>
                                                <option value="2">Desa Tiroau</option>
                                                <option value="3">Desa Kulati</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="penulis" value="{{ Auth::user()->name }}">
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <div class="">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{ asset('uploadgambar/demoUpload.jpg') }}" alt="" /></div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="gambar"></span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="content" class="form-control" rows="20"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Save Artikel</button>
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
        <script src="{{ asset('adminassets/js/jquery-1.10.2.js') }}"></script>
        <script src="{{ asset('adminassets/js/bootstrap-fileupload.js') }}"></script>
    @endsection