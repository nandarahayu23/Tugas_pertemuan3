<?php
function tambah($a,$b){
    $hasil = $a + $b;
    echo "Hasil $a + $b = $hasil";
}
tambah(10,25);
echo "<hr />";
tambah(50,100);
echo "<hr />";
function kosong(){
    $isi = 100 * 200;
    echo $isi;
}
kosong();
echo "<hr />";
function coba(){
    $coba1 = "Ini isi coba 1";
    $coba2 = "Ini isi coba 2";
    return $coba2;
}

echo "Isi dari function coba adalah ".coba();
echo "<hr />";
function FormatRupiah($angka){
    $rupiah = "Rp.".number_format($angka,"2",",",".");
    return $rupiah;
}
echo FormatRupiah(20000);
echo "<hr />";
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga Per produk</th>
        <th>Jumlah Terjual</th>
        <th>Total</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Sepatu</td>
        <td><?= FormatRupiah(120000);?></td>
        <td>2</td>
        <td><?= FormatRupiah(240000);?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Baju</td>
        <td><?= FormatRupiah(10000);?></td>
        <td>5</td>
        <td><?= FormatRupiah(500000);?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Tas</td>
        <td><?= FormatRupiah(200000);?></td>
        <td>3</td>
        <td><?= FormatRupiah(600000);?></td>
    </tr>
    </table>