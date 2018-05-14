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
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/{{$paket->id}}/editPaket" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input class="form-control" type="text" name="paket" value="{{$paket->paket}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" rows="3">{{$paket->deskripsi}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Fasilitas</label>
                                            <textarea name="fasilitas" class="form-control" rows="3">{{$paket->fasilitas}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" type="text" name="harga" value="{{$paket->harga}}" placeholder="harga">
                                            <p class="help-block">*paket hemat</p>
                                        </div>
                                        <button type="submit" class="btn btn-default">Save Paket</button>
                                        <input type="hidden" name="_method" value="PUT">
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