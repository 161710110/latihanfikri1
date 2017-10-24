<?php

require_once 'identitas.php';

$konstrak = new konstrak('Fikri','Bandung','XI RPL 1','Rancamanyar');
echo "Namanya..".$konstrak->get_nama()."<br>";
echo "Tempat Lahir..".$konstrak->get_tempatlahir()."<br>";
echo "Kelas..".$konstrak->get_kelas()."<br>";
echo "Alamat..".$konstrak->get_status()."<br>"."<br>"."<br>";


$konstrak = new konstrak('Dika','Jawa','XI RPL 1','Cibaduyut');
echo "Namanya..".$konstrak->get_nama()."<br>";
echo "Tempat Lahir..".$konstrak->get_tempatlahir()."<br>";
echo "Kelas..".$konstrak->get_kelas()."<br>";
echo "Alamat..".$konstrak->get_status()."<br>"."<br>"."<br>";


$konstrak = new konstrak('Adit','Banten','XI RPL 1','Situ Tarate');
echo "Namanya..".$konstrak->get_nama()."<br>";
echo "Tempat Lahir..".$konstrak->get_tempatlahir()."<br>";
echo "Kelas..".$konstrak->get_kelas()."<br>";
echo "Alamat..".$konstrak->get_status()."<br>"."<br>"."<br>";


$konstrak = new konstrak('Ahmad','Solo','XI RPL 1','Katapang');
echo "Namanya..".$konstrak->get_nama()."<br>";
echo "Tempat Lahir..".$konstrak->get_tempatlahir()."<br>";
echo "Kelas..".$konstrak->get_kelas()."<br>";
echo "Alamat..".$konstrak->get_status()."<br>"."<br>"."<br>";


$konstrak = new konstrak('Gema','Nigeria','XI RPL 1','Sindang Palay');
echo "Namanya..".$konstrak->get_nama()."<br>";
echo "Tempat Lahir..".$konstrak->get_tempatlahir()."<br>";
echo "Kelas..".$konstrak->get_kelas()."<br>";
echo "Alamat..".$konstrak->get_status()."<br>"."<br>"."<br>";
?>