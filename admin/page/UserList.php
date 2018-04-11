<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>普通用户管理</title>
</head>
<body>
	<?php 
		try{  
		    $dsn="mysql:host=localhost;dbname=forum";  
		    $username='root';  
		    $passwd='root';  
		    $pdo=new PDO($dsn,$username,$passwd);  
		    
		}catch(PDOException $e){  
		    echo $e->getMessage();   
		}  
	 ?>
</body>
</html>