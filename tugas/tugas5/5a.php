<?php 
$mahasiswa = [
    ['nama' => 'Fadhil Rizki Fauzan',
    'npm' => '223040105',
    'email' => 'Fadhil.223040105@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Fadhil.jpg'
    ],
    ['nama' => 'Moch Zuhdi Maulana Nabilah',
    'npm' => '223040101',
    'email' => 'Zuhdi.223040101@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Zuhdi.jpg'
    ],
    ['nama' => 'Muhammad Marsa Nurjaman',
    'npm' => '223040083',
    'email' => 'Marsa.223040083@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Marsha.png'
    ],
    ['nama' => 'Muhammad Daffa Riyadi',
    'npm' => '223040120',
    'email' => 'Daffa.223040120@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'DaffaRb.png'
    ],
    ['nama' => 'Zabihullah',
    'npm' => '223040119',
    'email' => 'Zabihillah.223040119@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Zabi.jpg'
    ],
    ['nama' => 'Kaka Praditha Putra',
    'npm' => '223040087',
    'email' => 'Kaka.223040087@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Kaka.jpg'
    ],
    ['nama' => 'Rivaldy Novyan Dwi Putra',
    'npm' => '223040110',
    'email' => 'Rivaldy.223040110@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Rivaldy.jpg'
    ],
    ['nama' => 'DIKI FATURROHMAN',
    'npm' => '223040117',
    'email' => 'Diki.223040117@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Diki.jpg'
    ],
    ['nama' => 'Rizal Fahla',
    'npm' => '223040125',
    'email' => 'Rizal.223040125@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Rizal.png'
    ],
    ['nama' => 'Bayu Mahesa Pratama',
    'npm' => '223040111',
    'email' => 'Bayu.223040111@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'Bayu.jpg'
    ],
    ]  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas5</title>
</head>
<body>
<h2>Daftar mahasiswa</h2>
    <?php  foreach($mahasiswa as $mhs) {?>
    <ul>
        <li>
            <img src="image/<?= $mhs['foto']; ?>"width="150" height="150" >
        </li>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>NPM : <?= $mhs['npm']; ?></li>
        <li>Email : <?= $mhs['email']; ?></li>
        <li>Jurusan : <?= $mhs['jurusan']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>