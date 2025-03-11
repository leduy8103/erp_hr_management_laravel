<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('full_name');
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->date('hire_date')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Resigned'])->default('Active');
            $table->enum('role', ['Admin', 'Employee', 'Manager', 'Account'])->default('Employee');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};

