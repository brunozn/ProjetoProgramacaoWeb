<?php

Class User{

	public function buscar($email){
		$pdo = new PDO('mysql:host=localhost;dbname=Projeto', 'root', '');
		$cmd = $pdo->prepare("SELECT * FROM user WHERE email = :email");
		$cmd->bindValue(":email",$email);
		$cmd->execute();
		$res = array();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}
	public function buscar_id($id){
		$pdo = new PDO('mysql:host=localhost;dbname=Projeto', 'root', '');
		$cmd = $pdo->prepare("SELECT * FROM user WHERE id = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
		$res = array();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}
	public function atualizar($nome,$telefone,$email,$cidade,$estado,$id){
		$pdo = new PDO('mysql:host=localhost;dbname=Projeto', 'root', '');
			$cmd = $pdo->prepare("UPDATE user SET nome =:a, telefone = :b, email = :c, cidade =:d, estado = :e where id = :f");
			$cmd->bindValue(":a",$nome);
			$cmd->bindValue(":b",$telefone);
			$cmd->bindValue(":c",$email);
			$cmd->bindValue(":d",$cidade);
			$cmd->bindValue(":e",$estado);
			$cmd->bindValue(":f",$id);
			$cmd->execute();
			return true;
	 }
	public function cadastrar($nome,$telefone,$email,$cidade,$estado,$senha){
		$pdo = new PDO('mysql:host=localhost:8080;dbname=Projeto', 'root', '');
		$cmd = $pdo->prepare("SELECT senha from user where email = :e");
		$cmd->bindValue(":e",$email);
		$cmd->execute();
		if($cmd->rowCount()>0){
			return false;
		}else{
			$cmd = $pdo->prepare("INSERT INTO user (nome,telefone,email,cidade,estado,senha) Values (:a, :b, :c, :d, :e, :f)");
			$cmd->bindValue(":a",$nome);
			$cmd->bindValue(":b",$telefone);
			$cmd->bindValue(":c",$email);
			$cmd->bindValue(":d",$cidade);
			$cmd->bindValue(":e",$estado);
			$cmd->bindValue(":f",$senha);
			$cmd->execute();
			var_dump($cmd);
			return true;
		}

	 }
}
?>