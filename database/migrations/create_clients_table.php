<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('cpf', 14)->unique();
        $table->string('phone', 15);
        $table->timestamps();
    });

    Schema::create('addresses', function (Blueprint $table) {
        $table->id();
        $table->foreignId('client_id')->constrained();
        $table->string('street');
        $table->string('number');
        $table->string('complement')->nullable();
        $table->string('neighborhood');
        $table->string('city');
        $table->string('state', 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('addresses');
    }
};
