<?php 

class Terbilang {
    private $words = [
        0 => 'Nol',
        1 => 'Satu',
        2 => 'Dua',
        3 => 'Tiga',
        4 => 'Empat',
        5 => 'Lima',
        6 => 'Enam',
        7 => 'Tujuh',
        8 => 'Delapan',
        9 => 'Sembilan',
        10 => 'Sepuluh',
        11 => 'Sebelas'
    ];

    public function convert($number) {
        if ($number < 12) {
            return $this->words[$number];
        } elseif ($number < 20) {
            return $this->words[$number - 10] . ' Belas';
        } elseif ($number < 100) {
            return $this->words[$number / 10] . ' Puluh ' . $this->convert($number % 10);
        } elseif ($number < 200) {
            return 'Seratus ' . $this->convert($number - 100);
        } elseif ($number < 1000) {
            return $this->words[$number / 100] . ' Ratus ' . $this->convert($number % 100);
        } elseif ($number < 2000) {
            return 'Seribu ' . $this->convert($number - 1000);
        } elseif ($number < 1000000) {
            return $this->convert($number / 1000) . ' Ribu ' . $this->convert($number % 1000);
        }
    }
}

?>