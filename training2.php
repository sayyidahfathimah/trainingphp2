<?php
//date
echo "<left>"."Today is " . date("l : ") . date("Y/m/d") . "<br>" . "</left>";
echo "<br>";
//echo "<center>"."<h2>"."Selamat Datang di Toko Ceria"."</center>"."</h2>";
echo "<center>"."<h2>";
echo str_replace("datang", "ceria", "Selamat Datang di Toko Ceria");
echo "</center>"."</h2>";
echo "===============================================================================================================================================================";
echo "<br>";
echo"<p>"." kami menyediakan bermacam-macam kebutuhan harian mulai dari buah-buahan segar, sayur-sayuran serta kebutuhan rumah tangga berkualitas dengan harga terjangkau. 
kami menjaga selalu kesegaran buah dan sayur agar tetap segar sampai ke tangan pelanggan kami. selamat menikmati buah-buahan, sayur-sayuran serta barang-barang lainnya di toko kami, happy shopping :) ". "</p>";
//Konstanta
echo "<h4>"."Buah-buahan "."</h4>";
define("buah","berikut ini buah-buah yang tersedia :");
echo constant("buah");

echo "<br>";

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apel = new Fruit();
$pisang = new Fruit();
$jeruk = new Fruit();
$anggur = new Fruit();
$kiwi = new Fruit();
$nanas = new Fruit();
$mangga = new Fruit();
$jambu = new Fruit();
$semangka = new Fruit();
$melon = new Fruit();
$durian = new Fruit();
$pear = new Fruit();
$salak = new Fruit();
$pepaya = new Fruit();
$strawberry = new Fruit();
$cherry = new Fruit();
$plum = new Fruit();

$apel->set_name('Apel');
$pisang->set_name('Pisang');
$jeruk->set_name('Jeruk');
$anggur->set_name('Anggur');
$kiwi->set_name('Kiwi');
$nanas->set_name('Nanas');
$mangga->set_name('Mangga');
$jambu->set_name('Jambu');
$semangka->set_name('Semangka');
$melon->set_name('Melon');
$durian->set_name('Durian');
$pear->set_name('Pear');
$salak->set_name('Salak');
$pepaya->set_name('Pepaya');
$strawberry->set_name('strawberry');
$cherry->set_name('Cherry');
$plum->set_name('Plum');



$x = 15;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo "<br>";
echo "<b>";
echo $apel->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 43.900 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z." kg";
echo "<br>";

$x1 = 15;
$y1 = 5;
function addition1() {
    $GLOBALS['z1'] = $GLOBALS['x1'] + $GLOBALS['y1'];
}
addition1();
echo "<br>";
echo "<b>";
echo $pisang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 14.400 ";
echo " /sisir ";
echo "<br>";
echo " stok : ";
echo $z1." sisir";
echo "<br>";

$x2 = 10;
$y2 = 5;
function addition2() {
    $GLOBALS['z2'] = $GLOBALS['x2'] * $GLOBALS['y2'];
}
addition2();
echo "<b>";
echo "<br>";
echo $jeruk->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 35.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z2." kg";
echo "<br>";

$x3 = 100;
$y3 = 5;
function addition3() {
    $GLOBALS['z3'] = $GLOBALS['x3'] / $GLOBALS['y3'];
}
addition3();
echo "<b>";
echo "<br>";
echo $anggur->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 90.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z3." kg";
echo "<br>";

$x4 = 100;
$y4 = 40;
function addition4() {
    $GLOBALS['z4'] = $GLOBALS['x4'] - $GLOBALS['y4'];
}
addition4();
echo "<b>";
echo "<br>";
echo $kiwi->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 100.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z4." kg";
echo "<br>";

$x5 = 5;
$y5 = 2;
function addition5() {
    $GLOBALS['z5'] = $GLOBALS['x5'] + $GLOBALS['y5'];
}
addition5();
echo "<b>";
echo "<br>";
echo $nanas->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000 ";
echo " /buah ";
echo "<br>";
echo " stok : ";
echo $z5." buah";
echo "<br>";

$x6 = 10;
$y6 = 3;
function addition6() {
    $GLOBALS['z6'] = $GLOBALS['x6'] * $GLOBALS['y6'];
}
addition6();
echo "<b>";
echo "<br>";
echo $mangga->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 40.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z6." kg";
echo "<br>";

$x7 = 100;
$y7 = 10;
function addition7() {
    $GLOBALS['z7'] = $GLOBALS['x7'] / $GLOBALS['y7'];
}
addition7();
echo "<b>";
echo "<br>";
echo $jambu->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 20.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z7." kg";
echo "<br>";

$x8 = 20;
$y8 = 10;
function addition8() {
    $GLOBALS['z8'] = $GLOBALS['x8'] - $GLOBALS['y8'];
}
addition8();
echo "<b>";
echo "<br>";
echo $semangka->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 35.000 ";
echo " /Buah ";
echo "<br>";
echo " stok : ";
echo $z8." Buah";
echo "<br>";

$x9 = 5;
$y9 = 1;
function addition9() {
    $GLOBALS['z9'] = $GLOBALS['x9'] + $GLOBALS['y9'];
}
addition9();
echo "<b>";
echo "<br>";
echo $melon->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 25.000 ";
echo " /Buah ";
echo "<br>";
echo " stok : ";
echo $z9." Buah";
echo "<br>";

$x10 = 90;
$y10 = 10;
function addition10() {
    $GLOBALS['z10'] = $GLOBALS['x10'] / $GLOBALS['y10'];
}
addition10();
echo "<b>";
echo "<br>";
echo $durian->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 350.000 ";
echo " /Buah ";
echo "<br>";
echo " stok : ";
echo $z10." Buah";
echo "<br>";

