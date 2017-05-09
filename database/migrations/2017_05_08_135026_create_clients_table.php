<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clients', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('organization_id')->unsigned()->default(0);
          $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('initial');
          $table->string('status');
          $table->date('start_date');
          $table->date('date_recieved');
          $table->string('address');
          $table->string('city');
          $table->string('prov');
          $table->string('p_code');
          $table->string('residence');
          $table->string('phone');
          $table->integer('healthcard');
          $table->integer('SIN');
          $table->date('DOB');
          $table->enum('gender', ['male', 'female']);
          $table->string('prim_diagnosis');
          $table->string('sec_diagnosis');
          $table->string('family_doctor');
          $table->string('advocate');
          $table->string('special_instructions');
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
        Schema::dropIfExists('clients');
    }
}
