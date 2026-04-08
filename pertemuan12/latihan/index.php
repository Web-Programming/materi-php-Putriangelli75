<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Keuangan Sederhana</title>
</head>
<body>

    <h2>Aplikasi Pencatatan Keuangan</h2>
    <h3>Form Input</h3>

    <form action="proses_keuangan.php" method="POST">

        <label>Tanggal Transaksi:</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Jenis Transaksi:</label><br>
        <select name="jenis" required>
            <option value="">-- Pilih --</option>
            <option value="Pemasukan">Pemasukan</option>
            <option value="Pengeluaran">Pengeluaran</option>
        </select><br><br>

        <label>Nominal:</label><br>
        <input type="number" name="nominal" required><br><br>

        <label>Keterangan:</label><br>
        <input type="text" name="keterangan" required><br><br>

        <button type="submit" name="simpan">Simpan Data</button>

    </form>

</body>
</html>