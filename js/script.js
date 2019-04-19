//Getting value from "ajax.php".


$(document).ready(function() {

 load_tbl();

   $("#searchtxt").keyup(function() {
      load_tbl(); 

   });


function load_tbl() {
      var name = $('#searchtxt').val();

       //Validating, if "name" is empty.

           $.ajax({
               type: "POST",
               url: "search.php",
               data: {
                   searchtxt: name

               },

               success: function(data) {
                $("#viewset2").html(data).show();

               } });

  } 


function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}


});


