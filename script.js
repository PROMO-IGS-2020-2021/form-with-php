
$(document).ready(function(){
    //insertion 
    reload();
    $("form#addForm").submit(function(e){
        e.preventDefault();
        let data = $(this).serialize();
        console.log(data);
        $.ajax({
            
            url:"traitement.php",
            type:"POST",
            data:data,
            success:function(data){
                //$("#message").text(data);
                swal("SUCCÈS", data, "success");
                reload();
                $("#addForm")[0].reset();
            },
            error:function(error){
                alert("ERREUR LORS DE L INSERTION")
            }
        });
    });
});


