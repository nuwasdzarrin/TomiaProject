@extends ('layoutguest/fixguest')
    @section ('content')
    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Semua Artikel Terbaru
                        </div>
                        <!-- /.panel-heading -->
                        <a href="{{url('addArtikels')}}" class="btn btn-primary">Tambah Artikel</a>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Isi</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $isi)
                                    <tr class="odd gradeX">
                                        <td><img src="{{url('/uploadgambar/artikels/'.$isi->gambar)}}" style="width: 150px; height:150px;"></td>
                                        <td>{{$isi->judul}}</td>
                                        <td>{{$isi->penulis}}</td>
                                        <td>{{$isi->isi}}</td>
                                        <td>
                                            <a href="{{$isi->id}}/editArtikels" title="Edit Artikel" class="btn btn-warning btn-md" style="margin-bottom: 8px"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{$isi->id}}/delArtikels">
                                                {{csrf_field()}}
                                                <button type="submit" title="Hapus Artikel" class="btn btn-danger btn-md fa fa-trash-o"  style="padding: 12px;"></button>
                                                <!-- <input type="submit" name="delete" class="btn btn-danger" value="Delete"> -->
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->
    
@endsection
