<?php

class Manusia {
    public $nama;
    public $umur;


    

    public function setNama ($nama)
    {
        $this->nama = $nama;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama: " . $this->nama . ", Umur: " . $this->umur;
    }
}

// Membuat Objek
$ical = new Manusia();
$ical->setNama("Ical");
$ical->setUmur(18);
echo $ical->getInfo() . "<br>";

