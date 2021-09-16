<?php

namespace App\Controllers;

class Mahasiswa extends BaseController{
    public function index(){
        echo "Ini adalah Controller Mahasiswa <br>";
        echo "<a href='" .route_to('profil'). "'>Link ke routing profil</a>";
    }

    public function dataMahasiswa($nama, $usia){
        echo "Nama Saya adalah " . $nama . ", Usia " . $usia;
    }

    protected function testing(){
        echo "Ini adalah method testing yang merupakan PROTECTED method";
    }

    public function profil(){
        echo"Ini adalah method profil dalam Controller Mahasiswa";
    }

    public function mahasiswaDataId($id){
		echo "Ini adalah method dengan nama mahasiswaDataId dengan ID $id";
	}
 
	public function mahasiswaDataName($name){
		echo "Ini adalah method dengan nama mahasiswaDataName, dengan Name $name";
	}
}

?>