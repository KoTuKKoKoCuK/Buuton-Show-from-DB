<?php
require_once __DIR__ . "/../connections/database/connect.php";

Class SqlReturn {
    public static function goSql(string $sql){
        global $db;
        $stmt = $db->prepare($sql);
        
        if (!$stmt->execute()) {
            echo '<pre>'.print_r($stmt->errorInfo(),true) . '</pre>';
        }
        return $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function SqlPrep($objectId, $sql){
        global  $db;
        $stmt = $db->prepare(
        $sql);
        $stmt->execute(
        [
            ':objectId' => $objectId
        ]
        );
        return $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}