$x11 = 10;
$y11 = 10;
function addition11() {
    $GLOBALS['z11'] = $GLOBALS['x11'] + $GLOBALS['y11'];
}
addition11();
echo "<b>";
echo "<br>";
echo $pear->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 16.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z11." kg";
echo "<br>";

$x12 = 4;
$y12 = 10;
function addition12() {
    $GLOBALS['z12'] = $GLOBALS['x12'] + $GLOBALS['y12'];
}
addition12();
echo "<b>";
echo "<br>";
echo $salak->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 14.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z12." kg";
echo "<br>";

$x13 = 4;
$y13 = 5;
function addition13() {
    $GLOBALS['z13'] = $GLOBALS['x13'] + $GLOBALS['y13'];
}
addition13();
echo "<b>";
echo "<br>";
echo $pepaya->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 16.000 ";
echo " /buah ";
echo "<br>";
echo " stok : ";
echo $z13." buah";
echo "<br>";

$x14= 2;
$y14 = 5;
function addition14() {
    $GLOBALS['z14'] = $GLOBALS['x14'] + $GLOBALS['y14'];
}
addition14();
echo "<b>";
echo "<br>";
echo $strawberry->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 80.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z14." kg";
echo "<br>";

$x15= 2;
$y15 = 1;
function addition15() {
    $GLOBALS['z15'] = $GLOBALS['x15'] + $GLOBALS['y15'];
}
addition15();
echo "<b>";
echo "<br>";
echo $cherry->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 100.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z15." kg";
echo "<br>";

$x16= 2;
$y16 = 2;
function addition16() {
    $GLOBALS['z16'] = $GLOBALS['x16'] + $GLOBALS['y16'];
}
addition16();
echo "<b>";
echo "<br>";
echo $plum->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 90.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $z16." kg";
echo "<br>";
$plum->set_name('Plum');
echo "===============================================================================================================================================================";
echo "<center>";
echo "<br>asort<br>";
echo "====";
echo "<br>";
echo "<br>";

//asort
$fruits = [
    'apel' => 5,
    'pisang' => 2,
    'jeruk' => 3,
    'anggur' => 1
];
asort($fruits);
print_r($fruits);

echo "<br><br>explode<br>";
echo "======";
echo "<br>";
echo "<br>";

//explode
$string = "apel,pisang,jeruk,anggur";
$fruits = explode(",", $string);

print_r($fruits);

echo "<br><br>implode<br>";
echo "======";
echo "<br>";
echo "<br>";

$fruits = ["apel", "pisang", "jeruk", "anggur"];
$string = implode(", ", $fruits);

echo $string;

echo "<br><br>array_merge<br>";
echo "=========";
echo "<br>";
echo "<br>";

$array1 = ["apel", "pisang"];
$array2 = ["jeruk", "anggur"];
$array3 = ["kiwi", "nanas"];

$result = array_merge($array1, $array2, $array3);

print_r($result);
echo "</center>";
echo "===============================================================================================================================================================";

echo "<h4>"."Sayur-sayuran "."</h4>";
define("sayur","berikut ini harga sayur-sayuran yang tersedia :");
echo constant("sayur");
class sayur {
  // Properties
  public $name1;

  // Methods
  function set_name($name1) {
    $this->name1 = $name1;
  }
  function get_name() {
    return $this->name1;
  }
}

$bayam = new sayur();
$kangkung = new sayur();
$labu = new sayur();
$jamur = new sayur();
$pakcoy = new sayur();
$sawi = new sayur();
$timun = new sayur();
$tomat = new sayur();
$cabai = new sayur();
$toge = new sayur();
$jagung = new sayur();
$kacangpanjang = new sayur();
$buncis = new sayur();
$wortel = new sayur();
$bawangmerah = new sayur();
$bawangputih = new sayur();
$kubis = new sayur();

$bayam->set_name('Bayam');
$kangkung->set_name('Kangkung');
$labu->set_name('Labu');
$jamur->set_name('Jamur');
$pakcoy->set_name('Pakcoy');
$sawi->set_name('Sawi');
$timun->set_name('Timun');
$tomat->set_name('Tomat');
$cabai->set_name('Cabai');
$toge->set_name('Toge');
$jagung->set_name('Jagung');
$kacangpanjang->set_name('Kacang Panjang');
$buncis->set_name('Buncis');
$wortel->set_name('Wortel');
$bawangmerah->set_name('Bawang Merah');
$bawangputih->set_name('Bawang Putih');
$kubis->set_name('Kubis');

echo "<br>";
$s1 = 2;
$v1 = 3;
function sayuran1() {
    $GLOBALS['t1'] = $GLOBALS['s1'] + $GLOBALS['v1'];
}
sayuran1();
echo "<br>";
echo "<b>";
echo $bayam->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 14.400 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t1." kg";
echo "<br>";
//echo $bayam->get_name();
//echo "<br>";
$s2 = 3;
$v2 = 3;
function sayuran2() {
    $GLOBALS['t2'] = $GLOBALS['s2'] + $GLOBALS['v2'];
}
sayuran2();
echo "<b>";
echo "<br>";
echo $kangkung->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t2." kg";
echo "<br>";
// echo $kangkung->get_name();
// echo "<br>";

