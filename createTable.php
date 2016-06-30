<?php
//данное вложение файла делает подключение базы данных
include_once 'database.php';

$createTable = '
CREATE TABLE IF NOT EXISTS books
(
	book_id Int(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(55) NOT NULL,
	description VARCHAR (150) NOT NULL,
	created_at TIMESTAMP,
	PRIMARY KEY(book_id)
)';

try {
	$connection->query($createTable);
	echo "Table successfully created";
} catch(PDOException $e) {
	echo "Error occured during table creation:".$e->getMessage();
}