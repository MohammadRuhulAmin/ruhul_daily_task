<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
class InformationController extends Controller
{
    public function index(){
        return view('information.information');
    }
    public function studentEmailValidation(Request $request){
        $defaultMsg = "Email Available";
        if($request->has('student_email')){
            $sEmail = $request->student_email;
            $result = Info::where('student_email','like','%'.$sEmail.'%')->get();
            return response()->json($result);
        }
        else {
            return $defaultMsg;
        }

    }
}