$s3 = 3;
$v3 = 1;
function sayuran3() {
    $GLOBALS['t3'] = $GLOBALS['s3'] + $GLOBALS['v3'];
}
sayuran3();
echo "<b>";
echo "<br>";
echo $labu->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 12.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t3." kg";
echo "<br>";
// echo $labu->get_name();
// echo "<br>";
$s4 = 3;
$v4 = 2;
function sayuran4() {
    $GLOBALS['t4'] = $GLOBALS['s4'] + $GLOBALS['v4'];
}
sayuran4();
echo "<b>";
echo "<br>";
echo $jamur->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 14.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t4." kg";
echo "<br>";
// echo $jamur->get_name();
// echo "<br>";
$s5 = 2;
$v5 = 2;
function sayuran5() {
    $GLOBALS['t5'] = $GLOBALS['s5'] + $GLOBALS['v5'];
}
sayuran5();
echo "<b>";
echo "<br>";
echo $pakcoy->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 10.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t5." kg";
echo "<br>";
// echo $pakcoy->get_name();
// echo "<br>";
$s6 = 2;
$v6 = 3;
function sayuran6() {
    $GLOBALS['t6'] = $GLOBALS['s6'] + $GLOBALS['v6'];
}
sayuran6();
echo "<b>";
echo "<br>";
echo $sawi->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t6." kg";
echo "<br>";
// echo $sawi->get_name();
// echo "<br>";
$s7 = 3;
$v7 = 3;
function sayuran7() {
    $GLOBALS['t7'] = $GLOBALS['s7'] + $GLOBALS['v7'];
}
sayuran7();
echo "<b>";
echo "<br>";
echo $timun->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 11.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t7." kg";
echo "<br>";
// echo $timun->get_name();
// echo "<br>";
$s8 = 4;
$v8 = 3;
function sayuran8() {
    $GLOBALS['t8'] = $GLOBALS['s8'] + $GLOBALS['v8'];
}
sayuran8();
echo "<b>";
echo "<br>";
echo $tomat->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t8." kg";
echo "<br>";
// echo $tomat->get_name();
// echo "<br>";
$s9 = 2;
$v9 = 3;
function sayuran9() {
    $GLOBALS['t9'] = $GLOBALS['s9'] + $GLOBALS['v9'];
}
sayuran9();
echo "<b>";
echo "<br>";
echo $tomat->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 25.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t9." kg";
echo "<br>";
// echo $cabai->get_name();
// echo "<br>";
$s10 = 10;
$v10 = 3;
function sayuran10() {
    $GLOBALS['t10'] = $GLOBALS['s10'] + $GLOBALS['v10'];
}
sayuran10();
echo "<b>";
echo "<br>";
echo $toge->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 12.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t10." kg";
echo "<br>";

$s11 = 4;
$v11 = 3;
function sayuran11() {
    $GLOBALS['t11'] = $GLOBALS['s11'] + $GLOBALS['v11'];
}
sayuran11();
echo "<b>";
echo "<br>";
echo $jagung->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 12.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t11." kg";
echo "<br>";

$s12 = 6;
$v12 = 3;
function sayuran12() {
    $GLOBALS['t12'] = $GLOBALS['s12'] + $GLOBALS['v12'];
}
sayuran12();
echo "<b>";
echo "<br>";
echo $kacangpanjang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 10.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t12." kg";
echo "<br>";

$s13 = 1;
$v13 = 3;
function sayuran13() {
    $GLOBALS['t13'] = $GLOBALS['s13'] + $GLOBALS['v13'];
}
sayuran13();
echo "<b>";
echo "<br>";
echo $buncis->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 7.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t13." kg";
echo "<br>";

$s14 = 10;
$v14 = 3;
function sayuran14() {
    $GLOBALS['t14'] = $GLOBALS['s14'] + $GLOBALS['v14'];
}
sayuran14();
echo "<b>";
echo "<br>";
echo $wortel->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 8.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t14." kg";
echo "<br>";

$s15 = 10;
$v15 = 10;
function sayuran15() {
    $GLOBALS['t15'] = $GLOBALS['s15'] + $GLOBALS['v15'];
}
sayuran15();
echo "<b>";
echo "<br>";
echo $bawangmerah->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t15." kg";
echo "<br>";

$s16 = 10;
$v16 = 10;
function sayuran16() {
    $GLOBALS['t16'] = $GLOBALS['s16'] + $GLOBALS['v16'];
}
sayuran16();
echo "<b>";
echo "<br>";
echo $bawangputih->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000 ";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $t16." kg";
echo "<br>";

$s17 = 3;
$v17 = 6;
function sayuran17() {
    $GLOBALS['t17'] = $GLOBALS['s17'] + $GLOBALS['v17'];
}
sayuran17();
echo "<b>";
echo "<br>";
echo $kubis->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 10.000 ";
echo " /buah ";
echo "<br>";
echo " stok : ";
echo $t17." buah";
echo "<br>";
echo "<br>";
echo "===============================================================================================================================================================";
echo "<center>";
echo "<h4>"."Fresh "."</h4>";
define("daging","berikut ini daging dan aneka seafood serta kebutuhan pokok lainnya yang tersedia :");
echo constant("daging");
class daging {
  // Properties
  public $name1;

  // Methods
  function set_name($name2) {
    $this->name2 = $name2;
  }
  function get_name() {
    return $this->name2;
  }
}
$dagingrendang = new daging();
$tenderloin = new daging();
$sirloin = new daging();
$beefslice = new daging();
$iga = new daging();
$bebek = new daging();
$dagingcincang = new daging();
$ayamcincang = new daging();
$ayam = new daging();
$ikan = new daging();
$udang = new daging();
$cumi = new daging();
$kepiting = new daging();
$kerang = new daging();
$bakso = new daging();
$sosis = new daging();
$nuget = new daging();
$telurayam = new daging();
$telurayamkampung = new daging();
$telurbebek = new daging();
$beras = new daging();
$minyak = new daging();
$tepung = new daging();
$mie = new daging();
$gula = new daging();

