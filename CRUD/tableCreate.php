<pre>
<?php
require_once(__DIR__.'/../confyg/database.php');

$tableName = 'books';

$createTable = "
CREATE TABLE IF NOT EXISTS 
$tableName(
	book_id INT(11) NOT NULL AUTO_INCREMENT,
	book_name VARCHAR(150) NOT NULL,
	description VARCHAR(250) NOT NULL,
	created_at DATETIME,
	updated_at DATETIME,
	PRIMARY KEY (book_id)
)";

try{
	$statement = $connection->prepare($createTable);
	$statement->execute();
	echo "Table $tableName created or already exists"."\n";
}catch (PDOException $err){
	echo "We encountered problem during table creation:".$err->getMessage()."\n";
}
?>
</pre>
