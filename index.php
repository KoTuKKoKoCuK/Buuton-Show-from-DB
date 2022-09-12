<?php
require_once __DIR__ . "/connections/database/connect.php";
require_once __DIR__ . "/sqlqueries/dbarrays.php";
require_once __DIR__ . "/vendor/autoload.php";

// foreach($res3 as $v){
//     $id_7095 = $v[0]['id'];
//     $name_7095 = $v['name'];
//     $img_7095 = $v['img'];
// }

    $id_7095 = $res3[0]['id'];
    $name_cp1251 = $res3[0]['name'];
    $img_7095 = $res3[0]['img'];
    $name_7095= iconv('CP1251','UTF-8', $name_cp1251);

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig', array(
    'id_7095' => $id_7095,
    'name_7095' => $name_7095,
    'img_7095' => $img_7095));

//  print_r($res);
//  print_r($res2);
// print_r($res3);
//  print_r($res4) . '\r';