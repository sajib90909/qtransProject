<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number_of_words');
            $table->string('duration');
            $table->double('discount')->nullable();
            $table->string('name');
            $table->string('email');
            $table->boolean('is_complementary');
            $table->foreignId('package_type_id');
            $table->foreignId('field_of_text_id');
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
        Schema::dropIfExists('packages');
    }
}
