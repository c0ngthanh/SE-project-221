$(document).ready(function(){
    $('.count').prop('disabled', true);
       $(document).on('click','.plus',function(){
        // $('.count').val(parseInt($('.count').val()) + 1 );
        var soLuong = $(this).parent().children("input");
        soLuong.val(parseInt(soLuong.val())+1);
    });
    $(document).on('click','.minus',function(){
        var soLuong = $(this).parent().children("input");
        soLuong.val(parseInt(soLuong.val())-1);
            if (soLuong.val() <= 0) {
                soLuong.val(1);
            }
        });
 });
