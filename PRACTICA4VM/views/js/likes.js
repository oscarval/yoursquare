function like(id){
    var url = "likes.php";
    $.get(url,{"id": id, "mode" : "like"},changeLike());
}

function changeLike(data,status){
        $('.like').html(Number($('.like').text()) + 1);
}

function dislike(id){
    var url = "likes.php";
    $.get(url,{"id": id, "mode" : "dislike"},changeDislike());
}

function changeDislike(){

        $('.dislike').html(Number($('.dislike').text()) + 1);
}
