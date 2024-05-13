<?php 
// array
$array = [1,2,3,4];
echo $array[1]."</br>";


// array associative
$umur = [
    "Ryandra"=> 18,
    "Anton"=> 19
];

foreach ($umur as $key => $value) {
    echo "namanya : $key umurnya : $value </br>";
}
// array multidimensi
$fruits = [
    ["nama"=>"apel","warna"=>"merah"],
    ["nama"=>"mangga","warna"=>"hijau"],
    ["nama"=>"pisang","warna"=>"kuning"],
    ["nama"=>"duren","warna"=>"hijau"]
];
echo "</br>";

// php array functoin
echo "</br>";
$buah = ['apel','mangga','nanas'];
// menghitung jumlah array
echo count($buah);

// menambah data di akhir array 
array_push($buah,"sirsak","naga");
print_r($buah);
echo "</br>";

// cek apakah ada array yang sesuai atau tidak
var_dump(in_array('mangga',$buah));
echo "</br>";

// array pop
array_pop($buah);

// unset untuk menghapus array
unset($buah);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>nama</th>
            <th>warna</th>
        </tr>
        <?php foreach ($fruits as $key => $value):?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['warna'] ?></td>
            </tr>
        <?php endforeach?>
    </table>
</body>
</html>