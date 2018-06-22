@extends ('layoutsadmin/layoutadmin')
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
                        <a href="{{url('addArticel')}}" class="btn btn-primary">Tambah Artikel</a>
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
                                        <td><?php echo substr($isi->isi, 0,500);?> ...</td>
                                        <td>
                                            @if ($isi->tampilkan==0)
                                            <a href="tampilkan/{{$isi->id}}" title="Menampilkan Artikel" class="btn btn-success btn-md">Tampilkan</a>
                                            @else
                                            <a href="sembunyikan/{{$isi->id}}" title="Menyembunyikan Artikel" class="btn btn-default btn-md">Sembunyikan</a>
                                            @endif
                                            
                                            <!-- modal gan, yang ini -->
                                            <button class="show-modal btn btn-primary" data-id="{{$isi->penulis}}" data-title="{{$isi->judul}}" data-content="{{$isi->isi}}" title="Detail Artikel">
                                        <span class="glyphicon glyphicon-eye-open"></span></button>
                                            
                                            <a href="{{$isi->id}}/editArticel" title="Edit Artikel" class="btn btn-warning btn-md" style="margin-bottom: 8px; margin-top: 5px;"><i class="glyphicon glyphicon-edit"></i></a>
                                            <form method="POST" action="{{$isi->id}}/delArticel">
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

    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">Penulis:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="title_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_show" cols="80" rows="16" disabled></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script>
        $(document).ready(function(){
            $('.published').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.published').on('ifClicked', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus') }}",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });
            $('.published').on('ifToggled', function(event) {
                $(this).closest('tr').toggleClass('warning');
            });
        });
        
    </script>

    <script type="text/javascript">
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#id_show').val($(this).data('id'));
            $('#title_show').val($(this).data('title'));
            $('#content_show').val($(this).data('content'));
            $('#showModal').modal('show');
        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
@endsection
