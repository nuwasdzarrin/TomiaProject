@extends ('layoutsadmin/layoutadmin')
    @section ('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Desa Wisata</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Semua desa wisata yang telah terdaftar
                        </div>
                        <!-- /.panel-heading -->
                        <a href="{{url('aDesa')}}" class="btn btn-primary">Tambah Desa</a>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Singkat</th>
                                        <th>Deskripsi</th>
                                        <th>Peta Desa</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dta as $d)
                                    <tr class="odd gradeX">
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->sing}}</td>
                                        <td>{{$d->panj}}</td>
                                        <td><img src="{{url('/uploadgambar/maps/'.$d->maps)}}" style="width: 150px; height:150px;"></td>
                                        <td>
                                            <a href="{{$d->id}}/eDesa" title="Edit Desa" class="btn btn-warning btn-md" style="margin-bottom: 8px; margin-top: 5px;"><i class="glyphicon glyphicon-edit"></i></a>
                                            <form method="POST" action="{{$d->id}}/delDesa">
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

<!-- DataTables JavaScript -->
        <script src="{{ asset('adminassets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('adminassets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('adminassets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('adminassets/dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>
@endsection
