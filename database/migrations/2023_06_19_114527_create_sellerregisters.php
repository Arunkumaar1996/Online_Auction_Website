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
        Schema::create('sellerregisters', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('district');
            $table->text('address');
            $table->integer('mobile_no');
            $table->text('pan_card1');
            $table->text('bank_book1');
            $table->text('photo1');
            $table->text('aadhar_front1');
            $table->text('aadhar_back1');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellerregisters');
    }
};
