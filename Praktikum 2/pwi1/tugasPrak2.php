<?php
    // Nama : Muhammad Shaquille Kana
    // NIM  : 24060122140177

    function hitung_rata($array) {
        $total = array_sum($array);
        $jumlah_nilai = count($array);
        return $total / $jumlah_nilai;
    }

    function print_mhs($array_mhs) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Nama</th><th>Nilai 1</th><th>Nilai 2</th><th>Nilai 3</th><th>Rata2</th></tr>";
        
        foreach ($array_mhs as $nama => $nilai) {
            $rata_rata = hitung_rata($nilai);
            echo "<tr>";
            echo "<td>{$nama}</td>";
            foreach ($nilai as $n) {
                echo "<td>{$n}</td>";
            }
            echo "<td>{$rata_rata}</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }

    // Array data mahasiswa
    $array_mhs = [
        'Abdul' => [89, 90, 54],
        'Budi' => [98, 65, 74],
        'Nina' => [67, 56, 84],
    ];

    // Menampilkan data mahasiswa dalam bentuk tabel
    print_mhs($array_mhs);
?>
