function reload(){
    $.ajax({
        url:"getUser.php",
        type:"GET",
        data:{},
        success:function(data){
            $("#data-list").html(data);
        },
        error:function(error){
            console.log(error);
        }
        
    });
}