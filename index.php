<?php

class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class harimau extends animal
{
    function bersuara()
    {
        return "roar";
    }
}

class rajawali extends animal
{
    function bersuara()
    {
        return "kwaaak";
    }
}

class elang extends animal
{
    function bersuara()
    {
        return "miip";
    }
}

class  monyet extends animal
{
    function bersuara()
    {
        return "uuaa";
    }
}

echo "Animal <br>";
echo "<hr>";
// harimau
$arep = new harimau;
$arep->jumlah_kaki = 4;
$arep->bisa_terbang = "tidak bisa terbang";

echo "arep adalah harimau <br>";
echo "punya kaki sebanyak:" . $arep->jumlah_kaki . "<br>";
echo $arep->bisa_terbang . "<br>";
echo "suaranya: " . $arep->bersuara() . "<br>";

echo "<hr>";

// monyet
$jemi = new monyet;
$jemi->jumlah_kaki = 4;
$jemi->bisa_terbang = "tidak bisa terbang";

echo "jemi adalah monyet <br>";
echo "punya kaki sebanyak:" . $jemi->jumlah_kaki . "<br>";
echo $jemi->bisa_terbang . "<br>";
echo "suaranya: " . $jemi->bersuara() . "<br>";

echo "<hr>";

// elang
$irsad = new elang;
$irsad->jumlah_kaki = 2;
$irsad->bisa_terbang = "bisa terbang";

echo "ersad adalah elang <br>";
echo "punya kaki sebanyak:" . $irsad->jumlah_kaki . "<br>";
echo $irsad->bisa_terbang . "<br>";
echo "suaranya: " . $irsad->bersuara() . "<br>";

echo "<hr>";

// rajawali
$eja = new rajawali;
$eja->jumlah_kaki = 2;
$eja->bisa_terbang = "bisa terbang";

echo "eja adalah rajawali <br>";
echo "punya kaki sebanyak:" . $eja->jumlah_kaki . "<br>";
echo $eja->bisa_terbang . "<br>";
echo "suaranya: " . $eja->bersuara() . "<br>";

echo "<hr>";
