<?php

	/*arquivos onde fazemos as conexões com o banco de dados*/
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'cadastro');

	$conn = new MySQLi(HOST,USER,PASS,BASE);
	