<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("website")->nullable();
            $table->boolean("is_international")->default(true);
            $table->integer("students_number")->default(500);
            $table->longText("about")->nullable();
            $table->enum("status", ["new", "public"])->default("new");
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
        Schema::dropIfExists('universities');
    }
}
