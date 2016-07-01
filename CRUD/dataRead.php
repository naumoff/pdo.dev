<pre>
<?php
require_once (__DIR__.'/../confyg/database.php');

$tableName = books;

$dataRead = "
SELECT * FROM $tableName
WHERE $tableName.book_id > :book_id
";

try{
	$statement = $connection->prepare($dataRead);
	$statement->bindParam(':book_id',$bookId);
	$bookId = 0;

	$statement->execute();

	while ($result = $statement->fetch(PDO::FETCH_ASSOC)){
		echo implode("\t",$result)."\n";
	}

}catch (PDOException $err){
	echo "problem occurred during table reading"."\n";
	echo $err->getMessage()."\n";
}
?>
</pre>