$dagingrendang->set_name('Daging Rendang');
$tenderloin->set_name('Tenderloin');
$sirloin->set_name('Sirloin');
$beefslice->set_name('Beef Slice');
$iga->set_name('Iga');
$bebek->set_name('Bebek');
$dagingcincang->set_name('Daging Cincang');
$ayamcincang->set_name('Ayam Cincang');
$ayam->set_name('Ayam');
$ikan->set_name('Ikan');
$udang->set_name('Udang');
$cumi->set_name('Cumi');
$kepiting->set_name('Kepiting');
$kerang->set_name('Kerang');
$bakso->set_name('Aneka Bakso');
$sosis->set_name('Aneka Sosis');
$nuget->set_name('Aneka Nuget');
$telurayam->set_name('Telur Ayam');
$telurayamkampung->set_name('Telur Ayam Kampung');
$telurbebek->set_name('Telur Bebek');
$beras->set_name('Beras');
$minyak->set_name('Minyak');
$tepung->set_name('Tepung');
$mie->set_name('Mie');
$gula->set_name('Gula');

echo "<br>";
$ds1 = 10;
$da1 = 20;
function daging1() {
    $GLOBALS['p1'] = $GLOBALS['ds1'] + $GLOBALS['da1'];
}
daging1();
echo "<b>";
echo "<br>";
echo $dagingrendang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 115.000";
echo " /kg ";
echo "<br>";
echo " stok : ";
echo $p1." kg";
echo "<br>";

$ds2 = 10;
$da2 = 5;
function daging2() {
    $GLOBALS['p2'] = $GLOBALS['ds2'] + $GLOBALS['da2'];
}
daging2();
echo "<b>";
echo "<br>";
echo $tenderloin->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 215.000";
echo "<br>";
echo " stok : ";
echo $p2." kg";
echo "<br>";

$ds3 = 10;
$da3 = 3;
function daging3() {
    $GLOBALS['p3'] = $GLOBALS['ds3'] + $GLOBALS['da3'];
}
daging3();
echo "<b>";
echo "<br>";
echo $sirloin->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 225.000";
echo "<br>";
echo " stok : ";
echo $p3." kg";
echo "<br>";


$ds4 = 3;
$da4 = 3;
function daging4() {
    $GLOBALS['p4'] = $GLOBALS['ds4'] + $GLOBALS['da4'];
}
daging4();
echo "<b>";
echo "<br>";
echo $beefslice->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 120.000";
echo "<br>";
echo " stok : ";
echo $p4." kg";
echo "<br>";

$ds5 = 3;
$da5 = 4;
function daging5() {
    $GLOBALS['p5'] = $GLOBALS['ds5'] + $GLOBALS['da5'];
}
daging5();
echo "<b>";
echo "<br>";
echo $iga->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 125.000";
echo "<br>";
echo " stok : ";
echo $p5." kg";
echo "<br>";

$ds6 = 10;
$da6 = 10;
function daging6() {
    $GLOBALS['p6'] = $GLOBALS['ds6'] + $GLOBALS['da6'];
}
daging6();
echo "<b>";
echo "<br>";
echo $bebek->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 60.000";
echo "<br>";
echo " stok : ";
echo $p6." kg";
echo "<br>";

$ds7 = 3;
$da7 = 2;
function daging7() {
    $GLOBALS['p7'] = $GLOBALS['ds7'] + $GLOBALS['da7'];
}
daging7();
echo "<b>";
echo "<br>";
echo $dagingcincang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 70.000";
echo "<br>";
echo " stok : ";
echo $p7." kg";
echo "<br>";

$ds8 = 3;
$da8 = 3;
function daging8() {
    $GLOBALS['p8'] = $GLOBALS['ds8'] + $GLOBALS['da8'];
}
daging8();
echo "<b>";
echo "<br>";
echo $ayamcincang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 52.000";
echo "<br>";
echo " stok : ";
echo $p8." kg";
echo "<br>";

$ds9 = 20;
$da9 = 5;
function daging9() {
    $GLOBALS['p9'] = $GLOBALS['ds9'] + $GLOBALS['da9'];
}
daging9();
echo "<b>";
echo "<br>";
echo $ayam->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 40.000";
echo "<br>";
echo " stok : ";
echo $p9." kg";
echo "<br>";

$ds10 = 10;
$da10 = 5;
function daging10() {
    $GLOBALS['p10'] = $GLOBALS['ds10'] + $GLOBALS['da10'];
}
daging10();
echo "<b>";
echo "<br>";
echo $ikan->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 35.000";
echo "<br>";
echo " stok : ";
echo $p10." kg";
echo "<br>";

$ds11 = 2;
$da11 = 5;
function daging11() {
    $GLOBALS['p11'] = $GLOBALS['ds11'] + $GLOBALS['da11'];
}
daging11();
echo "<b>";
echo "<br>";
echo $udang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 115.000";
echo "<br>";
echo " stok : ";
echo $p11." kg";
echo "<br>";

$ds12 = 3;
$da12 = 5;
function daging12() {
    $GLOBALS['p12'] = $GLOBALS['ds12'] + $GLOBALS['da12'];
}
daging12();
echo "<b>";
echo "<br>";
echo $cumi->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 55.000";
echo "<br>";
echo " stok : ";
echo $p12." kg";
echo "<br>";

$ds13 = 1;
$da13 = 5;
function daging13() {
    $GLOBALS['p13'] = $GLOBALS['ds13'] + $GLOBALS['da13'];
}
daging13();
echo "<b>";
echo "<br>";
echo $kepiting->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 55.000";
echo "<br>";
echo " stok : ";
echo $p13." ekor";
echo "<br>";

$ds14 = 10;
$da14 = 6;
function daging14() {
    $GLOBALS['p14'] = $GLOBALS['ds14'] + $GLOBALS['da14'];
}
daging14();
echo "<b>";
echo "<br>";
echo $kerang->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 125.000";
echo "<br>";
echo " stok : ";
echo $p14." kg";
echo "<br>";

