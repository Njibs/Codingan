<?php
$submodule = (isset($_GET['m'])) ? $_GET['m'] : "" ;
switch ($submodule) {
    case 'tampul': default:
        include "jurusan/tampil.php";
        break;   
    case 'tambah':
        include "jurusan/tambah.php";
        break;
    case 'simpan' :
        include "jurusan/simpan.php";
        break;       
    case 'edit' :
        include "jurusan/edit.php";
        break;       
    case 'update' :
        include "jurusan/update.php";
        break;       
    case 'hapus' :
        include "jurusan/hapus.php";
        break;
        
  
}