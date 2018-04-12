@extends ('layoutsadmin/layoutadmin')
    @section ('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Paket Wisata</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi paket wisata yang ditawarkan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/inputPaket" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input class="form-control" type="text" name="paket">
                                            <p class="help-block">*paket hemat</p>
                                        </div>
                                        <div class="form-group">
                                            <label>fasilitas 1</label>
                                            <input class="form-control" type="text" name="fas1" placeholder="Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label>fasilitas 2</label>
                                            <input class="form-control" type="text" name="fas2" placeholder="Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label>fasilitas 3</label>
                                            <input class="form-control" type="text" name="fas3" placeholder="Kategori">
                                        </div>
                                        <button type="submit" class="btn btn-default">Save Paket</button>
                                        <button type="reset" class="btn btn-default">Reset Paket</button>
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