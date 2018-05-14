<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Treasure Tomia Timur</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('adminassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('adminassets/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

        <!-- DataTables CSS -->
    <link href="{{ asset('adminassets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet') }}">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('adminassets/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('adminassets/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('adminassets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Konfirmasi Pembayaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            lakukan konfirmasi pembayaran dengan upload bukti pembayaran
                        </div>
                        @if(Session::has('message'))
                        <!-- <div class="alert alert-info"> -->
                            <script>alert("{{ Session::get('message') }}");</script>
                        <!-- </div> -->
                        @endif
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" method="POST" action="/postKonfirmasi" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Kode Booking</label>
                                            <input class="form-control" type="text" name="id_pembelian">
                                            <p class="help-block">*ex #: hyUz7</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Bukti Pembayaran</label>
                                            <input type="file" name="gambar">
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
    </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('adminassets/vendor/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('adminassets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('adminassets/vendor/metisMenu/metisMenu.min.js') }}"></script>

        <!-- DataTables JavaScript -->
        <script src="{{ asset('adminassets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('adminassets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('adminassets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('/adminassets/dist/js/sb-admin-2.js') }}"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>
</body>

</html>