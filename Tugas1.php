<?php


$array_data_penjualan = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    array_push(
        $array_data_penjualan,
        array ("nama_produk" => $_POST['nama_produk'], 'harga_produk' => $_POST["harga_produk"],'jumlah_terjual' => $_POST['jumlah_terjual'],"total" => $_POST["harga_produk"] * $_POST['jumlah_terjual'])
        );
}

function FormatRupiah($angka){
    $rupiah = "Rp.".number_format($angka,"2",",",".");
    return $rupiah;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>

<style>
    table, th, td {
        border: 1px solid black;
    }

    </style>

    <body>
        <h2>Sistem Pencatatan Penjualan</h2>
        <h2>[Form Input untuk Data Penjualan]<h2>
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
        <td>Produk A</td>
        <td><?= FormatRupiah(10000);?></td>
        <td>5</td>
        <td><?= FormatRupiah(50000);?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Produk B</td>
        <td><?= FormatRupiah(7500);?></td>
        <td>10</td>
        <td><?= FormatRupiah(75000);?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Produk C</td>
        <td><?= FormatRupiah(12000);?></td>
        <td>8</td>
        <td><?= FormatRupiah(96000);?></td>
    </tr>
    <tr>
        <td>Total Penjualan</td>
        <td></td>
        <td></td>
        <td>23</td>
        <td><?= FormatRupiah(221000);?></td>
        
    </tr>
    </table>        