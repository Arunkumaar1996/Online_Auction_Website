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
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id();
            $table->string('selectcategory');
            $table->string('productname');
            $table->string('selectunit');
            $table->string('unitvalue');
            $table->string('email');
            $table->text('description');
            $table->integer('actualprice');
            $table->integer('startingbidding');
            $table->string('image_url1');
            $table->string('image_url2');
            $table->string('image_url3');
            $table->date('startingdate');
            $table->time('startingtime');
            $table->string('gridCheck');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addproducts');
    }
};
