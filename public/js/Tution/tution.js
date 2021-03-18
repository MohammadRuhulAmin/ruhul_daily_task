//################## ajax setup start ###################################
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

//################### ajax setup end ####################################


// $('#tution_register_form').hide();
$('#register_student_confirm_update').hide();
// $('#tution_register_btn').click(function(){
// $('#tution_register_form').toggle();
// });

//################################Insertion start###########################

	$('#register_student_confirm').click(function(e){
		e.preventDefault();
		
		
		let student_name = $('#student_name').val();
		let student_contact = $('#student_contact').val();
		let student_facebook_id = $('#student_facebook_id').val();
		let student_email = $('#student_email').val();
		let student_address = $('#student_address').val();
		let student_salary  = $('#student_salary').val();
		let student_class = $('#student_class').val();
		let active_status = $('#active_status').val();
		let about_student = $('#about_student').val();

		var tution_information = {
			student_name:student_name,
			student_contact:student_contact,
			student_facebook_id:student_facebook_id,
			student_email:student_email,
			student_address:student_address,
			student_salary :student_salary,
			student_class:student_class,
			active_status:active_status,
			about_student:about_student
		};
		console.log(tution_information);

		$.ajax({
			url:'/tutioni/store/',
			type:'POST',
			dataType:'json',
			data:tution_information,
			success:function(response){
				console.log(response);

				allTutionInformation();
			}
		})

	});

//#################################Insertion End############################ 



//############################## Get All The information ################## 
function allTutionInformation(){
	$.ajax({
		url:"/tutioni/all/",
		type:'GET',
		dataType:'json',
		success:function(response){
			console.log(response);
			let result = "";
			for(let i = 0;i<response.length;i++){
				result +="<tr>"+
				"<td>"+response[i].id +"</td>"+
				"<td>"+response[i].student_name +"</td>"+
				"<td>"+response[i].student_contact +"</td>"+
				"<td>"+response[i].student_facebook_id +"</td>"+
				"<td>"+response[i].student_email +"</td>"+
				"<td>"+response[i].student_address +"</td>"+
				"<td>"+response[i].student_salary +"</td>"+
				"<td>"+response[i].student_class +"</td>"+
				"<td>"+response[i].active_status+"</td>"+
				"<td>"+response[i].about_student +"</td>"+
				"<td>"+"<button class='btn btn-warning btn-sm' onclick='editTution("+response[i].id+")'>Edit</button>"+"<button class='btn btn-danger btn-sm' onclick='deleteTutioni("+response[i].id+")'>Delete</button>"+"</td>"+

				"</tr>";
			}
			$('#tbody').html(result);
		},
		error:function(error){
			console.log(error);
		}
	});


}
allTutionInformation();

//############################# finish all the information ################


//############################ Start delete Tution ########################

function  deleteTutioni(id){
	$.ajax({
		url:'/tutioni/delete/'+id,
		type:'POST',
		success:function(response){
			console.log(response);
			allTutionInformation();
		},
		error:function(error){
			console.log(error);
		}

	});
}

// ########################## End Delete Tution############################# 


//########################### start Edit to fetch data in form ##################
function editTution(id){
	$('#register_student_confirm_update').show();
	$('#register_student_confirm').hide();
	$.ajax({
		url:'/tutioni/edit/'+id,
		type:'GET',
		dataType:'json',
		success:function(response){
		 console.log(response);
		 $('#student_id').val(response.id);
		 $('#student_name').val(response.student_name);
		$('#student_contact').val(response.student_contact);
		$('#student_facebook_id').val(response.student_facebook_id);
		$('#student_email').val(response.student_email);
		$('#student_address').val(response.student_address);
		$('#student_salary').val(response.student_salary);
		$('#student_class').val(response.student_class);
		$('#active_status').val(response.active_status);
		$('#about_student').val(response.about_student);
		
			
		} ,
		error:function(error){
			console.log(error);
		}

	});
	
	
}


//########################### end to fetch data in form #########################

//########################## Update Tution start ############################
 $('#register_student_confirm_update').click(function(e){
		e.preventDefault();
		$('#register_student_confirm_update').hide();
	$('#register_student_confirm').show();
		let student_id   = $('#student_id').val();
		let student_name = $('#student_name').val();
		let student_contact = $('#student_contact').val();
		let student_facebook_id = $('#student_facebook_id').val();
		let student_email = $('#student_email').val();
		let student_address = $('#student_address').val();
		let student_salary  = $('#student_salary').val();
		let student_class = $('#student_class').val();
		let active_status = $('#active_status').val();
		let about_student = $('#about_student').val();

		var tution_information = {
			student_id:student_id,
			student_name:student_name,
			student_contact:student_contact,
			student_facebook_id:student_facebook_id,
			student_email:student_email,
			student_address:student_address,
			student_salary :student_salary,
			student_class:student_class,
			active_status:active_status,
			about_student:about_student
		};
		console.log(tution_information);
		
		$.ajax({
			url:'/tutioni/update/'+student_id,
			type:'POST',
			datatype:'json',
			data:tution_information,
			success:function(response){
				
 			
				console.log(response);
				allTutionInformation();

				
			},
			error:function(error){
				console.log(error);
			}
		});
		
 });
 
//########################## end update Tution #############################