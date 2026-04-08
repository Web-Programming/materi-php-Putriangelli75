<?php

if (isset($_POST['simpan'])) {

    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    echo "<h2>Data Berhasil Disimpan</h2>";
    echo "Tanggal: " . $tanggal . "<br>";
    echo "Jenis: " . $jenis . "<br>";
    echo "Nominal: Rp " . number_format($nominal, 0, ',', '.') . "<br>";
    echo "Keterangan: " . $keterangan . "<br>";

} else {
    echo "Data tidak ditemukan!";
}

?>