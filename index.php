<?php
// require_once __DIR__ . "/app/connections/database/connect.php";
require_once __DIR__ . "/app/classes/SqlReturn.php";
require_once  "vendor/autoload.php";

header('Content-Type: text/html; charset=utf-8');
set_time_limit(0);
error_reporting(8191);

 $res = SqlReturn::goSql("SELECT * FROM public.goodsview inner join sort on sort.id=goodsview.lksortid inner join sortname on sort.id=sortname.lksortid WHERE lkcatalogid = 1003 ");

 $id_7095 = $res[0]['id'];
 $name_cp1251 = $res[0]['name'];
 $img_7095 = $res[0]['img'];
 $name_7095= iconv('CP1251','UTF-8', $name_cp1251);

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig', array(
 'id_7095' => $id_7095,
 'name_7095' => $name_7095,
 'img_7095' => $img_7095));

// ?><pre><?php
// print_r(goSql("SELECT * FROM public.goodsview  WHERE lkcatalogid = 1003"));
// print_r(goSql("SELECT * FROM public.goodsview inner join sort on sort.id=goodsview.lksortid WHERE lkcatalogid = 1003"));
// print_r(goSql("SELECT * FROM public.goodsview inner join sort on sort.id=goodsview.lksortid inner join sortname on sort.id=sortname.lksortid WHERE lkcatalogid = 1003 "));
// print_r(Sqlprep(7095, "SELECT * FROM public.templates where object_id=:objectId"));
// ?></pre><?php

