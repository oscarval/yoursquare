<?php
include("../mode/TagsDao.php");
class Tags{
    private $dao;

    function __construct(){
      $this->dao = new TagsDao();
    }
    // obtener las tags de un square
    public function getTagsSquare($squareId){
       return $this->dao->getTagsBySquareId($squareId);
    }
    // obtener las tags existente
    public function getTags($search){
       return $this->dao->getTagsByName($search);
    }
    // crear tags nueva
    public function insertTags($tags,$squareid){
       return $this->dao->createTags($tags,$squareid);
    }

}

?>
