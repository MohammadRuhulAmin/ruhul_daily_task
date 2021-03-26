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
    <div class="container">
        <div class="jumbotron">
            <h3>Ruhul's Task : </h3>
            <div id="search-box">
                <input  type="text" class="form-control"   id="searchItem">
            </div>
            <div id="errorMsg"></div>
            <div id="search-result">
                <table class="table">
                    <thead>
                        <td>#</td>
                        <td>Title</td>
                        <td>Task Description</td>
                        
                    </thead>
                    <tbody id="tbody_result">
                        
                    </tbody>

                </table>
            </div>
        </div>
        <div>
            <form id="taskForm">
                @csrf
                <input type="hidden" name="task_id" id="task_id">
                <label class="form-control"> Task Title </label>
                <input type="text" class="form-control" name="task_title" id="task_title">
                <label class="form-control">Task Description</label>
                <input type="text" class="form-control" name="task_description" id="task_description">
                <label class="form-control">Task Information </label>
                <input type="text" class="form-control" name="task_information" id="task_information">
                <label class="form-control">Task Status</label>
                <input type="text" class="form-control" name="task_status" id="task_status">
                <button class="btn btn-primary btn-lg" id="task_submit_btn">Submit Task</button>
                <button class="btn btn-danger btn-lg" id="update_task_btn">Update Task</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <h3>Task List </h3>
        <button id="selected_task_btn_delete" class="btn btn-danger btn-sm">Delete Selected Tasks </button>
        <table class="table">
            <thead>
                <td><button id="selectBoxs" class="btn btn-warning btn-sm">Select</button></td>
                <td>#</td>
                <td>Task Title</td>
                <td>Description</td>
                <td>Information</td>
                <td>Status</td>
                <td>Action</td>
            </thead>
            <tbody id="tbody">
                
            </tbody>
        </table>
    </div>

    





   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/popper.js"></script>
   <script src="{{asset('js/Task/task.js')}}"></script>
   <script src="{{asset('js/Task/searchTask.js')}}"></script>
</body>
</html>