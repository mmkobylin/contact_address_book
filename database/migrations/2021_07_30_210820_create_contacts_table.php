<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //• Sample fields for the database: 
        //Salutation, first name, middle name, last name, date of birth, address, city, postcode, tel, email.

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('salutation', 20)->default('Miss');
            $table->string('first_name', 20);
            $table->string('middle_name', 20)->nullable();
            $table->string('last_name', 20);
            $table->date('date_of_birth')->nullable();
            $table->string('address', 50)->nullable();
            $table->string('city', 30);
            $table->string('postcode', 10);
            $table->string('tel', 11)->nullable();
            $table->string('email',30)->unique();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('contacts');
    }
}