$ds15 = 20;
$da15 = 6;
function daging15() {
    $GLOBALS['p15'] = $GLOBALS['ds15'] + $GLOBALS['da15'];
}
daging15();
echo "<b>";
echo "<br>";
echo $bakso->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 125.000";
echo "<br>";
echo " stok : ";
echo $p15." pcs";
echo "<br>";

$ds16 = 17;
$da16 = 6;
function daging16() {
    $GLOBALS['p16'] = $GLOBALS['ds16'] + $GLOBALS['da16'];
}
daging16();
echo "<b>";
echo "<br>";
echo $sosis->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 87.900";
echo "<br>";
echo " stok : ";
echo $p16." pcs";
echo "<br>";

$ds17 = 15;
$da17 = 6;
function daging17() {
    $GLOBALS['p17'] = $GLOBALS['ds17'] + $GLOBALS['da17'];
}
daging17();
echo "<b>";
echo "<br>";
echo $nuget->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 77.000";
echo "<br>";
echo " stok : ";
echo $p17." pcs";
echo "<br>";

$ds18 = 10;
$da18 = 6;
function daging18() {
    $GLOBALS['p18'] = $GLOBALS['ds18'] + $GLOBALS['da18'];
}
daging18();
echo "<b>";
echo "<br>";
echo $telurayam->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 32.000";
echo "<br>";
echo " stok : ";
echo $p18." pcs";
echo "<br>";

$ds19 = 1;
$da19 = 4;
function daging19() {
    $GLOBALS['p19'] = $GLOBALS['ds19'] + $GLOBALS['da19'];
}
daging19();
echo "<b>";
echo "<br>";
echo $telurayamkampung->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 60.000";
echo "<br>";
echo " stok : ";
echo $p19." pcs";
echo "<br>";

$ds20 = 1;
$da20 = 3;
function daging20() {
    $GLOBALS['p20'] = $GLOBALS['ds20'] + $GLOBALS['da20'];
}
daging20();
echo "<b>";
echo "<br>";
echo $telurbebek->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 50.000";
echo "<br>";
echo " stok : ";
echo $p20." pcs";
echo "<br>";

$ds21 = 21;
$da21 = 3;
function daging21() {
    $GLOBALS['p21'] = $GLOBALS['ds21'] + $GLOBALS['da21'];
}
daging21();
echo "<b>";
echo "<br>";
echo $beras->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 150.000";
echo "<br>";
echo " stok : ";
echo $p21." Karung";
echo "<br>";

$ds22 = 42;
$da22 = 3;
function daging22() {
    $GLOBALS['p22'] = $GLOBALS['ds22'] + $GLOBALS['da22'];
}
daging22();
echo "<b>";
echo "<br>";
echo $minyak->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 38.000";
echo "<br>";
echo " stok : ";
echo $p22." /2lt";
echo "<br>";

$ds23 = 50;
$da23 = 3;
function daging23() {
    $GLOBALS['p23'] = $GLOBALS['ds23'] + $GLOBALS['da23'];
}
daging23();
echo "<b>";
echo "<br>";
echo $tepung->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 15.000";
echo "<br>";
echo " stok : ";
echo $p23." /kg";
echo "<br>";

$ds24 = 300;
$da24 = 3;
function daging24() {
    $GLOBALS['p24'] = $GLOBALS['ds24'] + $GLOBALS['da24'];
}
daging24();
echo "<b>";
echo "<br>";
echo $mie->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 100.000";
echo "<br>";
echo " stok : ";
echo $p24." /kardus";
echo "<br>";

$ds25 = 100;
$da25 = 5;
function daging25() {
    $GLOBALS['p25'] = $GLOBALS['ds25'] + $GLOBALS['da25'];
}
daging25();
echo "<b>";
echo "<br>";
echo $gula->get_name();
echo "</b>";
echo "<br>";
echo " harga : Rp 25.000";
echo "<br>";
echo " stok : ";
echo $p25." /kg";
echo "<br>";
echo "</center>";
echo "<br>";
echo "<br>";

echo "===============================================================================================================================================================";

echo "<h4>"."Elektronik "."</h4>";
define("elektronik","berikut ini harga barang-barang elektronik yang tersedia :");
echo constant("elektronik");
class elektronik {
  // Properties
  public $name2;

  // Methods
  function set_name($name2) {
    $this->name2 = $name2;
  }
  function get_name() {
    return $this->name2;
  }
}

$tv = new elektronik();
$kulkas = new elektronik();
$mesincuci = new elektronik();
$magicom = new elektronik();
$dispenser = new elektronik();
$microwave = new elektronik();
$airpurifier = new elektronik();
$handphone = new elektronik();
$oven = new elektronik();
$setrikauap = new elektronik();
$vacumcleaner = new elektronik();
$ac = new elektronik();
$komporlistrik = new elektronik();
$blender = new elektronik();
$airfryer = new elektronik();


$tv->set_name('TV');
$kulkas->set_name('Kulkas');
$mesincuci->set_name('Mesin Cuci');
$magicom->set_name('Magicom');
$dispenser->set_name('Dispenser');
$microwave->set_name('Microwave');
$airpurifier->set_name('Air Purifier');
$handphone->set_name('Handphone');
$oven->set_name('Oven');
$setrikauap->set_name('Setrika Uap');
$vacumcleaner->set_name('Vacum Cleaner');
$ac->set_name('AC');
$komporlistrik->set_name('Kompor Listrik');
$blender->set_name('Blender');
$airfryer->set_name('Air Fryer');

