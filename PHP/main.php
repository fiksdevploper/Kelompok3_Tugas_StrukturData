<!DOCTYPE html>
<html>

<head>
  <title>Menghitung Nilai Akhir</title>
  <style>
  body {
    background-color: blue;
    color: white;
    font-family: "Courier New", monospace;
    font-size: 16px;
    padding: 30px;
  }

  pre {
    line-height: 1.6;
  }

  input {
    background-color: #fff;
    color: black;
    border: none;
    padding: 4px 6px;
    width: 200px;
    font-family: "Courier New", monospace;
    font-size: 15px;
    margin-bottom: 6px;
  }

  button {
    background-color: white;
    color: blue;
    border: none;
    padding: 6px 12px;
    font-family: "Courier New", monospace;
    cursor: pointer;
    font-weight: bold;
  }
  </style>
</head>

<body>
  <pre>
===============================
     MENGHITUNG NILAI AKHIR
===============================

<form method="post">
NIM   : <input type="text" name="nim" required><br>
NAMA  : <input type="text" name="nama" required><br><br>

NILAI KEHADIRAN     : <input type="number" name="kehadiran" required><br>
NILAI FORUM         : <input type="number" name="forum" required><br>
NILAI TUGAS INDIVIDU: <input type="number" name="tugasIndividu" required><br>
NILAI TUGAS KELOMPOK: <input type="number" name="tugasKelompok" required><br>
NILAI UTS           : <input type="number" name="uts" required><br>
NILAI UAS           : <input type="number" name="uas" required><br>
NILAI PROJECT       : <input type="number" name="project" required><br><br>

<button type="submit" name="hitung">Hitung</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kehadiran = $_POST['kehadiran'];
    $forum = $_POST['forum'];
    $tugasIndividu = $_POST['tugasIndividu'];
    $tugasKelompok = $_POST['tugasKelompok'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $project = $_POST['project'];

    function hitungNilaiAkhir($kehadiran, $forum, $tugasIndividu, $tugasKelompok, $uts, $uas, $project) {
        return ($kehadiran + $forum + $tugasIndividu + $tugasKelompok + $uts + $uas + $project) / 7;
    }
    function tentukanHurufMutu($nilai) {
        if ($nilai >= 85)
            return 'A';
        elseif ($nilai >= 75)
            return 'B';
        elseif ($nilai >= 65)
            return 'C';
        elseif ($nilai >= 55)
            return 'D';
        else
            return 'E';
    }

    $nilaiAkhir = hitungNilaiAkhir($kehadiran, $forum, $tugasIndividu, $tugasKelompok, $uts, $uas, $project);
    $hurufMutu = tentukanHurufMutu($nilaiAkhir);

    echo "\n[ $nim $nama ]\n";
    echo "NILAI AKHIR : " . round($nilaiAkhir) . "\n";
    echo "HURUF MUTU  : $hurufMutu\n";
    echo "===============================\n";
}
?>
</pre>
</body>

</html>