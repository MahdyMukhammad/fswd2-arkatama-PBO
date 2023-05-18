<?php
// Membuat kelas induk Animal
class Animal
{
    public $nama;
    public $jenis;

    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama . " dan jenisnya adalah " . $this->jenis . ".";
    }
}

// Membuat kelas turunan Cat
class Cat extends Animal
{
    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "kucing";
    }

    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama . " dan jenisnya adalah " . $this->jenis . ".  Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

// Membuat kelas turunan Dog
class Dog extends Animal
{
    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "anjing";
    }

    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama . " dan jenisnya adalah " . $this->jenis . ". Anjing adalah hewan yang setia dan cerdas.";
    }
}

// Membuat objek dari kelas Animal
$animal = new Animal();
$animal->nama = "Harimau";
$animal->jenis = "Karnivora";

// Memanggil method getInfo() dari objek Animal
echo $animal->getInfo() . "<br>";

// Membuat objek dari kelas Cat
$cat = new Cat("Kitty");

// Memanggil method getInfo() dari objek Cat
echo $cat->getInfo() . "<br>";

// Membuat objek dari kelas Dog
$dog = new Dog("Buddy");

// Memanggil method getInfo() dari objek Dog
echo $dog->getInfo() . "<br>";
