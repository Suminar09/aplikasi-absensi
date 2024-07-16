<!DOCTYPE html>
<html>
<head>
    <title>Laporan Absen Bulanan</title>
</head>
<body>
    <h1>Pilih Bulan dan Tahun</h1>
    <form method="GET" action="proseslaporan.php">
        <label for="bulan">Bulan:</label>
        <select name="bulan" id="bulan">
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <label for="tahun">Tahun:</label>
        <select name="tahun" id="tahun">
            <?php
            for ($i = 2020; $i <= date("Y"); $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <label for="kelas">Kelas:</label>
        <select name="KELAS" id="KELAS">
            <option value="X PPLG 1">X PPLG 1</option>
            <option value="X PPLG 2">X PPLG 2</option>
            <option value="X PPLG 3">X PPLG 3</option>
            <option value="X PPLG 4">X PPLG 4</option>
        </select>
        <button type="submit">Tampilkan Laporan</button>
    </form>
</body>
</html>
