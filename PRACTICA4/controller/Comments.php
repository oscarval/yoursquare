<?php 
include('../mode/CommentsDao.php');

class Comments{

	private $dao;

  	function __construct(){
  		$this->dao = new CommentsDao();
  	}

  	public function insertComment($idSquare, $idCreator, $idUserSquare, $content){
  		return $this->dao->insertComment($idSquare, $idCreator, $idUserSquare, $content);

  		
  	}

  	public function insertCommentOfComment($id_user, $idComment, $content){
  		$result =  $this->dao->insertCommentOfComment($id_user, $idComment, $content);

  		if($result['status']){
  			return true;
  		}
  		else
  			return false;
  	}

  	public function getCommentsBySquare($idSquare){
  		return  $this->dao->getCommentsBySquare($idSquare);
      
  		
  	}

    public function deleteComment($comm_id){
      return $this->dao->deleteComment($comm_id);
    }

  	public function getCommentsByComment($comm_id){
      return $this->dao->getCommentsByComment($comm_id);
  	}

    public function deleteRespuesta($commth_id){
      return $this->dao->deleteRespuesta($commth_id);
    }

     public function deleteRespuestasByComment($commth_commId){
      return $this->dao->deleteRespuestasByComment($commth_commId);
     }
}
?>