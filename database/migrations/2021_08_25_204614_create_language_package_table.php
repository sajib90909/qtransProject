<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_package', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('package_id');

            $table->primary(['language_id', 'package_id']);

            $table->foreign('language_id')
                ->references('id')
                ->on("languages")
                ->onDelete('cascade');

            $table->foreign('package_id')
                ->references('id')
                ->on("packages")
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_package');
    }
}
