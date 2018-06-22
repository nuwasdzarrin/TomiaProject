<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }

        html {
            min-height: 100%;
            max-width: 100%;
            position: relative;
        }

        p {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2em;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Caveat Brush', cursive;
        }

        .right-align {
            text-align: right;
        }

        p {
            margin: 0;
        }

        table {
            width: 100%;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table, th, td {
            border: none;
        }

        td, th {
            padding: 15px 5px;
            display: table-cell;
            text-align: left;
            vertical-align: middle;
            border-radius: 2px;
        }

        #invoice {
            max-width: 800px;
            margin: 0 auto; 
            border: 1px solid #1d98fd;
            margin-top: 10px;
            font-size: .95em;
        }

        #invoice > div {
            padding: 20px 30px;
        }
       .info-pemesan {
            display: flex;
            justify-content: space-between;
        }

        p.info-judul {
            color: rgb(143, 143, 143);
            margin-bottom: 3px;
        }

        .info-pemesan p {
            font-size: .9em;
        }

        .info-pemesan > div:first-child {
            display: flex;
        }

        .info-pemesan > div > div {
            max-width: 200px;
            margin-right: 30px;
        }

        .info-pemesan > div > div > div:first-child {
            margin-bottom: 10px;
        }

        p.status-pembayaran {
            text-align: center;
            padding: 5px 0px 5px 0px;
            color: white;
            border-radius: 5px;
            margin-top: 5px;
            margin-left: 50px;
        }

        p.waiting {
            background-color: red;
        }
        p.paid {
            background-color: orange;
        }
        p.success {
            background-color: green;
        }

        p.biaya-total {
            font-size: 2em;
            color: #1d98fd;
            margin-top: 0px;
        }

        .detail-tiket-pesanan > div {
            border-top: 2px solid #1d98fd;
            margin-top: -50px;
        }

        #invoice .pesan-invoice {
            padding-top: 0;
            font-size: .6em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pesan-invoice > div:first-child {
            max-width: 70%;
        }
    </style>   
</head>

<body>
    <div id="invoice">
        
            <table style="background-color: #1d98fd;
            color: white;justify-content: space-between;align-items: center;">
                <tr>
                    <td><img src="{{ asset('uploadgambar/logo.png') }}" alt="logo" style="width: 80px; margin-left:10px;
            height: 80px;
            margin-right: 20px;"></td>
                    <td><p style="font-size: 2em;margin-left:0;line-height: 1;">TOMIA TIMUR</p></td>
                    <td>
                        <p style="line-height: 1.5;margin-left: 100px;font-size: .9em;font-weight: 200;">021-002-883</p>
                        <p style="line-height: 1.5;margin-left: 100px;font-size: .9em;font-weight: 200;">admin@treasuretomiatimur.com</p>
                        <p style="line-height: 1.5;margin-left: 100px;font-size: .9em;font-weight: 200;">treasuretomiatimur.com</p>    
                    </td>
                    <td>
                        <p style="line-height: 1.5;margin: 0;font-size: .9em;font-weight: 200;">Alamat</p>
                        <p style="line-height: 1.5;margin: 0;font-size: .9em;font-weight: 200;">Tomia Tim., Wakatobi</p>
                        <p style="line-height: 1.5;margin: 0;font-size: .9em;font-weight: 200;">Kode Pos: 93793</p>    
                    </td>
                </tr>
            </table>
           
        <div class="info-pemesan">
            <div>
        <table>
            <tr>
                <td>
                    <p class="info-judul">Kode Booking</p>
                    <p>{{$pesan->id_pembelian}}</p>
                    <p class="info-judul" style="margin-top: 10px;">Pemesan</p>
                    <p>{{$pesan->nama_pemesan}}</p>
                    <p>{{$pesan->email}}</p>
                </td>
                <td>
                    <p class="info-judul">Tanggal Pemesanan</p>
                    <p>{{$pesan->created_at}}</p>
                    <p class="info-judul" style="margin-top: 10px;">Tanggal Keberangkatan</p>
                    <p>{{$pesan->tgl_keberangkatan}}</p>
                </td>
                <td>
                    <p class="right-align info-judul">Total</p>
                    <?php
                    $total=$paket->harga*$pesan->jumlah;
                    $jumlah= strrev(implode('.',str_split(strrev(strval($total)),3)));
                    ?>
                    <p class="right-align biaya-total">Rp<span>{{$jumlah}}</span></p>
                    <?php $status=$pesan->status; ?>
                    @if ($status==0)<p class="status-pembayaran waiting">Belum Dibayar</p> @endif
                    @if ($status==1)<p class="status-pembayaran paid">Dibayar</p> @endif
                    @if ($status==2)<p class="status-pembayaran success">Dikonfirmasi</p> @endif
                </td>
            </tr>
        </table>
            </div>
        </div>
        <div class="detail-tiket-pesanan">
            <div>
                <table>
                    <tr style="border-bottom: 3px solid rgba(0,0,0,0.12);">
                        <th>Nama Paket</th>
                        <th>Harga Satuan</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                    </tr>
                    <tr style="border-bottom: 3px solid rgba(0,0,0,0.12);">
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
                <p>
                    <?php
                    $status=$pesan->status; 
                    if ($status==0) echo "Silahkan Lakukan Pembayaran ke BNI A.N ....... <br>dengan jumlah sesuai dengan total Tagihan.
                        <br>Setelah itu upload bukti pembayaran di: <a href='http://tomiaproject.oo/confirmation'>http://tomiaproject.oo/confirmation</a>"; 
                    if ($status==1) echo "Tunggu Konfirmasi pembayaran dari Administrator";
                    if ($status==2) echo "Pembayaran Telah dikonfirmasi <br> invoice sebagai tiket perjalanan wisata anda";
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>