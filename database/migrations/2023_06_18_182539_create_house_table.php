<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('house', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('designation_id');
            $table->date('dob');
            $table->date('prl_date');
            $table->string('house_no_name');
            
            $table->string('area_id');
            $table->string('office_id');
            $table->string('reference_no');
            $table->string('reference_date');
            $table->string('comment');

            // $table->foreign('designation_id')->references('id')->on('designation');
            // $table->foreign('area_id')->references('id')->on('area');
            // $table->foreign('office_id')->references('id')->on('office');

            $table->timestamps();


        //     'name'=>['required'],
        // //     'designation_id'=>'required',
        // //     'dob'=>['required'],
        // //     'prl_date'=>['required'],
        // //     'house_no_name'=>['required'],
        // //     'area_id'=>['required'],
        // //     'office_id'=>['required'],
        // //     'reference_no'=>['required'],
        // //     'reference_date'=>['required'],
        // //     'comment'=>['required'],
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house');
    }
};
