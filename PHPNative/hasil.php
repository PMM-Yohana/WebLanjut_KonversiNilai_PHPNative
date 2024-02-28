<?php
require_once 'nilai.php';
require_once 'konversi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $partisipasi = $_POST["partisipasi"];
    $tugas = $_POST["tugas"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];

    // Validasi input
    if (!is_numeric($partisipasi) || !is_numeric($tugas) || !is_numeric($uts) || !is_numeric($uas)) {
        echo "Input harus berupa angka.";
        exit;
    }

    $partisipasi = floatval($partisipasi);
    $tugas = floatval($tugas);
    $uts = floatval($uts);
    $uas = floatval($uas);

    // Range nilai yang diisikan dalam rentang 0 – 100
    if ($partisipasi < 0 || $partisipasi > 100 || $tugas < 0 || $tugas > 100 || $uts < 0 || $uts > 100 || $uas < 0 || $uas > 100) {
        echo "Nilai harus berada dalam rentang 0 - 100.";
        exit;
    }

    $nilaiObj = new Nilai();
    $konversiObj = new Konversi();

    // Hitung NA
    $na = $nilaiObj->hitungNA($partisipasi, $tugas, $uts, $uas);

    // Konversi NA menjadi NH
    $nh = $konversiObj->konversiNH($na);
?>
    <td><center><b><?php echo "Selamat Semester ini Anda Memperoleh". "<br>";?></center></td>
    <td><center><?php echo "Nilai Akhir (NA): " . $na . "<br>";?></center></td>
    <td><center><?php echo "Nilai Konversi Huruf (NH): " . $nh;?></center></td>
<?php
}
?>
