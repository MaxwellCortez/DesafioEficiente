<?php
class Crud 
{
	public function getCarros(){
		$con = new Conexao();
		$cmd = $con->connect()->prepare("select * from car");
		$cmd->execute();
		return $cmd->fetchAll();
	}
	
	public function getCarrosById($id){
		$con = new Conexao();
		$cmd = $con->connect()->prepare("select * from car where id = $id" );
		$cmd->execute();
		return $cmd->fetchAll();
	}
	
	public function insertCarros(){
		$con = new Conexao();
		$cmd = $con->connect()->prepare("INSERT INTO `desafioeficiente`.`car` (`model`, `price`, `hp`, `consumptiongas`, `consumptioneth`, `revisionavg`, `insuranceavg`, `point`, `img`, `id`) VALUES ('teste', '40', '40', '40', '40', '40', '40', '4', 'img/teste', '40')");
		$cmd->execute();
	}
}
