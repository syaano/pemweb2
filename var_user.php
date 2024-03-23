<?php
// definisikan variables
$nama = 'Marliana Vino Gresia';
$umur = 20;
$berat = 40.2;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo "<br>";

//definisikan variavble system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo "<br>";

//definisikan variavble konstanta
//define: untuk memanggil variabel konstanta
define('PELAJARAN', 'Matematika');

echo PELAJARAN;


?>

