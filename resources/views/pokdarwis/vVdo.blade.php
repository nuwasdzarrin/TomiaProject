@extends ('pokdarwis/lay')
    @section ('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Video Wisata</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Semua Video Wisata
                        </div>
                        <!-- /.panel-heading -->
                        <a href="{{url('addVdo')}}" class="btn btn-primary">Tambah Video</a>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Video</th>
                                        <th>Status</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach ($video as $vdo)
                                    <tr class="odd gradeX">
                                        <td>{{$no}}</td>
                                        <td>{{$vdo->judul}}</td>
                                        <td>{{$vdo->video}}</td>
                                        <td><button class="btn btn-success btn-md">Tampil</button></td>
                                        <td>
                                            <a href="{{$vdo->id}}/editVdo" class="btn btn-warning" style="width: 60px">Edit</a>
                                            <form method="POST" action="{{$vdo->id}}/delVdo">
                                                {{csrf_field()}}
                                                <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $no++;?>
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
