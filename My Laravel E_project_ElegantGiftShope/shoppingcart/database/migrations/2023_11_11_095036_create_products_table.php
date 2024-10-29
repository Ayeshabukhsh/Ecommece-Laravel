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
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->integer('price');
        //     $table->string('barcode');
        //     $table->string('image');
        //     $table->unsignedBigInteger('category_id');
        //     $table->foreign('category_id')->references('id')->on('categories');
        //     $table->string('short description');
        //     $table->string('long description');
        //     $table->string('status')->default(0);
        //     $table->timestamps();
        // });
        Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('price');
    $table->string('barcode');
    $table->string('image');
    $table->unsignedBigInteger('category_id');
    $table->foreign('category_id')->references('id')->on('categories');
    $table->string('sdescription'); // Corrected field name
    $table->text('ldescription'); // Corrected field name
    $table->string('status')->default(0);
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
        Schema::dropIfExists('products');
    }
};
