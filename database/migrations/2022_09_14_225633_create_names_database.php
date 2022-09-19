<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        Schema::create('names', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("name");
        });

        Schema::create('attribute_name', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("name_id");
            $table->unsignedBigInteger("attribute_id");
        });

        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("name");
            $table->string("value");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
        Schema::dropIfExists('attribute_name');
        Schema::dropIfExists('names');
    }
};
