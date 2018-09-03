<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/ionicons/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnya/styles/invoice.css') }}">
    <style type="text/css">
        p.paid {
        background-color: orange;
        }
    </style>
</head>

<body>
    <div id="invoice">
        <div class="invoice-header">
            <div>
                <img src="{{ asset('uploadgambar/logo.png') }}" alt="logo">
                <p>TOMIA TIMUR</p>
            </div>
            <div>
                <div class="right-align">
                    <p>021-002-883</p>
                    <p>admin@exploretomiatimur.com</p>
                    <p>exploretomiatimur.com</p>
                </div>
                <div class="right-align">
                    <p>Alamat</p>
                    <p>Tomia Tim., Wakatobi</p>
                    <p>Kode Pos: 93793</p>
                </div>
            </div>
        </div>
        <div class="info-pemesan">
            <div>
                <div>
                    <div>
                        <p class="info-judul">Kode Booking</p>
                        <p>{{$pesan->id_pembelian}}</p>
                    </div>
                    <div>
                        <p class="info-judul">Pemesan</p>
                        <p>{{$pesan->nama_pemesan}}</p>
                        <p>{{$pesan->email}}</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="info-judul">Tanggal Pemesanan</p>
                        <p>{{$pesan->created_at}}</p>
                    </div>
                    <div>
                        <p class="info-judul">Tanggal Keberangkatan</p>
                        <p>{{$pesan->tgl_keberangkatan}}</p>
                    </div>
                </div>
            </div>
            <div>
                <p class="right-align info-judul">Total Tagihan</p>
                <?php
                $total=$paket->harga*$pesan->jumlah;
                $jumlah= strrev(implode('.',str_split(strrev(strval($total)),3)));
                ?>
                <p class="biaya-total">Rp. <span>{{$jumlah}}</span></p>
                <?php $status=$pesan->status; ?>
                    @if ($status==0)<p class="status-pembayaran waiting">Belum Dibayar</p> @endif
                    @if ($status==1)<p class="status-pembayaran paid">Dibayar</p> @endif
                    @if ($status==2)<p class="status-pembayaran success">Dikonfirmasi</p> @endif
            </div>
        </div>
        <div class="detail-tiket-pesanan">
            <div>
                <table>
                    <tr>
                        <th>Nama Paket</th>
                        <th>Harga Satuan</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{{$paket->paket}}</td>
                        <?php $harga=strrev(implode('.',str_split(strrev(strval($paket->harga)),3))); ?>
                        <td>Rp. {{$harga}}</td>
                        <td>{{$pesan->jumlah}}</td>
                        <?php
                $total=$paket->harga*$pesan->jumlah;
                $jumlah= strrev(implode('.',str_split(strrev(strval($total)),3)));
                ?>
                        <td>Rp. {{$jumlah}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="pesan-invoice">
            <div>
                <p><?php
                        $status=$pesan->status; 
                        if ($status==0) echo "Silahkan Lakukan Pembayaran ke BNI A.N ....... <br>dengan jumlah sesuai dengan total Tagihan.
                            <br>Setelah itu upload bukti pembayaran di: <a href='http://tomiaproject.oo/confirmation'>http://exploretomiatimur.com/confirmation</a> <?php "; 
                    if ($status==1) echo "Tunggu Konfirmasi pembayaran dari Administrator";
                    if ($status==2) echo "Pembayaran Telah dikonfirmasi <br> Anda dapat mencetak invoice ini sebagai tiket perjalanan";
                    ?></p>
            </div>
            <div>
                <a href="{{URL::to($link)}}" class="cetak-kartu">Cetak</a>
            </div>
        </div>
    </div>
</body>

</html>