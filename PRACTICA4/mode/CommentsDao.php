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
  

}

?>
