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

  	public function insertCommentOfComment($idComment, $content){
  		$result = $this->dao->insertCommentOfComment($idSquare, $idCreator, $idUserSquare, $content);

  		if($result['status']){
  			return $result;
  		}
  		else
  			return false;
  	}

  	public function getCommentsBySquare($idSquare){
  		return  $this->dao->getCommentsBySquare($idSquare);
      
  		
  	}

    public function deleteComment($comm_id){
      echo $comm_id;
      return $this->dao->deleteComment($comm_id);
    }

  	public function getComentsofComent($idSquare){

  		$result = $this->dao->getComentsofComent($idSquare);

  		if($result["status"] && count($result["data"]) > 0){
	    	return $result["data"];
	    }else{
	    	return false;
	    }
  	}
}
?>