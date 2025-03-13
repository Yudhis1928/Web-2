<?php

class animal{
    public $animals;

    public function __construct($ar_animal)
    {
        $this->animals = $ar_animal;
    }

    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "- $animal <br/>";
        }
    }
    public function store($animal)
    {
        $this->animals[] = $animal;
    }
    public function update($index, $animal)
    {
        $this->animals[] = $animal;
    }
    public function destroy($index)
    {
        unset($this->animals[$index]);
    }

}

# membuat objek
# kirimkan data array ke dalam  constructor
$animal = new Animal (["Ayam", "Ikan"]);

#Method index digunakan untuk mengambil dan menampilkan
echo "Index - Menampilkan seluruh hewan <br/>";
$animal->index();
echo "<br/>";

#Method store digunakan untuk menyimpan
echo "store - Menampilkan seluruh hewan <br/>";
$animal->store("Burung");
$animal->index();
echo "<br/>";

#method update digunakan untuk mempebarui data
echo "update - Menampilkan seluruh hewan <br/>";
$animal->update(0,"Kucing Anggora");
$animal->index();
echo "<br/>";

#method Destroy digunakan untuk menghapus
echo "Destroy - Menghapus hewan <br/>";
$animal->destroy(1);
$animal->index();
echo "<br/>";