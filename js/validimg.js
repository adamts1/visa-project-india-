function validate_image()
{
          var file_data = $('#selfi_image').prop('files')[0];
          var form_data = new FormData();
          form_data.append('selfiimage', file_data);         
    $.ajax({
        type: "POST",
        url: "validimg.php",
        data: form_data,
        dataType: "html",
        cache       : false,
        contentType : false,
        processData : false,
        dataType    : 'text',           //  Send selfi image to EditPassImg.php to insert the img to mysql

    });
}