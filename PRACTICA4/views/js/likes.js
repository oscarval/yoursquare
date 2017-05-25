function like(id){
    var url = "likes.php?id=" + id + "?mode=like";
    $.get(url,changeLike());
}

function changeLike(status, data){
    if(status === "success"){
        $('.like').text($('.like').value() + 1);
    }
}

function dislike(id){
    var url = "likes.php?id=" + id + "?mode=dislike";
    $.get(url,changeDislike());
}

function changeDislike(status){
    if(status === "success"){
        $('.dislike').text($('.dislike').value() + 1);
    }else{
        alert("Ha habido un error en el servidor!");
    }
}
