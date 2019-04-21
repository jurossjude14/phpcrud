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



 load_tbl2();

   $("#searchtxt2").keyup(function() {
      load_tbl2(); 

   });


function load_tbl2() {
      var name2 = $('#searchtxt2').val();

       //Validating, if "name" is empty.

           $.ajax({
               type: "POST",
               url: "listsinfo.php",
               data: {
                   searchtxt2:name2

               },

               success: function(data) {
                $("#viewset3").html(data).show();

               } });

  } 




});


