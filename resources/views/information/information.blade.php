<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details  Information</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div style="margin-top: 60px;"></div>
   <div class="container">
     <form id="student_form">
         @csrf 
        <div>
            <h3>Information Section</h3>
            <label class="form-control">Student Email</label>
            <input type="email" class="form-control"  id="student_email" name="student_email">
            <div id="student_email_msg">
                
            </div>
          </div>
          <div>
              <label class="form-control">Student Contact</label>
              <input type="text" class="form-control" id="student_contact" name="student_contact">
              <div id="student_contact_msg"></div>
          </div>
          <br>
          <br>
          <button class="btn btn-primary btn-lg">Save Information</button>
     </form>
        
   </div>

   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/popper.js"></script>
   <script src="{{asset('js/information/information.js')}}"></script>
  
</body>
</html>