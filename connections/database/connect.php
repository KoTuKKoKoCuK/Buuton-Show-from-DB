<?php
$type = 'pgsql';
$port = '6666';
$host = ##;
$base = ##;
$user = ##;
$pass = ##;
$db   = null;

try{
    $db = new PDO($type.':host='.$host.';port='.$port.';dbname='.$base.';user='.$user.';password='.$pass);        				
}catch (PDOException $e){
    echo $e->getMessage();
    $db = NULL;
    exit;
}
?>
