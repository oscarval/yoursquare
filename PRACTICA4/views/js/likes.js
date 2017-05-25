function like(id){
    var url = "likes.php?id=" + id + "?mode=like";
    $.get(url,changeLike());
}

function changeLike(status, data){
    if(status === "success"){
        $('.like').text(data);
    }
}

function dislike(id){
    var url = "likes.php?id=" + id + "?mode=dislike";
    $.get(url,changeDislike());
}

function changeDislike(status, data){
    if(status === "success"){
        $('.dislike').text(data);
    }
}
