<pre>
<?php

define('DSN','mysql:host=localhost;dbname=lb_pdo');
define('USER','root');
define('PASSWORD','');
$options = [PDO::ATTR_PERSISTENT=>true];

try{
	$connection = new PDO(DSN,USER,PASSWORD,$options);
	echo "Connection established succesfully"."\n";
}catch (PDOException $err){
	echo "Connection failed".$err->getMessage()."\n";
}
?>
</pre>	
	