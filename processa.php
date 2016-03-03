<?php
include_once "Galeria.php";
if(!empty($_POST)){
	if($_POST['acao']=="Cadastro"){
		$a = new Galeria();
		$b=$a->getById($_POST['id']);
		if($b!="nenhum"){
			header("location:index.php");
		}else{
			
			}
			$g = new Galeria();
			$g->setId($_POST['Id']);
			$g->setNome($_POST['nome']);
			$g->setSenha($_POST['autor']);
			$g->setSexo($_POST['ano']);
			$g->setEstado($_POST['tipo']);
			$g->insert();
			
			header("location:index.php");
		
		}
	}else{
		header("location:index.php");
	}
	

	if($_POST['acao']=="Editar"){
			$g = new Galeria();
			$g->setId($_POST['Id']);
			$g->setNome($_POST['nome']);
			$g->setAutor($_POST['autor']);
			$g->setAno($_POST['Ano']);
			$g->setTipo($_POST['tipo']);
			$p->setId($_POST['id']);
			$g->edit();
			header("location:index.php?");
		}
	}

?>