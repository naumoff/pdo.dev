<pre>
<?php
require_once(__DIR__.'/../confyg/database.php');

$tableName = 'books';

$createData = "
INSERT INTO $tableName
(book_name,description,created_at,updated_at)
VALUES (:book_name,:description,now(),now())
";

try{
	$statement = $connection->prepare($createData);
	$statement->bindParam(':book_name',$bookName);
	$statement->bindParam(':description',$description);

	$bookName = "Advanced PHP LevelUp";
	$description = "Guide from basic to advanced level";
	$statement->execute();

	$bookName = "JavaScript for novices";
	$description = "JavaScript from zero";
	$statement->execute();

	echo "new entries added to {$tableName} table"."\n";
}catch (PDOException $err){
	echo "Problem encountered :".$err->getMessage()."\n";
}
?>
</pre>