@extends ('pokdarwis/lay')
    @section ('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Video</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Link dan Judul Video
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/{{$video->id}}/editVdo" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="title" value="{{$video->judul}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Link Video</label>
                                            <textarea name="vid" class="form-control" rows="3">{{$video->video}}</textarea>
                                            <p class="help-block">*Link Video Youtube</p>
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