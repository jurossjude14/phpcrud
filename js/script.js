//Getting value from "ajax.php".


$(document).ready(function() {

         $.post("listsinfo.php",function(postresult){
          $("#viewset2").append(postresult);
        });

   //On pressing a key on "Search box" in "search.php" file. This function will be called.

   $("#search").keyup(function() {

       //Assigning search box value to javascript variable named as "name".

       var name = $('#search').val();

       //Validating, if "name" is empty.

       if (name == "") {


       }

       //If name is not empty.

       else {

           //AJAX is called.

           $.ajax({
               type: "POST",
               url: "search.php",
               //Data, that will be sent to "ajax.php".

               data: {
                   search: name

               },

               //If result found, this funtion will be called.

               success: function(data) {

                  console.log(data);
                   //Assigning result to "display" div in "search.php" file.

                   $("#viewset2").html(data).show();

               }

           });

       }

   });

});


