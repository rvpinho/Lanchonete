<?php
	/*use \PDO;
	use \PDOException;*/

	class database{

		private $host = "localhost";
		private $db_name ="lanchonete";
		private $username ="root";
		private $password ="";

		public $conn;	

		//tenta conecção com o banco e trata caso de erro
		public function dbSet(){
			$this->conn = null;
			
			try {
				//instancia um objeto da classe PDO que controla a coneção com o banco de dados
				//os parametros são as caracteristicas da conecção com o banco de dados(com os atributos da classe)
				$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//controla os erros de conecção
			} catch (PDOException $e) {
				echo "Erro na conexão com o banco de dados: " . $exception->getMessage();
				//captura o erro e imprime warning
			}
			return $this->conn;//??? qual a diferença $this->$conn / $this->conn ???
		}

		public static function prepare($sql){
			//pega o codigo sql por parametro e executa ele no banco de dados
			return self::dbSet()->prepare($sql);
		}


	}

?>