<?php 
 $film = [
    ['poster'=> 'Naruto Shippuden.jpg',
    'judul'=> 'Naruto The Movie',
    'tahun'=> '2014',
    'genre'=> 'Petualang',
    'pemeran utama'=> ['Naruto Shipuden'],
    'sutradara'=> 'Takuyuki Hirobe',
    ],
    ['poster'=> 'Demon Slayer.jpg',
    'judul'=> 'Demon Slayer',
    'tahun'=> '2016',
    'genre'=> 'Adventure',
    'pemeran utama'=> ['Kamado Tanjiro'],
    'sutradara'=> 'Haruo Sokozaki',
    ],
    ['poster'=> 'Akame ga kill.jpg',
    'judul'=> 'Akame ga kill',
    'tahun'=>'2010' ,
    'genre'=> 'Dark Fantasy',
    'pemeran utama'=> ['Akame'],
    'sutradara'=> 'Takahiro',
    ],
    ['poster'=> 'OnePiece.jpg',
    'judul'=> 'ONE PIECE MOVIE',
    'tahun'=>'2022' ,
    'genre'=> 'Adventure',
    'pemeran utama'=> ['Monkey D Luffy'],
    'sutradara'=> 'Goro Taniguchi',
    ],
    ['poster'=> 'Haikyu.jpg',
    'judul'=> 'Haikyu!!',
    'tahun'=>'2012' ,
    'genre'=> 'Shonen manga',
    'pemeran utama'=> ['Shoyo Hinata'],
    'sutradara'=> 'Haruichi Furudate',
    ]
     ];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM</title>
</head>
<body>
<h2>Daftar Film</h2>
    <?php  foreach($film as $f) {?>
    <ul>
    <li>
            <img src="image/<?= $f['poster']; ?>" width ="120" height="200">
        </li>
        <li>Judul : <?= $f['judul']; ?></li>
        <li>Tahun : <?= $f['tahun']; ?></li>
        <li>Genre : <?= $f['genre']; ?></li>
        <li>Pemeran Utama : 
            <?php foreach($f['pemeran utama'] as $p){
                echo $p;
            } ?>
        </li>
        <li>Sutradara : <?= $f['sutradara']; ?></li>
    </ul>
    <?php } ?> 
</body>
</html>