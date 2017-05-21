<?php
include("../mode/SearchDao.php");
class Search{
    private $dao;

    function __construct(){
        $this->dao = new SearchDao();
    }

    public function generalSearch($keyword){
        $result['squares'] = $this->dao->squareSearch($keyword,0,0);
        $result['users'] =  $this->dao->userSearch($keyword,0,0);
        return $result;
    }

    public function userSearch($keyword, $start, $end){
        return $this->dao->userSearch($keyword,$start,$end);
    }

    public function squareSearch($keyword, $start, $end){
        return $this->dao->squareSearch($keyword,$start,$end);
    }
}

?>