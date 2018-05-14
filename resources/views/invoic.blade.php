<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>

<body>
    <div class="invoice-box">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ asset('uploadgambar/Logo.png') }}" style="width:100%; max-width:300px;">
                            </td>
                            <td>
                                Kode Booking #: {{$pesan->id_pembelian}}<br>
                                Created: {{$pesan->created_at}}<br>
                                Due: {{$pesan->tgl_keberangkatan}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                treasuretomiatimur.com<br>
                                Jl. Persatuan No.45, Tomia Wakatobi<br>
                                085239987500
                            </td>
                            
                            <td>
                                {{$pesan->nama_pemesan}}<br>
                                {{$pesan->email}}<br>
                                {{$pesan->no_hp}}
                            </td>
                        </tr>
                        <tr class="heading">
                <td>
                    Status
                </td>
                
                <td>
                    ###
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <?php
                        $status=$pesan->status; 
                        if ($status==0) echo "Menunggu Pembayaran";
                        if ($status==1) echo "di Bayar";
                        if ($status==2) echo "di Konfirmasi";
                    ?>
                </td>
                
                <td>
                    ###
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    {{$paket->paket}}
                </td>
                
                <td>
                    Rp. {{$paket->harga}}
                </td>
            </tr>
            
            <tr class="heading">
                <td>Total</td>
                
                <td>
                   Rp. {{$paket->harga}}
                </td>
            </tr>
            <tr class="item">
                <td>
                    <?php
                        $status=$pesan->status; 
                        if ($status==0) echo "Silahkan Lakukan Pembayaran ke BNI A.N ....... <br>dengan jumlah sesuai dengan total Tagihan.
                            <br>Setelah itu upload bukti pembayaran di: <a href='http://tomiaproject.oo/confirmation'>http://tomiaproject.oo/confirmation</a> <?php "; 
                    if ($status==1) echo "Tunggu Konfirmasi pembayaran dari Administrator";
                    if ($status==2) echo "Pembayaran Telah dikonfirmasi <br> Anda dapat mencetak invoice ini sebagai tiket perjalanan";
                    ?>
                    
                </td>
                
            </tr>
        </table>
                
        
    </div>
</body>
</html>
