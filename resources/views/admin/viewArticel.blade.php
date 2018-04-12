@extends ('layoutsadmin/layoutadmin')
    @section ('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <a href="{{url('addArticel')}}" class="btn btn-primary">Tambah Data</a>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Isi</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $isi)
                                    <tr class="odd gradeX">
                                        <td><img src="{{url('/uploadgambar/'.$isi->gambar)}}" style="width: 150px; height:150px;"></td>
                                        <td>{{$isi->judul}}</td>
                                        <td>{{$isi->category}}</td>
                                        <td>{{$isi->isi}}</td>
                                        <td>
                                            <a href="{{$isi->id}}/editArticel" class="btn btn-warning" style="width: 60px">Edit</a>

                                            <form method="POST" action="{{$isi->id}}/delArticel">
                                                {{csrf_field()}}
                                                <input type="submit" name="delete" class="btn btn-danger" value="Delete">
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
