@extends ('pokdarwis/lay')
    @section ('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Paket Wisata</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Paket wisata yang ditawarkan
                        </div>
                        <!-- /.panel-heading -->
                        <a href="{{url('addPkt')}}" class="btn btn-primary">Tambah Paket</a>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Paket</th>
                                        <th>Deskripsi</th>
                                        <th>Fasilitas</th>
                                        <th>Harga</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paket as $isi)
                                    <tr class="odd gradeX">
                                        <td>{{$isi->paket}}</td>
                                        <td>{{$isi->deskripsi}}</td>
                                        <td>{{$isi->fasilitas}}</td>
                                        <?php $harga=strrev(implode('.',str_split(strrev(strval($isi->harga)),3))); ?>
                                        <td>{{$harga}}</td>
                                        <td>
                                            <a href="{{$isi->id}}/editPkt" class="btn btn-warning" style="width: 60px">Edit</a>
                                            <form method="POST" action="{{$isi->id}}/delPkt">
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
