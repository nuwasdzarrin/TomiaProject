@extends ('layoutsadmin/layoutadmin')
    @section ('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orderan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Semua Pemesanan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>no.</th>
                                        <th>Paket/Kode Booking</th>
                                        <th>Pemesan/Tanggal/Status</th>
                                        <th>Pembayaran</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($order as $order)
                                    <tr class="odd gradeX">
                                        <td>{{$no}}</td>
                                        <td>
                                            {{$order->joinPaket->paket}}<br>
                                            {{$order->id_pembelian}}
                                        </td>
                                        <td>{{$order->nama_pemesan}}<br>{{$order->tgl_keberangkatan}}<br>status:
                                            <?php
                                            $status=$order->status; 
                                            if ($status==0) echo "Menunggu Pembayaran";
                                            if ($status==1) echo "di Bayar";
                                            if ($status==2) echo "di Konfirmasi";
                                                ?> </td>
                                        <td><img src="{{url('/uploadgambar/konfirmasi/'.$order->gambar)}}" style="width: 150px; height:150px;"></td>
                                        <td>
                                            <form method="POST" action="{{$order->id}}/status">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="status" value="2">
                                                <button type="submit" class="btn btn-warning">konfirmasi</button>
                                                <input type="hidden" name="_method" value="PUT">
                                            </form>

                                            <form method="POST" action="{{$order->id}}/delPemesanan">
                                                {{csrf_field()}}
                                                <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
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
