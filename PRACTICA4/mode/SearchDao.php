<?php
include("MySQLFunctions.php");

class SearchDao{
    private $dao;

    function __construct(){
        $this->dao = new MySQLFunctions();
    }

    function generalSearch($keyword){
        $userSelect = new MySQLFunctions();
        $squareSelect = new MySQLFunctions();

        $userSelect->select("select * from usuarios", "usr_usuario='$keyword'", "limit 0, 5");
        $userResults = $userSelect->getResponse();

        $squareSelect->select("select * from squares", "sq_title='$keyword'", "order by sq_likes", "limit 0, 5");
        $squareResults = $squareSelect->getResponse();

        $ret1 = null;
        $ret2 = null;

        if($userResults["status"] && count($userResults["data"]) > 0){
            $ret1 = $userResults["data"];
        }

        if($squareResults["status"] && count($squareResults["data"]) > 0){
            $ret2 = $squareResults["data"];
        }
        return array('users' => $ret1, 'squares' => $ret2);
}
    function userSearch($keyword,$start=0,$end=10){
        
        $userSelect = new MySQLFunctions();
        
        $userSelect->select("select * from usuarios", "usr_usuario='$keyword'", "limit '$start', '$end'");
        $userResults = $userSelect->getResponse();
        
        if($userResults["status"] && count($userResults["data"]) > 0){
           return $userResults["data"];
        }
        return null;
    }
    
    function squareSearch($keyword,$start=0,$end=10){
        
        $squareSelect = new MySQLFunctions();
        
        $squareSelect->select("select * from squares", "sq_title='$keyword'", "order by sq_likes", "limit '$start', '$end'");
        $squareResults = $squareSelect->getResponse();
        
        if($squareResults["status"] && count($squareResults["data"]) > 0){
            return $squareResults["data"];
        }
        return null;
    }
}


?>