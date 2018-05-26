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


    $("#visa_type_fields").hide(); // Business owner dropdown
    $('#visa_type').on('change', function () {
      if (this.value == '2') {
        $("#visa_type_fields").show(400);
      }
      else {
        $("#visa_type_fields").hide(400);
      }
    });

    $("#married_field").hide(); // married dropdown
    $('#marital_status').on('change', function () {
      if (this.value == 'married') {
        $("#married_field").show(400);
      }
      else {
        $("#married_field").hide(400);
      }
    });

    $("#naturalization").hide(); // naturalization dropdown
    $('#nationality_by_birth').on('change', function () {
      if (this.value == 'NATURALIZATION') {
        // $("#valid_nationality_by_birth").text("");

        $("#naturalization").show(400);
      }
      else {
        $("#naturalization").hide(400);
      }
    });


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
    $("#add_fields").click(function () {
      var lastField = $("#dynamic_fields div:last");
      // var lastField = $("#dynamic_fields");
      var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
      var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
      fieldWrapper.data("idx", intId);
      var fName = $("<input type=\"text\" class=\"fieldname\" />");
      var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
      var country = $("<div id=\"dynamic_fields\"><div class=\"row\"><div class=\"col s3\"><select class=\"browser-default\" id=\"saarcCountry1\"><option value=\"\" disabled selected>בחר מדינה</option><option value=\"1\">אפגניסטן</option><option value=\"1\">בוטן</option><option value=\"1\">פקיסטן</option><option value=\"1\">מלדיביים</option><option value=\"1\">בנגלדש</option><option value=\"1\">סרי לנקה</option><option value=\"1\">נפאל</option></select></div><div class=\"col s3\"><select class=\"browser-default\" id=\"saarcYear1\"><option value=\"\" disabled selected>בחר שנה</option><option value=\"1\">2018</option><option value=\"1\">2017</option><option value=\"1\">2016</option><option value=\"1\">2015</option></select></div><div class=\"col s3\"><div class=\"row\"><div class=\"input-field col s6\" style=\"margin-top:0;\"><input type=\"text\" class=\"validate\" id=\"saarcVisitNo\"><label for=\"saarcVisitNo\">מספר ביקורים</label></div></div></div></div></div>");
      var removeButton = $("<input type=\"button\" class=\"btn waves-effect waves-light material-icons center\" id=\"remove_dynamic\" value=\"X\" />");
      removeButton.click(function () {
        $(this).parent().remove();
      });
      fieldWrapper.append(country);
      fieldWrapper.append(removeButton);
      $("#dynamic_fields").append(fieldWrapper);
    });

  });




})(jQuery); // end of jQuery name space