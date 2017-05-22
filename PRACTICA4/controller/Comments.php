<?php 
include('../mode/CommentsDao.php');

class Comments{

	private $dao;

  	function __construct(){
  		$this->dao = new CommentsDao();
  	}

  	public function insertComment($idSquare, $idCreator, $idUserSquare, $content){
  		$result = $this->dao->insertComment($idSquare, $idCreator, $idUserSquare, $content);

  		if($result['status']){
  			return $result;
  		}
  		else
  			return false;
  	}

  	public function insertCommentOfComment($idComment, $content){
  		$result = $this->dao->insertCommentOfComment($idSquare, $idCreator, $idUserSquare, $content);

  		if($result['status']){
  			return $result;
  		}
  		else
  			return false;
  	}

  	public function getCommentBySquare($idSquare){

  		$result = $this->dao->getCommentBySquare($idSquare);

  		if($rresultesp["status"] && count($result["data"]) > 0){
	    	return $result["data"][0];
	    }else{
	    	return false;
	    }
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