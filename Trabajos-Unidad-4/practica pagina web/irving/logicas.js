$(document).ready(function () {
          
    $("#checkbox").change(function (e) { 
        e.preventDefault();
        if($(this).check){
           $("#btnform").attr("disabled", true);
   }else{
       $("#btnform").attr("disabled", false); 
   }
    });
   
});