echo "<br>";
$et1 = 2;
$ek1 = 10;
function elektronik1() {
    $GLOBALS['tk1'] = $GLOBALS['et1'] + $GLOBALS['ek1'];
}
elektronik1();
echo "<br>";
echo "<b>";
echo $tv->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 1.500.000";
echo " sampai Rp 15.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk1." unit";
echo "<br>";

$et2 = 7;
$ek2 = 3;
function elektronik2() {
    $GLOBALS['tk2'] = $GLOBALS['et2'] + $GLOBALS['ek2'];
}
elektronik2();
echo "<br>";
echo "<b>";
echo $kulkas->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 3.000.000";
echo " sampai Rp 30.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk2." unit";
echo "<br>";

$et3 = 6;
$ek3 = 3;
function elektronik3() {
    $GLOBALS['tk3'] = $GLOBALS['et3'] + $GLOBALS['ek3'];
}
elektronik3();
echo "<br>";
echo "<b>";
echo $mesincuci->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 4.000.000";
echo " sampai Rp 50.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk3." unit";
echo "<br>";

$et4 = 10;
$ek4 = 7;
function elektronik4() {
    $GLOBALS['tk4'] = $GLOBALS['et4'] + $GLOBALS['ek4'];
}
elektronik4();
echo "<br>";
echo "<b>";
echo $magicom->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 300.000";
echo " sampai Rp 2.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk4." unit";
echo "<br>";

$et5 = 10;
$ek5 = 2;
function elektronik5() {
    $GLOBALS['tk5'] = $GLOBALS['et5'] + $GLOBALS['ek5'];
}
elektronik5();
echo "<br>";
echo "<b>";
echo $dispenser->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 1.000.000";
echo " sampai Rp 10.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk5." unit";
echo "<br>";

$et6 = 6;
$ek6 = 2;
function elektronik6() {
    $GLOBALS['tk6'] = $GLOBALS['et6'] + $GLOBALS['ek6'];
}
elektronik6();
echo "<br>";
echo "<b>";
echo $microwave->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 1.200.000";
echo " sampai Rp 5.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk6." unit";
echo "<br>";

$et7 = 6;
$ek7 = 2;
function elektronik7() {
    $GLOBALS['tk7'] = $GLOBALS['et7'] + $GLOBALS['ek7'];
}
elektronik7();
echo "<br>";
echo "<b>";
echo $airpurifier->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 900.000";
echo " sampai Rp 2.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk7." unit";
echo "<br>";

$et8 = 10;
$ek8 = 10;
function elektronik8() {
    $GLOBALS['tk8'] = $GLOBALS['et8'] + $GLOBALS['ek8'];
}
elektronik8();
echo "<br>";
echo "<b>";
echo $handphone->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 2.000.000";
echo " sampai Rp 25.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk8." unit";
echo "<br>";

$et9 = 7;
$ek9 = 1;
function elektronik9() {
    $GLOBALS['tk9'] = $GLOBALS['et9'] + $GLOBALS['ek9'];
}
elektronik9();
echo "<br>";
echo "<b>";
echo $oven->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 1.000.000";
echo " sampai Rp 4.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk9." unit";
echo "<br>";

$et10 = 8;
$ek10 = 1;
function elektronik10() {
    $GLOBALS['tk10'] = $GLOBALS['et10'] + $GLOBALS['ek10'];
}
elektronik10();
echo "<br>";
echo "<b>";
echo $setrikauap->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 1.000.000";
echo " sampai Rp 8.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk10." unit";
echo "<br>";

$et11 = 7;
$ek11 = 1;
function elektronik11() {
    $GLOBALS['tk11'] = $GLOBALS['et11'] + $GLOBALS['ek11'];
}
elektronik11();
echo "<br>";
echo "<b>";
echo $vacumcleaner->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 700.000";
echo " sampai Rp 4.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk11." unit";
echo "<br>";

$et12 = 6;
$ek12 = 1;
function elektronik12() {
    $GLOBALS['tk12'] = $GLOBALS['et12'] + $GLOBALS['ek12'];
}
elektronik12();
echo "<br>";
echo "<b>";
echo $ac->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 2.500.000";
echo " sampai Rp 8.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk12." unit";
echo "<br>";

$et13 = 9;
$ek13 = 1;
function elektronik13() {
    $GLOBALS['tk13'] = $GLOBALS['et13'] + $GLOBALS['ek13'];
}
elektronik13();
echo "<br>";
echo "<b>";
echo $komporlistrik->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 1.300.000";
echo " sampai Rp 5.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk13." unit";
echo "<br>";

$et14 = 11;
$ek14 = 1;
function elektronik14() {
    $GLOBALS['tk14'] = $GLOBALS['et14'] + $GLOBALS['ek14'];
}
elektronik14();
echo "<br>";
echo "<b>";
echo $blender->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 700.000";
echo " sampai Rp 2.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk14." unit";
echo "<br>";

$et15 = 6;
$ek15 = 1;
function elektronik15() {
    $GLOBALS['tk15'] = $GLOBALS['et15'] + $GLOBALS['ek15'];
}
elektronik15();
echo "<br>";
echo "<b>";
echo $airfryer->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 500.000";
echo " sampai Rp 3.000.000";
echo " /unit ";
echo "<br>";
echo " stok : ";
echo $tk15." unit";
echo "<br>";
echo "<br>";
echo "<br>";
echo "===============================================================================================================================================================";
echo "<br>";
echo "<center>";
echo "<h4>"."Kesehatan "."</h4>";
define("Kesehatan","berikut ini produk yang tersedia :");
echo constant("Kesehatan");
class Kesehatan {
  // Properties
  public $name3;

