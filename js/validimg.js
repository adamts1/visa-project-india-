$(document).ready(function() {

    // handle file validation sending to file-checker.php
    var x_timer;    
    $("#selfi_image").change(function (e){
    clearTimeout(x_timer);
   var selfisize = $('#selfi_image').prop('files')[0].size; //size of selfi file
   var selfiname = $('#selfi_image').prop('files')[0].name; //name of selfi file
   console.log(selfiname);
    x_timer = setTimeout(function(){
    check_selfi_ajax(selfisize, selfiname);
   }, 1000);
  }); 

    function check_selfi_ajax(size,name){
    $("#selfi-result").html('<img src="process-gif.gif"/>'); // showing gif whle processing
    $.post('file-checker.php', {'size':size, 'name':name}, function(data) {
    $("#selfi-result").html(data); // return error message in case of invalid file
    });
    }

    $("#passport_image").change(function (e){
        // passport file handler
        clearTimeout(x_timer);
        var passportsize = $('#passport_image').prop('files')[0].size;
        var passportname = $('#passport_image').prop('files')[0].name;
        x_timer = setTimeout(function(){
        check_passport_ajax(passportsize, passportname);
       }, 1000);
      }); 
    
    function check_passport_ajax(size,name){
    $("#passport-result").html('<img src="process-gif.gif"/>');
    $.post('file-checker.php', {'size':size, 'name':name}, function(data) {
    $("#passport-result").html(data);
    });
    }

    $("#business_card").change(function (e){
     // business card handler 
      clearTimeout(x_timer);
      var cardsize = $('#business_card').prop('files')[0].size;
      var cardname = $('#business_card').prop('files')[0].name;
      x_timer = setTimeout(function(){
      check_card_ajax(cardsize, cardname);
    }, 1000);
   }); 
        
    function check_card_ajax(size,name){
    $("#card-result").html('<img src="process-gif.gif"/>');
    $.post('file-checker.php', {'size':size, 'name':name}, function(data) {
    $("#card-result").html(data);
    });
    }
    }); 