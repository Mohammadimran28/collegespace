<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_paper', function (Blueprint $table) {
            $table->id();
            $table->char('course',20);
            $table->string('semester',50); 
            $table->string('year',30); 
            $table->string('subject',80); 
            $table->string('paper_Code',40); 
            $table->string('exampaper file');
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
        Schema::dropIfExists('exam_paper');
    }
};
