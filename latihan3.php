<?php
// array multidimensi
$kelompok[ 
    ["kelompok" =>"matahari",
    "guru" => "faradilla ruhayah", 
    "kegiatan" =>"manasik haji",
    "pembimbing" =>"fathul muin",
    "gambar" => "b.jpg"
    ]

    ["kelompok" =>"bintang", 
    "guru" => "syifa nur hayati",
    "kegiatan" => "menanam padi",
    "pembimbing" =>"ridha khumaira",
    "gambar" => "a.jpg"
    
    ]

]
;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kelompok</title>
</head>
<body>
    <h1>Data kelompok</h1>
    <?php foreach ($kelompok as $klp ): ?>
    <ul>
        <li>
            <img src="img/ <?php = $klp ["gambar"]; ?> ">
        </li>
        <li>kelompok :<?=$klp["kelompok"]?></li>
        <li>guru<?=$klp["guru"]?></li>
        <li>kegiatan<?=$klp["kegiatan"]?></li>
        <li>pembimbing<?=$klp["pembimbing"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
