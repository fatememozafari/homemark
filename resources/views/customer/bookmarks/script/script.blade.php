<script>

    $(".addBookmark").on('click', function(e) {
        let itemId = $(this).attr("data-id");

        $.ajax({
            url:'/bookmark/store/'+itemId,
            method:"get",
            data:{
                "id" : itemId,
            },
            success: function( data ) {
                location.reload();
                console.log('add successfully');

            }
        });
    });



    $(".deleteBookmark").on('click', function(e) {
        let itemId = $(this).attr("data-id");

        $.ajax({
            url:'/bookmark/delete/'+itemId,
            method:"get",
            data:{
                "id" : itemId,
            },
            success: function( data ) {
                location.reload();
                console.log('removed successfully');

            }
        });

    });



    // $(document).ready(function (){
    //     $('.addBookmark').on('click',function (){
    //         $('.addBookmark').hide();
    //         $('.deleteBookmark').show();
    //     });
    //     $('.deleteBookmark').on('click',function (){
    //         $('.addBookmark').show();
    //         $('.deleteBookmark').hide();
    //     });
    // });

    $(".deleteItem").on('click', function(e) {
        let itemId = $(this).attr("data-id");

        $.ajax({
            url:'/item/delete/'+itemId,
            method:"get",
            data:{
                "id" : itemId,
            },
            success: function( data ) {
              $('.card'+itemId).remove();
                successMessage('با موفقیت حذف شد.')
                console.log('removed successfully');

            },
            error: function( data ) {
                errorMessage('با خطا مواجه شد.')

            }
        });

        function successMessage(message){
            var successTag = '<div class="alert alert-success alert-dismissible" id="alert" role="alert" style="position:fixed; bottom: 0; right:10px; width: 400px; z-index: 1000" data-delay="5000">\n' +
                ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                '<span aria-hidden="true">&times;</span>\n' +
                '</button>\n' +
                '<h4 class="alert-heading">عملیات موفق <small>"'+ message+'"</small></h4>\n' +
                '</div>'
            $('.ajaxMessage').append(successTag)
            $('#alert').delay(5000).fadeOut()
        }

        function errorMessage(message){
            var errorTag = '<div class="alert alert-danger alert-dismissible" id="alert" role="alert" style="position:fixed;bottom: 0; right:10px; width: 400px; z-index: 1000" data-delay="5000">\n' +
                ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                '<span aria-hidden="true">&times;</span>\n' +
                '</button>\n' +
                '<h4 class="alert-heading">عملیات ناموفق <small>"'+ message+'"</small></h4>\n' +
                '</div>'
            $('.ajaxMessage').append(errorTag)
            $('#alert').delay(5000).fadeOut()
        }
    });



</script>
