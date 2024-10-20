<?php 
$nilai = array(10, 20, 30, 40, 50, 10, 20);
foreach ($nilai as $nilaibaru) {
    echo $nilaibaru . "<br />";
}
echo "<hr />";

$buah = array(
    "nama" => "semangka",
    "warna" => "hijau",
    "rasa" => "manis",
);

echo "nama buah adalah " . $buah['nama'] . "<br />";
echo "warna buah adalah " . $buah['warna'] . "<br />";
echo "rasa buah adalah " . $buah['rasa'] . "<br />";
?>
