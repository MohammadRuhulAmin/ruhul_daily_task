$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

$('#update_task_btn').hide();
$('#selected_task_btn_delete').hide();


//################################ show all task ######################

function allTaskShow(){
    $.ajax({
        url:'/task/all/',
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response);
            var taskList = "";
            for(let i = 0;i<response.length;i++){
                taskList +="<tr>"+
                  "<td>" +"<input type='checkbox' id='check_box_selector'  class='form-control' name='task_selector'  value='"+response[i].id+"'>"+"</td>"+
                  "<td>" +response[i].id+"</td>"+
                  "<td>" +response[i].task_title+"</td>"+
                  "<td>" +response[i].task_description+"</td>"+
                  "<td>" +response[i].task_information+"</td>"+
                  "<td>" +response[i].task_status+"</td>"+
                  "<td>" +"<button class='btn btn-success btn-sm' onclick='editTask("+response[i].id+")'>Edit</button>"+
                  "<button class='btn btn-danger btn-sm' onclick='deleteTask("+response[i].id+")'>Delete</button>"+"</td>"+
                  "<tr>";
            }
            $('#tbody').html(taskList);
        },
        error:function(error){
            console.log(error);
        }
    })
}

allTaskShow();

//###############################################################

//###################### Insert Task #####################
$('#task_submit_btn').click(function(e){
    e.preventDefault();
    let task_title = $('#task_title').val();
    let task_description = $('#task_description').val();
    let task_information = $('#task_information').val();
    let task_status = $('#task_status').val();

    var task_info = {
        task_title : task_title,
        task_description:task_description,
        task_information:task_information,
        task_status:task_status
    };
    console.log(task_info);
    $.ajax({
        url:'/task/store/',
        type:'POST',
        data:task_info,
        dataType:'json',
        success:function(response){
            console.log(response);
            allTaskShow();
        },
        error:function(error){
            console.log(error);
        }
    });

})


//########################################################

//#####################Delete Task########################

function deleteTask(id){
    $.ajax({
        url:'/task/delete/'+id,
        type:'POST',
        dataType:'json',
        success:function(response){
            console.log(response);
            allTaskShow();
        },
        error:function(error){
            console.log(error);
        }
    });

}



//#######################################################

//######################Task Edit######################
function editTask(id){
    $('#update_task_btn').show();
    $('#task_submit_btn').hide();
    $.ajax({
        url:'/task/edit/'+id,
        type:'GET',
        dataType:'json',
        success:function(response){
            console.log(response);
            $('#task_id').val(response.id);
            $('#task_title').val(response.task_title);
            $('#task_description').val(response.task_description);
            $('#task_information').val(response.task_information);
            $('#task_status').val(response.task_status);
        },
        error:function(error){
            console.log(error);
        }
    });
}

//####################################################

//#####################Update Task ###################### 

$('#update_task_btn').click(function(e){
    e.preventDefault();
    let task_id    = $('#task_id').val();
    let task_title = $('#task_title').val();
    let task_description = $('#task_description').val();
    let task_information = $('#task_information').val();
    let task_status = $('#task_status').val();

    var task_info = {
        task_id :task_id,
        task_title : task_title,
        task_description:task_description,
        task_information:task_information,
        task_status:task_status
    };
    console.log(task_info);
    $.ajax({
        url:'/task/update/'+task_id,
        type:'POST',
        data:task_info,
        dataType:'json',
        success:function(response){
            console.log(response);
            allTaskShow();
            $('#update_task_btn').hide();
            $('#task_submit_btn').show();

        },
        error:function(error){
            console.log(error);
        }
    });
});

//###################################################################### 


//######################## Task Group Delete #############################

$('#selected_task_btn_delete').click(function(e){
    e.preventDefault();
    var tasksList = $('input[name="task_selector"]:checked');
    var deleteListId = new Array();
    
    tasksList.each(function(){
        deleteListId.push($(this).val());
    });
    var deleteItems = {
        deleteListId:deleteListId,
    }
    console.log(deleteListId);
    $.ajax({
        url:'/task/group/delete/',
        type:"POST",
        dataType:'json',
        data:deleteItems,
        success:function(response){
            console.log(response);
            allTaskShow();
            $('#selected_task_btn_delete').hide();
        },
        error:function(error){
            console.log(error);
        }
    });
    
});

//################################################# 
//####################Task select to delete button option on off ################## 



$('#selectBoxs').click(function(e){
    e.preventDefault();
    $('#selected_task_btn_delete').show();
});

