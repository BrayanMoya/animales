<<<<<<< HEAD
<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=openshiftdb','bmoya','betamaster1',$pdo_options);
			return self::$conexion;
		}		
	} 
=======
<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=openshiftdb','bmoya','betamaster1',$pdo_options);
			return self::$conexion;
		}		
	} 
>>>>>>> 3f6123803308b5e54fed5bf1490f64bb965ca909
?>