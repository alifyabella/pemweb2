<?php 
$temanSaya = ["Yanti", "Zalfa", "Raffi", "Iqbal", "Rumaisha"];
print_r ($temanSaya); //untuk menampilkan seluruh nilai array
echo $temanSaya[0];
echo count($temanSaya);
echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "<ol>";
$temanSaya[1] = "Bella";
unset($temanSaya[0]);
print_r($temanSaya);

echo "<br><br><br>";
$buah = ["M" => "Markisa", "J" => "Jeruk"];
print_r($buah)
?>