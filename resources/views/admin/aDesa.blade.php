@extends ('layoutsadmin/layoutadmin')
    @section ('content')
    <link href="{{ asset('adminassets/css/bootstrap-fileupload.min.css') }}" rel="stylesheet">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Desa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi data Desa dibawah ini
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form enctype="multipart/form-data" method="POST" action="/inDesa" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Desa</label>
                                            <input class="form-control" type="text" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Singkat</label>
                                            <textarea name="sing" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Profil Desa</label>
                                            <textarea name="panj" class="form-control" rows="7"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Maps</label>
                                            <div class="">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select Maps</span><span class="fileupload-exists">Change</span><input type="file" name="maps"></span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Save Desa</button>
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
        <script src="{{ asset('adminassets/js/jquery-1.10.2.js') }}"></script>
        <script src="{{ asset('adminassets/js/bootstrap-fileupload.js') }}"></script>
    @endsection