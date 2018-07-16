// return to edit page with all the section open or hide according to what were choosen in form
(function ($) {
  $(function () {


$(document).ready(function(){
   if( $("input[type=radio][id='other_ppt_1']:checked").val()){
    $("#other_pass_fields").show(400);
   }

   if( $("input[type=radio][id='grandparent_flag1']:checked").val()){
    $("#pakistan_field").show(400);
   }

   if( $("input[type=radio][id='prev_org1']:checked").val()){
    $("#army_field").show(400);
   }

   if( $("input[type=radio][id='old_visa_flag1']:checked").val()){
    $("#lastCiti").show(400);
   }

   if( $("input[type=radio][id='refuse_flag1']:checked").val()){
    $("#denied_field").show(400);
   }

   if( $("input[type=radio][id='saarc_flag1']:checked").val()){
    $("#dynamic_fields").show(400);
   }

  
});
});

})(jQuery); // end of jQuery name space

