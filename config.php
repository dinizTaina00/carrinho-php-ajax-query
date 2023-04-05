<?php
	session_start();

	define('host', 'localhost');
	define('user', 'root');
	define('password', '');
	define('database', 'cart');
	define('port', '3306');


	class MySql
	{
		private static $pdo;

		public static function conectar()
		{
			if(self::$pdo == null){
				try{
					self::$pdo = new PDO('mysql:host='.host.';dbname='.database,user,password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo "<h2>Erro ao conectar</h2>";
				}
			}

			return self::$pdo;
		}
	}
?>