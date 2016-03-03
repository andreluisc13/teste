<?php
	require_once "MySQL.class.php";

	class Galeria{
		
		private $id;
		private $nome;
		private $autor;
		private $ano;
		private $tipo;
		
		
		
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		} 
		
		public function setAutor($autor){
			$this->autor = $autor;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function getAutor(){
			return $this->autor;
		}
		public function setAno($ano){
			$this->ano = $ano;
		}
		public function getAno(){
			return $this->ano;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function getTipo(){
			return $this->tipo;
		}
		
		}
		public function insert(){
			
			$conexao = new MySQL();
			$sql = "insert into galeria(id, nome, autor, ano, tipo) VALUES('".$this->id"','".$this->nome."','".$this->autor."','".$this->ano."','".$this->tipo."')";
			$conexao->executa($sql);
			
		}
		
		public function getById($id){
			$conexao = new MySQL();
			$sql = "select * from galeria ";
			$resultado = $conexao->consulta($sql);
			if($resultado){
				$obras = array();
				foreach($resultado as $obra){
					$obra1=new Galeria();
					$obra1->setId($obra['id']);
					$obra1->setNome($obra['nome']);
					$obra1->setSenha($uc['autor']);
					$obra1->setSexo($uc['ano']);
					$obra1->setEstado($uc['tipo']);
					
				}
				return $obra1;
			}else{
				return "nenhum";
			}
		}
		
		
		
		
	}
?>