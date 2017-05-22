<?php
include("MySQLFunctions.php");



class CommentsDao{
	private $dao;

	function __construct(){
	$this->dao = new MySQLFunctions();
	}

	/*
		*Introduce en la tabla comments un nuevo comentario. Variables:
		*&idSquare -> id del Square del comentario; $idCreatro -> id de Usuario del creador de comentario
		*$idUserSquare -> id de usuario del creador de square; $content -> cotenido del square 
	*/
	public function insertComment($idSquare, $idCreator, $idUserSquare, $content){

    $data = [
            "comm_idSquare" => $idSquare,
            "comm_idCreator" => $idCreator,
            "comm_idUserSquare" => $idUserSquare,
            "comm_content" => $content,
            ];
    $this->dao->insert("comments",$data);
    return $this->dao->getResponse();

  	}

  	//Insertar un comentario del comentario $idCommment
  	public function insertCommentOfComment($idComment, $content){
  		$data = [
            "commth_commId" => $idComment,
            "commth_content" => $content,
            ];
		    $this->dao->insert("comments_thread",$data);
		    return $this->dao->getResponse();
  	}


  	// Obtiene un comentario en la tabla comments asociado a una id de Square
  	public function getCommentBySquare($idSquare){

  		$this->dao->select("select * comments","comm_idSquare like '$idSquare'");
  		return $this->dao->getResponse();

  	}

  	// Obtiene todos la linea de comentario de un comentario

  	public function getComentsofComent($idComment){

  		$this->dao->select("select * comments_thread","commth_commId like '$idComment'");
  		return $this->dao->getResponse();
  		
  	}
  

}

?>
