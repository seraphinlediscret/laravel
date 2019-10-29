ligne=1; 
 
    function clickbutton(lig) 
    { 
        oldprop = $("#prop"+ligne).val(); 
        $("#button"+ligne).attr("disabled", true); 
        $.ajax({ 
            url : 'ajax-jquery-content.php', 
            type : 'POST', 
            data : 
            { 
                ligne: ligne, 
                oldprop: oldprop 
            }, 
            datatype : 'HTML', 
            success : function(codehtml,statut) 
            { 
                //alert(codehtml); 
                $("#theform").append(codehtml); 
            } 
        }); 
 
        ligne++; 
    }; 
