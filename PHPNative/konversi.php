<?php
class Konversi {
    public function konversiNH($na) {
        // Konversi nilai akhir (NA) ke nilai huruf (NH) sesuai ketentuan UNESA
        if ($na >= 85) {
            return "A";
        } elseif ($na >= 80) {
            return "A-";
        } elseif ($na >= 75) {
            return "B+";
        } elseif ($na >= 70) {
            return "B";
        } elseif ($na >= 65) {
            return "B-";
        } elseif ($na >= 60) {
            return "C+";
        } elseif ($na >= 55) {
            return "C";
        } elseif ($na >= 40) {
            return "D";
        } else {
            return "E";
        }
    }
}
?>
