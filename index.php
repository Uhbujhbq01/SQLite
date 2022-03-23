<!DOCTYPE html>
<html lang="ru">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Лаба 1</title>
	</head>

	<body>
		<?php
			class MyDB extends SQLite3{
			function __construct(){
			$this->open('mysqlitedb.db'); } }

			if(!file_exists('mysqlitedb.db')) {
			$db = new MyDB();
			$db->exec('CREATE TABLE test (name STRING, gruppa STRING, otvet STRING)');}
			else { $db = new MyDB();}
			$db->exec("INSERT INTO test (name, gruppa, otvet) VALUES ('Ирина', 'ПИ-41', '1234567')");
			$db->exec("INSERT INTO test (name, gruppa, otvet) VALUES ('Наталья', 'ПИ-31', '6787654')");
			$db->exec("INSERT INTO test (name, gruppa, otvet) VALUES ('Оксана', 'ПИ-21', '8743265')");

			$result = $db->query('SELECT name, gruppa, otvet FROM test');
			while($data = $result->fetchArray(SQLITE3_ASSOC))
			{ $array[] = $data; }
			echo '<h3> Вывод результатов </h3>';
			foreach($array as $row){
			echo $row['RecNo'].' '; echo $row['name'].' ';
			echo $row['gruppa'].' '; echo $row['otvet'].' '; echo '<br />';
			}
			$db->close();
		?>

	</body>

</html>