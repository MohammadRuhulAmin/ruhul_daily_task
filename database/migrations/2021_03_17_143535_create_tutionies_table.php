<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutioniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutionies', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_contact');
            $table->string('student_facebook_id');
            $table->string('student_email');
            $table->string('student_address');
            $table->integer('student_salary');
            $table->integer('student_class');
            $table->string('active_status');
            $table->string('about_student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutionies');
    }
}
