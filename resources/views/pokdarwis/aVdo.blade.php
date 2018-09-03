@extends ('pokdarwis/lay')
    @section ('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Video Wisata</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi Judul dan Link Video Youtube
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/inputVdo" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Link Video</label>
                                            <textarea name="vid" class="form-control" rows="3"></textarea>
                                            <p class="help-block">*Masukkan Link Video dari Youtube</p>
                                        </div>
                                        <button type="submit" class="btn btn-default">Save</button>
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