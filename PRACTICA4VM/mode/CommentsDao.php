<?php
include_once("MySQLFunctions.php");



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
    $result =  $this->dao->getResponse();

    if(isset($result['status']) && $result['status']){
        return true;
      }
      else
        return false;

  	}

  	//Insertar un comentario del comentario $idCommment
  	public function insertCommentOfComment($id_user, $idComment, $content){
  		$data = [
            "commth_commId" => $idComment,
            "commth_usr_id" => $id_user,
            "commth_content" => $content,
            ];
		    $this->dao->insert("comments_thread",$data);
		    return $this->dao->getResponse();
  	}


  	// Obtiene un comentario en la tabla comments asociado a una id de Square
  	public function getCommentsBySquare($idSquare){

  		$this->dao->select("select * from comments","comm_idSquare = $idSquare");
      $result =   $this->dao->getResponse();
      if($result["status"] && count($result["data"]) > 0){
        return $result["data"];
      }else{
        return false;
      }

  		return $this->dao->getResponse();

  	}

  	// Obtiene todos la linea de comentario de un comentario

    public function getCommentsByComment($comm_id){

      $this->dao->select("select * from comments_thread","commth_commId = $comm_id");
      $result = $this->dao->getResponse();
        if($result["status"] && count($result["data"]) > 0){
          return $result["data"];
        }else{
          return false;
        }
    }

    //Elimina un comentario con $comm_id

     public function deleteComment($comm_id){

      $this->dao->delete("delete from comments","comm_id=$comm_id");
      return $this->dao->getResponse();

     }

     //Elimina una respuesta de comentario con id_respuesta

      public function deleteRespuesta($commth_id){
        
        $this->dao->delete("delete from comments_thread","commth_id=$commth_id");
        return $this->dao->getResponse();
      }

    //Elimina todos los squares de un comentario

      public function deleteRespuestasByComment($commth_commId){
        
        $this->dao->delete("delete from comments_thread","commth_commId=$commth_commId");
        return $this->dao->getResponse();
      }
}

?>