  // Methods
  function set_name($name3) {
    $this->name3 = $name3;
  }
  function get_name() {
    return $this->name3;
  }
}
$obat = new Kesehatan();
$handsanitizer= new Kesehatan();
$sabun = new Kesehatan();
$shampo = new Kesehatan();
$pastagigi = new Kesehatan();
$facialwash = new Kesehatan();
$detergent = new Kesehatan();
$pewangipakaian = new Kesehatan();
$pewangiruangan = new Kesehatan();
$pembersihlantai = new Kesehatan();
$sabuncucipiring = new Kesehatan();

$obat->set_name('Obat');
$handsanitizer->set_name('Handsanitizer');
$sabun->set_name('Sabun');
$shampo->set_name('Shampo');
$pastagigi->set_name('Pasta Gigi');
$facialwash->set_name('Facial Wash');
$detergent->set_name('Detergent');
$pewangipakaian->set_name('Pewangi Pakaian');
$pewangiruangan->set_name('Pewangi Ruangan');
$pembersihlantai->set_name('Pembersih Lantai');
$sabuncucipiring->set_name('Sabun Cuci Piring');

$k1 = 31;
$ks1 = 1;
function kesehatan1() {
    $GLOBALS['s1'] = $GLOBALS['k1'] + $GLOBALS['ks1'];
}
kesehatan1();
echo "<b>";
echo "<br>";
echo $obat->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 10.000";
echo " sampai Rp 700.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s1." pcs";
echo "<br>";

$k2 = 41;
$ks2 = 1;
function kesehatan2() {
    $GLOBALS['s2'] = $GLOBALS['k2'] + $GLOBALS['ks2'];
}
kesehatan2();
echo "<b>";
echo "<br>";
echo $handsanitizer->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 10.000";
echo " sampai Rp 30.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s2." pcs";
echo "<br>";

$k3 = 100;
$ks3 = 1;
function kesehatan3() {
    $GLOBALS['s3'] = $GLOBALS['k3'] + $GLOBALS['ks3'];
}
kesehatan3();
echo "<b>";
echo "<br>";
echo $sabun->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 5.000";
echo " sampai Rp 70.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s3." pcs";
echo "<br>";

$k4 = 45;
$ks4 = 1;
function kesehatan4() {
    $GLOBALS['s4'] = $GLOBALS['k4'] + $GLOBALS['ks4'];
}
kesehatan4();
echo "<b>";
echo "<br>";
echo $shampo->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 40.000";
echo " sampai Rp 150.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s4." pcs";
echo "<br>";

$k5 = 65;
$ks5 = 2;
function kesehatan5() {
    $GLOBALS['s5'] = $GLOBALS['k5'] + $GLOBALS['ks5'];
}
kesehatan5();
echo "<b>";
echo "<br>";
echo $pastagigi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 20.000";
echo " sampai Rp 100.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s5." pcs";
echo "<br>";

$k6 = 44;
$ks6 = 2;
function kesehatan6() {
    $GLOBALS['s6'] = $GLOBALS['k6'] + $GLOBALS['ks6'];
}
kesehatan6();
echo "<b>";
echo "<br>";
echo $facialwash->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 80.000";
echo " sampai Rp 300.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s6." pcs";
echo "<br>";

$k7 = 54;
$ks7 = 2;
function kesehatan7() {
    $GLOBALS['s7'] = $GLOBALS['k7'] + $GLOBALS['ks7'];
}
kesehatan7();
echo "<b>";
echo "<br>";
echo $detergent->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 35.000";
echo " sampai Rp 100.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s7." pcs";
echo "<br>";


$k8 = 54;
$ks8 = 10;
function kesehatan8() {
    $GLOBALS['s8'] = $GLOBALS['k8'] + $GLOBALS['ks8'];
}
kesehatan8();
echo "<b>";
echo "<br>";
echo $pewangipakaian->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 40.000";
echo " sampai Rp 85.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s8." pcs";
echo "<br>";

$k9 = 54;
$ks9 = 5;
function kesehatan9() {
    $GLOBALS['s9'] = $GLOBALS['k9'] + $GLOBALS['ks9'];
}
kesehatan9();
echo "<b>";
echo "<br>";
echo $pewangiruangan->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 15.000";
echo " sampai Rp 150.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s9." pcs";
echo "<br>";

$k10 = 54;
$ks10 = 2;
function kesehatan10() {
    $GLOBALS['s10'] = $GLOBALS['k10'] + $GLOBALS['ks10'];
}
kesehatan10();
echo "<b>";
echo "<br>";
echo $pembersihlantai->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 15.000";
echo " sampai Rp 40.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s10." pcs";
echo "<br>";

$k11 = 64;
$ks11 = 2;
function kesehatan11() {
    $GLOBALS['s11'] = $GLOBALS['k11'] + $GLOBALS['ks11'];
}
kesehatan11();
echo "<b>";
echo "<br>";
echo $sabuncucipiring->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 12.000";
echo " sampai Rp 25.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $s11." pcs";
echo "</center>";
echo "<br>";
echo "<br>";

echo "===============================================================================================================================================================";
echo "<br>";
echo "<h4>"."baby "."</h4>";
define("baby","berikut ini produk-produk baby yang tersedia :");
echo constant("baby");
class baby {
  // Properties
  public $name4;

  // Methods
  function set_name($name4) {
    $this->name4 = $name4;
  }
  function get_name() {
    return $this->name4;
  }
}
$sabunbayi = new baby();
$shampobayi= new baby();
$lotionbayi = new baby();
$minyakbayi = new baby();
$cologne = new baby();
$popokbayi = new baby();
$susubayi = new baby();
$buburbayi = new baby();
$cereal = new baby();


$sabunbayi->set_name('Sabun Bayi');
$shampobayi->set_name('Shampo Bayi');
$lotionbayi->set_name('Lotion Bayi');
$cologne->set_name('Cologne');
$minyakbayi->set_name('Minyak Bayi');
$popokbayi->set_name('Popok Bayi');
$susubayi->set_name('Susu Bayi');
$buburbayi->set_name('Bubur Bayi');
$cereal->set_name('Cereal');


