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
        Schema::create('doctors', function (Blueprint $table) {

            // TODO: salman add experience fields (factory , seeder)
            // TODO: salman add rating fields (factory , seeder)
            // TODO: salman add profile pic fields (factory , seeder)

            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("speciality");
            $table->string("slug"); 
            $table->string("experience");
            $table->string("rating");
            $table->string("image");
            $table->string("department_id");
            $table->string("status",["pending","active","cancelled"])->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
