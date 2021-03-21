<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    use HasFactory;
            protected $fillable = [
                'task_description',
                'task_information',
                'task_status',
                'task_title'
            ];

}