$bb1 = 50;
$by1 = 1;
function baby1() {
    $GLOBALS['a1'] = $GLOBALS['bb1'] + $GLOBALS['by1'];
}
baby1();
echo "<b>";
echo "<br>";
echo $sabunbayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 10.000";
echo " sampai Rp 100.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a1." pcs";
echo "<br>";

$bb2 = 40;
$by2 = 1;
function baby2() {
    $GLOBALS['a2'] = $GLOBALS['bb2'] + $GLOBALS['by2'];
}
baby2();
echo "<b>";
echo "<br>";
echo $shampobayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 10.000";
echo " sampai Rp 100.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a2." pcs";
echo "<br>";

$bb3 = 10;
$by3 = 1;
function baby3() {
    $GLOBALS['a3'] = $GLOBALS['bb3'] + $GLOBALS['by3'];
}
baby3();
echo "<b>";
echo "<br>";
echo $lotionbayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 10.000";
echo " sampai Rp 150.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a3." pcs";
echo "<br>";


$bb4 = 13;
$by4 = 1;
function baby4() {
    $GLOBALS['a4'] = $GLOBALS['bb4'] + $GLOBALS['by4'];
}
baby4();
echo "<b>";
echo "<br>";
echo $cologne->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 25.000";
echo " sampai Rp 100.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a4." pcs";
echo "<br>";

$bb5 = 14;
$by5 = 1;
function baby5() {
    $GLOBALS['a5'] = $GLOBALS['bb5'] + $GLOBALS['by5'];
}
baby5();
echo "<b>";
echo "<br>";
echo $minyakbayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 45.000";
echo " sampai Rp 120.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a5." pcs";
echo "<br>";

$bb6 = 54;
$by6 = 1;
function baby6() {
    $GLOBALS['a6'] = $GLOBALS['bb6'] + $GLOBALS['by6'];
}
baby6();
echo "<b>";
echo "<br>";
echo $popokbayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 65.000";
echo " sampai Rp 145.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a6." pcs";
echo "<br>";

$bb7 = 64;
$by7 = 3;
function baby7() {
    $GLOBALS['a7'] = $GLOBALS['bb7'] + $GLOBALS['by7'];
}
baby7();
echo "<b>";
echo "<br>";
echo $susubayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 80.000";
echo " sampai Rp 500.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a7." pcs";
echo "<br>";


$bb8 = 34;
$by8 = 4;
function baby8() {
    $GLOBALS['a8'] = $GLOBALS['bb8'] + $GLOBALS['by8'];
}
baby8();
echo "<b>";
echo "<br>";
echo $buburbayi->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 10.000";
echo " sampai Rp 50.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a8." pcs";
echo "<br>";

$bb9 = 45;
$by9 = 4;
function baby9() {
    $GLOBALS['a9'] = $GLOBALS['bb9'] + $GLOBALS['by9'];
}
baby9();
echo "<b>";
echo "<br>";
echo $cereal->get_name();
echo "</b>";
echo "<br>";
echo " harga Mulai dari Rp 8.000";
echo " sampai Rp 40.000";
echo " /pcs ";
echo "<br>";
echo " stok : ";
echo $a9." pcs";
echo "<br>";
echo "<br>";

echo "===============================================================================================================================================================";
echo "<br>";
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = $nohpErr = $emailErr = $genderErr ="";
$name = $nohp = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  $nohp = "085612344321";
function hp($nohp) {
    // kadang ada penulisan no hp 0811 239 345
    $nohp = str_replace(" ","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace("(","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace(")","",$nohp);
    // kadang ada penulisan no hp 0811.239.345
    $nohp = str_replace(".","",$nohp);

    // cek apakah no hp mengandung karakter + dan 0-9
    if(!preg_match('/[^+0-9]/',trim($nohp))){
        // cek apakah no hp karakter 1-3 adalah +62
        if(substr(trim($nohp), 0, 3)=='+62'){
            $hp = trim($nohp);
        }
        // cek apakah no hp karakter 1 adalah 0
        elseif(substr(trim($nohp), 0, 1)=='0'){
            $hp = '+62'.substr(trim($nohp), 1);
        }
    }
    //print $hp;
}
hp($nohp);

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["alamat"])) {
    $alamat = "";
  } else {
    $alamat = test_input($_POST["alamat"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php echo "<center>";?>
<?php echo "<h3>"."Daftar Member Ceria"."</h3>";?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  No HP: <input type="text" name="nohp" value="<?php echo $nohp;?>">
  <span class="error"><?php echo $nohpErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">*<?php echo $emailErr;?></span>
  <br><br>
  Alamat: <textarea name="alamat" rows="5" cols="40" value="<?php echo $alamat;?>"></textarea>
  <br><br>
  Jenis Kelamin:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="wanita") echo "checked";?> value="wanita">Wanita
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="pria") echo "checked";?> value="pria">Pria 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="kirim" value="Submit">  
</form>

<?php
echo "<center>";
echo "<h4>Inputan saya :</h4>";
echo $name;
echo "<br>";
echo $nohp;
echo "<br>";
echo $email;
echo "<br>";
echo $alamat;
echo "<br>";
echo $gender;
echo "<br>";
echo "<br>";
echo "===============================================================================================================================================================";
echo "<br>";

class domain {
  protected static function getWebsiteName() {
    return "tokoceria.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$domainW3 = new domainW3;
echo "<center>";
echo $domainW3 -> websiteName;
echo "</center>";
echo "<center>";
echo "&copy;";
echo date("Y");
echo "</center>";

?>
</body>
</html>

