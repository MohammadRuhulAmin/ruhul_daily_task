$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

$('#searchItem').on('keyup',function(){
    var query = $(this).val();
    if(query.length>=3){
        $.ajax({
            url:'/task/search/items/',
            type:'GET',
            dataType:'json',
            data:{
                dataQuery:query
            },
            success:function(response){
                console.log(response);
                var result = "";
                if(response.length>0){
                    for(let i = 0;i<response.length;i++){
                        result +="<tr>"+"<td>"+ response[i].id +"</td>"+
                        "<td>"+ response[i].task_title +"</td>"+
                        "<td>"+ response[i].task_description +"</td>"+
                       "</td>" +"</tr>";                    
                    }
                    $('#tbody_result').html(result);
                }
                if(response.length ==0){
                    $('#tbody_result').html("<h3>"+"No Data Found"+"</h3>");
                }
            },

            error:function(error){

                $('#errorMsg').html("<h3>"+error+"</h3>")

            }
        })
    }
});