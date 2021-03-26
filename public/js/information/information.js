$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

$('#student_email').on('keyup',function(){
    var query = $(this).val();
    if(query.length>=3){
        $.ajax({
            url:'/student/email/',
            type:'GET',
            data:{
                student_email:query
            },
            dataType:'json',
            success:function(response){
                console.log(response);
                for(let i = 0;i<response.length;i++){
                    if(response[i].student_email == query){
                        $('#student_email_msg').html("<h4 class='alert alert-danger'>"+"Mail Is not Available"+"</h4>");
                    }
                    else{
                        $('#student_email_msg').html("<h4 class='alert alert-success'>"+"Mail Is Available"+"</h4>");
                    }
                }
            }
        });
    }
});



