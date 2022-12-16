$(document).ready(function(){
    $('.count').prop('disabled', true);
    $('.minus').prop('disabled', true);
    $('.plus').prop('disabled', true);
    //    $(document).on('click','.plus',function(){
    //     // $('.count').val(parseInt($('.count').val()) + 1 );
    //     var soLuong = $(this).parent().children("input");
    //     soLuong.val(parseInt(soLuong.val())+1);
    // });
    // $(document).on('click','.minus',function(){
    //     var soLuong = $(this).parent().children("input");
    //     soLuong.val(parseInt(soLuong.val())-1);
    //         if (soLuong.val() <= 0) {
    //             soLuong.val(1);
    //         }
    //     });
 });
function validate(){
    var flag = true;
    var err_str = "";
    var fname = document.getElementsByName("fname")[0].value;
    var lname = document.getElementsByName("lname")[0].value;
    var email = document.myform.email.value;
    aptos = email.indexOf("@");
    dotpos = email.indexOf(".");
    if(!(fname.length>=2 && fname.length <=30)){
        err_str+= 'Độ dài tên không được ít hơn 2 ký tự và nhiều hơn 30 ký tự.\n'
        flag = false;
    }
    if(!(lname.length>=2 && lname.length <=30)){
        err_str+='Độ dài tên không được ít hơn 2 ký tự và nhiều hơn 30 ký tự.\n';
        flag = false;
    }
    if(aptos < 1 || dotpos - aptos  <2 ||dotpos == email.length-1)
    {
        err_str+='Thông tin về "Email" không hợp lệ.\n';
        flag = false;
    }
    if(flag == false){
        alert(err_str);
        return false;
    }
}
