function add_passport_image()
            {
                      var file_data = $('#passport_image').prop('files')[0];
                      var form_data = new FormData();
                      form_data.append('passimage', file_data);         
                $.ajax({
                    type: "POST",
                    url: "EditPassImg.php",
                    data: form_data,
                    dataType: "html",
                    cache       : false,
                    contentType : false,
                    processData : false,
                    dataType    : 'text',           // what to expect back from the PHP script, if anything

                });
            }

            function add_selfi_image()
            {
                      var file_data = $('#selfi_image').prop('files')[0];
                      var form_data = new FormData();
                      form_data.append('selfiimage', file_data);         
                $.ajax({
                    type: "POST",
                    url: "EditSelfiImg.php",
                    data: form_data,
                    dataType: "html",
                    cache       : false,
                    contentType : false,
                    processData : false,
                    dataType    : 'text',           // what to expect back from the PHP script, if anything

                });
            }

            function add_bc_image()
            {
                      var file_data = $('#business_card').prop('files')[0];
                      var form_data = new FormData();
                      form_data.append('businesscard', file_data);         
                $.ajax({
                    type: "POST",
                    url: "EditBScard.php",
                    data: form_data,
                    dataType: "html",
                    cache       : false,
                    contentType : false,
                    processData : false,
                    dataType    : 'text',           // what to expect back from the PHP script, if anything

                });
            }