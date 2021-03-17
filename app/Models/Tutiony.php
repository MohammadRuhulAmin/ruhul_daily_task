<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutiony extends Model
{
    use HasFactory;

        protected $fillable = [
            	'student_name','student_contact','student_facebook_id',
            	'student_email','student_address','salary',
            	'active_status','about_student'
         ];
}
