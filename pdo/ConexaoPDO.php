<?php
// Qualquer coincidência com a semelhança é mera realidade

class ConexaoPDO {

	private static $instancia;
	private $db;

	private function Conexao(){}

	public static function getConexao(){
		if(is_null(self::$instancia)){
			self::$instancia = new ConexaoPDO();
		}
		return self::$instancia;
	}

	public function Conectar(){
		$this->db = new PDO('mysql:host='.HOST.';port=3306;dbname='.DB, USER, PASSWORD, array(PDO::ATTR_PERSISTENT => true));
		return $this->db;
	}
		
}
?>