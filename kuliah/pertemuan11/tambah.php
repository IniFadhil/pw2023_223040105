<?php
require('functions.php');

$title = 'Form tambah data';

//insert data jika tombol diklik
if(isset($_POST['tambah'])) {

    if(tambah($_POST) > 0) {
 echo "<script>
 alret('data berhasil di tambahkan!');
 document.location.href = 'index.php';
 </script>";
    }
    
}

require('views/tambah.view.php');
