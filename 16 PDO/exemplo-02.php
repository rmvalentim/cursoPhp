<?php 
// SQL SERVER
$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa", "senha"); // SA é o usuario SysAdmin do SQLSERVER

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}
	echo "-----------------------------------------<br/>";
}

var_dump($results);
 ?>