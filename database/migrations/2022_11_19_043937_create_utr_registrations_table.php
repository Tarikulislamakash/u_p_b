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
        Schema::create('utr_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('national_insurance')->nullable();
            $table->string('work_type')->nullable();
            $table->string('start_work_date')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('required_cis_registration')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('utr_registrations');
    }
};
