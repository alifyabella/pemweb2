<?php 
$buah = ["M" => "Markisa", "J" => "Jeruk", "N" => "Nanas"];
echo '<ol>';
foreach ($buah as $key => $value) {
    echo '<li>' .$key.' - ' . $value .'</li>';
}
echo '</ol>';
sort($buah);
echo '<hr/>';
echo '<ol>'; 
foreach ($buah as $key => $value) {
    # code...
}
?>


<?php 
$tims = ["Mingyu", "Jeno", "Brian", "Jaehyun"];
array_pop($tims);
foreach ($tims as $person) {
    echo $person. '<br/>'
}
?>