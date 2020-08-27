<?php

//rakean
class mobil{
	var $supir;
	var $merk;
	var $jumlah_ban;

	//method mobil
	function tampilkan_nama_supir(){
		return "supir mobil pak mamat<br/>";
	}
	function merk_mobil(){
		return "merk mobil toyota<br/>";
	}
	function jumlah_ban(){
		return "jumlah ban 4<br/>";
	}

}
$mobil=new mobil();
//memanggil
echo $mobil->tampilkan_nama_supir();
echo $mobil->merk_mobil();
echo $mobil->jumlah_ban();

?>