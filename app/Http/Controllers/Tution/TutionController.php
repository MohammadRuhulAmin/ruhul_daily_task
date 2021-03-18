<?php

namespace App\Http\Controllers\Tution;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutiony;
class TutionController extends Controller
{
    public function index(){
    	return view('Tutioni.tutioni');
    }
    public function store(Request $request){
    	$tutioni = new Tutiony();
    	$tutioni->student_name = $request->student_name;
    	$tutioni->student_contact = $request->student_contact;
    	$tutioni->student_facebook_id = $request->student_facebook_id;
    	$tutioni->student_email = $request->student_email;
    	$tutioni->student_address = $request->student_address;
    	$tutioni->student_salary = $request->student_salary;
    	$tutioni->student_class = $request->student_class;
    	$tutioni->active_status  = $request->active_status;
    	$tutioni->about_student = $request->about_student;
    	$tutioni->save();

    	return response()->json($tutioni);

    }
	public function alltutionilist(){
		$tution = Tutiony::all();
		return $tution;
	}
	public function deleteTutioni($id){
		$tution = Tutiony::find($id);
		$tution->delete();
		return "Tutioni is deleted successfully";
	}
	public function edit($id){
		$tution = Tutiony::find($id);
		return response()->json($tution);
	}
	public function update(Request $request,$student_id){
		$tutioni = Tutiony::find($student_id);
		$tutioni->student_name = $request->student_name;
    	$tutioni->student_contact = $request->student_contact;
    	$tutioni->student_facebook_id = $request->student_facebook_id;
    	$tutioni->student_email = $request->student_email;
    	$tutioni->student_address = $request->student_address;
    	$tutioni->student_salary = $request->student_salary;
    	$tutioni->student_class = $request->student_class;
    	$tutioni->active_status  = $request->active_status;
    	$tutioni->about_student = $request->about_student;
    	$tutioni->save();
    	return response()->json($tutioni);
		
	}
}
