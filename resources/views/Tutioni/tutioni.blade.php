<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Information</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    
    <div class="jumbotron">
        <h3>Register a New Tutioni</h3>
        {{-- <div>
            <button class="btn btn-danger btn-lg" id="tution_register_btn" >Register Now</button>
        </div> --}}
    </div>
    <div class="jumbotron" id="tution_register_form">
        <form id="tutionForm">
            @csrf
            <div>

                <input type="hidden" class="form-control" name="student_id" id="student_id">
            </div>
            <hr>
            <div>
                <label class="form-control">Student Name</label>
                <input type="text" class="form-control" name="Student_name" id="student_name">
            </div>
            <hr>
            <div>
                <label class="form-control">Student Email</label>
                <input type="text" class="form-control" name="Student_email" id="student_email">
            </div>
            <hr>
            <div>
                <label class="form-control">Student Contact</label>
                <input type="text" class="form-control" name="Student_contact" id="student_contact">
            </div>
            <hr>
             <div>
                <label class="form-control">Student Facebook Id</label>
                <input type="text" class="form-control" name="student_facebook_id" id="student_facebook_id">
            </div>
            <hr>
           
            <div>
                <label class="form-control">Student Address</label>
                <input type="text" class="form-control" name="student_address" id="student_address">
            </div>
            <hr>
            <div>
                <label class="form-control">Student Salary</label>
                <input type="text" class="form-control" name="student_salary" id="student_salary">
            </div>
            <hr>
            <div>
                <label class="form-control">Student Class</label>
                <input type="text" class="form-control" name="student_class" id="student_class">
            </div>
            <hr>
            <div>
                <label class="form-control">About Student</label>
                <input type="text" class="form-control" name="about_student" id="about_student">
            </div>
            <hr>
            <div>
                <label class="form-control">Student Status</label>
                <input type="text" class="form-control" name="active_status" id="active_status">
            </div>
            <hr>
            <div>
                <button id="register_student_confirm" class="btn btn-primary btn-lg">Register Tution</button>
                <button id="register_student_confirm_update" class="btn btn-success btn-lg">Update Tution</button>
           
            </div>

        </form>

    </div>

    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
                <td>#</td>
                <td>Name</td>
                <td>Contact</td>
                <td>Facebook ID</td>
                <td>Email</td>
                <td>Address</td>
                <td>Salary</td>
                <td>Class</td>
                <td>status</td>
                <td>About</td>
                <td>Action</td>

            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>






  <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/popper.js"></script>
   <script src="js/Tution/tution.js"></script>
</body>
</html>