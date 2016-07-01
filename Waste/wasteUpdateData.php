<pre>
<?php
require_once (__DIR__.'/../confyg/database.php');

$tableName = books;

$createData = "
UPDATE books
SET book_name = :book_name,
	description = :description,
	updated_at = now()
WHERE books.book_id = :id";

try{
	$statement = $connection->prepare($createData);
// по неизвстной причине нельзя передать $options в функцию
// execute($option)
//	$options = array(':book_name'=>$bookName,
//		':description'=>$bookDescription,
//		':id'=>$bookId);

	$bookName = 'WTG?';
	$bookDescription = "WTg descr?";
	$bookId = 2;

	$statement->execute(array(':book_name'=>$bookName,
		':description'=>$bookDescription,
		':id'=>$bookId));

	echo "{$statement->rowCount()} entries updated in $tableName"."\n";
}catch(PDOException $err){
	echo "problem encountered during {$tableName} table update"."\n";
	echo $err->getMessage()."\n";
}
?>
</pre>
