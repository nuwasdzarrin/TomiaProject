@extends ('fix')
    @section ('content')

    <link rel="stylesheet" href="{{ asset('assetsnya/styles/checkout.css') }}">
    <main class="row">
        <div class="col s12 m6 l6 row">
            <div class="content paket-1">
                <div class="paket-img-1">
                    <div class="overlay">
                        <span class="judul-paket">{{$paket->paket}}</span>
                        <?php $harga=strrev(implode('.',str_split(strrev(strval($paket->harga)),3))); ?>
                        <span class="mata-uang">IDR </span><span class="harga">{{$harga}}</span>
                    </div>
                </div>
                <div class="paket-container">
                    <div class="deskripsi-paket">
                        <p>{{$paket->deskripsi}}</p>
                    </div>
                    <div class="deskripsi-paket">
                        <ul>
                            <?php
                                $data = explode(",", $paket->fasilitas);
                                $jumlah = count($data);
                                for ($i=0; $i < $jumlah ; $i++) { ?>
                                 <li><i class="icon-large ion-ios-checkmark-empty"></i><?php echo $data[$i]; ?></li>
                                <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col sm12 m6 l6">
            <p>Detail Pesanan</p>
            <form enctype="multipart/form-data" method="POST" action="/checkout">
              {{ csrf_field() }}
              <input type="hidden" name="booking" value="{{$paket->id}}">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="nama lengkap">
                    </div>
                    <div class="col s12 m12 l7">
                        <label for="nama">Email</label>
                        <input type="email" name="email" id="email" placeholder="email">
                    </div>
                    <div class="col s12 m12 l5">
                        <label for="nama">Nomor Telepon</label>
                        <input type="text" name="noTelp" id="noTelp" placeholder="nomor telepon">
                    </div>
                    <div class="col s12 m12 l3">
                        <label for="nama">Banyak Paket</label>
                        <input type="number" name="kuantitas" id="kuantitas" value="1" min="1" oninput="validity.valid||(value='1');">
                    </div>
                    <div class="col s12 m12 l12">
                        <label for="nama">Tanggal Keberangkatan</label>
                        <input type="date" name="date" id="date" placeholder="date">
                    </div>
                    <input type="hidden" name="desa" value="{{$paket->desa}}">
                </div>
                <input type="submit" value="Pesan">
            </form>
        </div>
    </main>
@endsection
