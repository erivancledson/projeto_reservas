<?php
class Carros {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}
//retorna todos os carros cadastrados
	public function getCarros() {
		$array = array();

		$sql = "SELECT * FROM carros";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}