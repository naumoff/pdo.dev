<pre>
<?php

require_once (__DIR__."/../confyg/database.php");

$tableName = 'books';

$updateData = "
UPDATE $tableName
SET book_name = :book_name,
	description = :description,
	updated_at = now()
WHERE book_id = :id";

try{
	$statement = $connection->prepare($updateData);
	$statement->bindParam(':book_name',$bookName);
	$statement->bindParam(':description',$description);
	$statement->bindParam(':id',$bookId);

	$bookName = 'JS for Dummies';
	$description = 'JS from zero level';
	$bookId = 2;
	$statement->execute();
	echo "{$statement->rowCount()} row(s) changed in you $tableName"."\n";

}catch(PDOException $err){
	echo 'Problem encountered :'.$err->getMessage()."\n";
}
?>
</pre>