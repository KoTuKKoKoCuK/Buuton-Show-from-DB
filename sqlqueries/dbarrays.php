
<?
require_once __DIR__ . "/../connections/database/connect.php";

header('Content-Type: text/html; charset=utf-8');
set_time_limit(0);
error_reporting(8191);

$sql  = "SELECT * FROM public.goodsview  WHERE lkcatalogid = 1003";
$stmt = $db->prepare($sql);

if (!$stmt->execute()) {
    echo '<pre>'.print_r($stmt->errorInfo(),true) . '</pre>';
}
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql2  = "SELECT * FROM public.goodsview inner join sort on sort.id=goodsview.lksortid
WHERE lkcatalogid = 1003";
$stmt2 = $db->prepare($sql2);

if (!$stmt2->execute()) {
    echo '<pre>'.print_r($stmt2->errorInfo(),true) . '</pre>';
}
$res2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$sql3  = "SELECT * FROM public.goodsview inner join sort on sort.id=goodsview.lksortid inner join sortname on sort.id=sortname.lksortid
WHERE lkcatalogid = 1003 ";
$stmt3 = $db->prepare($sql3);

if (!$stmt3->execute()) {
    echo '<pre>'.print_r($stmt3->errorInfo(),true) . '</pre>';
}
$res3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

$objectid=7095;
$stmtObj = $db->prepare(
    "SELECT * FROM public.templates where object_id=:objectid");
$stmtObj->execute(
    [
        ':objectid' => $objectid
    ]
    );
$res4 = $stmtObj->fetchAll(PDO::FETCH_ASSOC);
?>