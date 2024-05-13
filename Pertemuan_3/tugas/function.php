<?php 
// function menampilkan angka ganjil
function angka_ganjil($angka_pertama,$angka_terakhir){
    for ($angka_pertama;$angka_pertama<$angka_terakhir ; $angka_pertama++) { 
        if ($angka_pertama%2 != 0) {
            echo $angka_pertama;
        }
    }
}
angka_ganjil(1,10);
echo "</br>";

// function menampilkan angka genap
function angka_genap($angka_pertama,$angka_terakhir){
    for ($angka_pertama;$angka_pertama<$angka_terakhir ; $angka_pertama++) { 
        if ($angka_pertama%2 == 0) {
            echo $angka_pertama;
        }
    }
}
angka_genap(1,10);
echo "</br>";
function arimatika($angka_pertama,$angka_kedua){
    echo "$angka_pertama + $angka_kedua = " . $angka_pertama+$angka_kedua;
    echo "</br>";
    echo "$angka_pertama - $angka_kedua = " . $angka_pertama-$angka_kedua;
    echo "</br>";
    echo "$angka_pertama / $angka_kedua = " . $angka_pertama/$angka_kedua;
    echo "</br>";
    echo "$angka_pertama * $angka_kedua = " . $angka_pertama*$angka_kedua;
}
arimatika(10,10);