$(document).ready(function(){
    //insertion 
    $("#addForm").submit(function(e){
        e.preventDefault();
        let data = $(this).serialize();
        $.ajax({
            
            url:"traitement.php",
            type:"POST",
            data:data,
            success:function(data){
                $("#message").text("SUCCESS");
            },
            error:function(error){
                alert("ERREUR LORS DE L INSERTION")
            }
        });
    });
    
    //suppression
    // onclick="return confirm('Êtes vous sûre de vouloir supprimer cette info !');"
    
    $("#deleteForm").submit(function(e){
        // e.preventDefault();
        console.log(e);
        // let id = $("td").closest(".userId");
        // console.log(id);
        // let data = $("#_id").val();
        // alert(data);
    })
    
});