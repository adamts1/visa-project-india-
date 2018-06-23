(function ($) {
  $(function () {

    $('.button-collapse').sideNav();

  
  }); // end of document ready

  $(function () { // previus name checkbox
    $('#changed_surname_check').on('change', function () {
      if ($(this).is(':checked')) {
        $("#prev_surname").show(400);
        $("#prev_surname_label").show(400);
        $("#prev_given_name").show(400);
        $("#prev_given_name_label").show(400);
      } else {
        $("#prev_surname").hide(400);
        $("#prev_surname_label").hide(400);
        $("#prev_given_name").hide(400);
        $("#prev_given_name_label").hide(400);
      }
    }).trigger('change');
  });




  $(document).ready(function () {

 
    $("#visa_type_fields").hide();

    if($('#visa_type').val() == 'Bussiness'){ 
        $('#visa_type_fields').show();   }

        $("#married_field").hide(); // married dropdown
        $("#naturalization").hide(); // naturalization dropdown



    $("#lastCiti").hide();  // Last visa details radio
    $("#old_visa_flag1").click(function () {
      $("#lastCiti").show(400);
    });
    $("#old_visa_flag2").click(function () {
      $("#lastCiti").hide(400);
    });



    $("#other_pass_fields").hide();  // Other Passport radio
    $("#other_ppt_1").click(function () {
      $("#other_pass_fields").show(400);
    });
    $("#other_ppt_2").click(function () {
      $("#other_pass_fields").hide(400);
    });

    $("#pakistan_field").hide();  // pakistan  radio
    $("#grandparent_flag1").click(function () {
      $("#pakistan_field").show(400);
    });
    $("#grandparent_flag2").click(function () {
      $("#pakistan_field").hide(400);
    });

    $("#army_field").hide();  // army  radio
    $("#prev_org1").click(function () {
      $("#army_field").show(400);
    });
    $("#prev_org2").click(function () {
      $("#army_field").hide(400);
    });

    $("#denied_field").hide();  // denied access  radio
    $("#refuse_flag1").click(function () {
      $("#denied_field").show(400);
    });
    $("#refuse_flag2").click(function () {
      $("#denied_field").hide(400);
    });

    $("#dynamic_fields").hide();  // info of visits in south asia dynami fields
    $("#saarc_flag1").click(function () {
      $("#dynamic_fields").show(400);
    });
    $("#saarc_flag2").click(function () {
      $("#dynamic_fields").hide(400);
    });


    //////////// Dynamic field
    var intId = 0;
    $("#add_fields").click(function () {
      var lastField = $("#dynamic_fields div:last");
      intId +=1;
      var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
      fieldWrapper.data("idx", intId);
      var country = $("<div class=\"row\"><div class=\"col s3\"><select class=\"browser-default\" name=\"SaarcCountry[]\" id=\"saarcCountry1\"><option value=\"\" disabled selected>בחר מדינה</option><option value=\"אפגניסטן\">אפגניסטן</option><option value=\"בוטן\">בוטן</option><option value=\"פקיסטן\">פקיסטן</option><option value=\"מלדיביים\">מלדיביים</option><option value=\"בנגלדש\">בנגלדש</option><option value=\"סרי לנקה\">סרי לנקה</option><option value=\"נפאל\">נפאל</option></select></div><div class=\"col s3\"><select class=\"browser-default\" name=\"SaarcYear1[]\" id=\"saarcYear1\"><option value=\"\" disabled selected>בחר שנה</option><option value=\"2018\">2018</option><option value=\"2017\">2017</option><option value=\"2016\">2016</option><option value=\"2015\">2015</option></select></div><div class=\"col s3\"><div class=\"row\"><div class=\"input-field col s6\" style=\"margin-top:0;\"><input type=\"text\" class=\"validate\" name=\"SaarcVisitNo[]\" id=\"saarcVisitNo\"><label for=\"saarcVisitNo\">מספר ביקורים</label></div></div></div></div>");
      var removeButton = $("<input type=\"button\" class=\"btn waves-effect waves-light material-icons center\" id=\"remove_dynamic\" value=\"X\" />");
      removeButton.click(function () {
        $(this).parent().remove();
      });
      fieldWrapper.append(country);
      fieldWrapper.append(removeButton);
      $("#dynamic_fields").append(fieldWrapper);
    });


    // $("#remove_row").click(function () {

     
    //   $("#dynamic_fields").remove();

    // });



  });




})(jQuery); // end of jQuery name space