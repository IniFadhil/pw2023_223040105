<?php 
//Array Associative
//Array yang indexnya adalah string yang kita buat sendiri

$mahasiswa = [
    ['nama'=>'fadhil',
    'makanan'=>['🍕','🍖','🌭','🍟','🍔'],
    'peliharaan'=>'🐈‍⬛'
    ],
    ['nama'=>'galih',
    'makanan'=>['🍔'],
    'peliharaan'=>'🐁'
    ],
    ['nama'=>'erik',
    'makanan'=>['🍟','🍔','🍖'],
    'peliharaan'=>'🐒'
    ],
    ['nama'=>'udin',
    'makanan'=>['🌭','🍕'],
    'peliharaan'=>'🐨'
    ],
    ['nama'=>'ucok',
    'makanan'=>['🍖','🍟','🌭','🍕'],
    'peliharaan'=>'🐮'
    ] 
     ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>

</head>
<body>

   <h2>Daftar Mahasiswa</h2>
   <?php foreach($mahasiswa as $i => $ms) { ?>
   <ul>
    <li>Nama: <?= $ms ['nama']; ?></li>
    <li>Makanan Favorit:
         <?php foreach ($ms ['makanan'] as $m) {
            echo $m;
         }?>

        </li>
    <li>Peliharaan: <?= $ms ['peliharaan']; ?></li>
   </ul> 
   <?php } ?>

</body>
</html>