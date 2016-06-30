<?php
include_once 'database.php';

$insertData1 = "
INSERT INTO books
(name, description, created_at)
VALUES 
	('YII for beginers','Entry level for novices',now())
";

$insertData2 = "
INSERT INTO books
(name, description, created_at)
VALUES 
	('Introduction to PHP','Entry Level Book',now())
";

$insertData3 = "
INSERT INTO books
(name, description, created_at)
VALUES 
	('Advanced PHP','Middle level php course',now())
";

try{
	$add1 = $connection->exec($insertData1);
	$add2 = $connection->exec($insertData2);
	$add3 = $connection->exec($insertData3);
	$totalImport = $add1 + $add2  + $add3;
	echo 'total books imported = '.$totalImport;
}catch(PDOException $e) {
	echo "we have problems in entering books: ".$e;
}