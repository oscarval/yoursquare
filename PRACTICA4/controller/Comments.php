<?php 
include('../mode/CommentsDao.php');

class Comments{

	private $dao;

  	function __construct(){
  		$this->dao = new CommentsDao();
  	}



}







?>