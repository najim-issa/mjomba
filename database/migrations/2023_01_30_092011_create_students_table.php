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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String ('Full_Name');
            $table->String ('User_Name');
            $table->String ('Age');
            $table->String ('Email');
            $table->integer('Phone_number');
            $table->String('Address');
            $table->String('Password');
            $table->String ('Confirm_Password' );
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
        Schema::dropIfExists('students');
    }
};
