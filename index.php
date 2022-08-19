<?php

include "animal.php";

echo "Animal <br>";
echo "<hr>";

class kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Kucing = new Kucing;
$Kucing->nama = "Momo";
$Kucing->jumlah_kaki = "4";
$Kucing->bisa_terbang = "tidak";
$Kucing->suara = "meooong";

echo "Momo adalah kucing <br>";
echo "Punya kaki sebanyak : $Kucing->jumlah_kaki <br>";
echo "Bisa Terbang : $Kucing->bisa_terbang <br>";
echo "Suaranya : $Kucing->suara <br>";
echo "<hr>";

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Anjing = new Anjing;
$Anjing->nama = "Doggo";
$Anjing->jumlah_kaki = "4";
$Anjing->bisa_terbang = "tidak";
$Anjing->suara = "guk guk";

echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki sebanyak : $Anjing->jumlah_kaki <br>";
echo "Bisa Terbang : $Anjing->bisa_terbang <br>";
echo "Suaranya : $Anjing->suara <br>";
echo "<hr>";

class Elang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Elang = new Elang;
$Elang->nama = "Zya";
$Elang->jumlah_kaki = "2";
$Elang->bisa_terbang = "ya";
$Elang->suara = "miiiip";

echo "Zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak : $Elang->jumlah_kaki <br>";
echo "Bisa Terbang : $Elang->bisa_terbang <br>";
echo "Suaranya : $Elang->suara <br>";
echo "<hr>";

class Angsa{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Angsa = new Angsa;
$Angsa->nama = "Masha";
$Angsa->jumlah_kaki = "2";
$Angsa->bisa_terbang = "ya";
$Angsa->suara = "kwaaak";

echo "Masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : $Angsa->jumlah_kaki <br>";
echo "Bisa Terbang : $Angsa->bisa_terbang <br>";
echo "Suaranya : $Angsa->suara <br>";
echo "<hr>";


