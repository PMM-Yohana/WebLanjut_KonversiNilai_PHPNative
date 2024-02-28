<?php
class Nilai {
    public function hitungNA($partisipasi, $tugas, $uts, $uas) {
        // Hitung nilai akhir (NA)
        $na = ((2*$partisipasi) + (2*$tugas) + (2*$uts) + (3*$uas)) / 10;
        return $na;
    }
}
?>
