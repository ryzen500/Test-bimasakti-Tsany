<?php

// Fungsi utama untuk mengubah angka menjadi terbilang
function terbilang($angka)
{
    // Daftar kata untuk angka
    $huruf = [
        0 => 'Nol', 1 => 'Satu', 2 => 'Dua', 3 => 'Tiga', 4 => 'Empat', 5 => 'Lima',
        6 => 'Enam', 7 => 'Tujuh', 8 => 'Delapan', 9 => 'Sembilan', 10 => 'Sepuluh',
        11 => 'Sebelas', 12 => 'Dua belas', 13 => 'Tiga belas', 14 => 'Empat belas',
        15 => 'Lima belas', 16 => 'Enam belas', 17 => 'Tujuh belas', 18 => 'Delapan belas',
        19 => 'Sembilan belas', 20 => 'Dua puluh', 30 => 'Tiga puluh', 40 => 'Empat puluh',
        50 => 'Lima puluh', 60 => 'Enam puluh', 70 => 'Tujuh puluh', 80 => 'Delapan puluh',
        90 => 'Sembilan puluh', 100 => 'Seratus', 200 => 'Dua ratus', 300 => 'Tiga ratus',
        400 => 'Empat ratus', 500 => 'Lima ratus', 600 => 'Enam ratus', 700 => 'Tujuh ratus',
        800 => 'Delapan ratus', 900 => 'Sembilan ratus'
    ];

    // Satuan besar (Ribu, Juta, dll.)
    $satuanBesar = ['', 'Ribu', 'Juta', 'Miliar', 'Triliun'];

    // Jika angka 0, langsung return "Nol"
    if ($angka == 0) {
        return $huruf[0];
    }

    $terbilang = '';
    $indexSatuanBesar = 0;

    // Proses angka dengan membaginya menjadi bagian-bagian per 1000
    while ($angka > 0) {
        $bagian = $angka % 1000;
        if ($bagian > 0) {
            // Ambil bagian terbilang dan gabungkan dengan satuan besar
            $terbilang = formatBagian($bagian, $huruf) . ' ' . $satuanBesar[$indexSatuanBesar] . ' ' . $terbilang;
        }
        $angka = (int)($angka / 1000); // Kurangi angka dengan 1000
        $indexSatuanBesar++;
    }

    return trim($terbilang);
}

// Fungsi untuk menangani bagian angka di bawah 1000
function formatBagian($angka, $huruf)
{
    // Jika angka lebih kecil dari 20, langsung terbilang sesuai
    if ($angka < 20) {
        return $huruf[$angka];
    }

    // Proses puluhan
    if ($angka < 100) {
        return $huruf[$angka - $angka % 10] . ' ' . $huruf[$angka % 10];
    }

    // Proses ratusan
    return $huruf[$angka - $angka % 100] . ' ' . formatBagian($angka % 100, $huruf);
}

// Contoh penggunaan
echo terbilang(123000); // Output: Satu milyar dua ratus tiga puluh empat juta lima ratus enam puluh tujuh ribu delapan ratus sembilan puluh

?>
