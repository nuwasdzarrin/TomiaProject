<?php

if ($_REQUEST['id']){
    $id = $_REQUEST['id'];
    echo $id;
}
$usr = \App\artikel::where('id', $id)->first();

?>

<?php
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tomia";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }*/ 

    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        
        $baris = \App\artikel::where('id', $id)->first();
        ?>
            <table class="table">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><?php echo $baris['judul']; ?></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><?php echo $baris['kategori']; ?></td>
                </tr>
                <tr>
                    <td>Deskripsi Barang</td>
                    <td>:</td>
                    <td><?php echo $baris['isi']; ?></td>
                </tr>
            </table>
        <?php 

        }
    }
    $koneksi->close();
?>