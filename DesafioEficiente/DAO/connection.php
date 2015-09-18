<?php
class Conexao
{
	public function connect() {
		if (!isset($_SESSION)) session_start();
		
		$conexaoF = new PDO("mysql:host=localhost;dbname=desafioeficiente","maxwell", "92616241");
		return $conexaoF;
	}
}