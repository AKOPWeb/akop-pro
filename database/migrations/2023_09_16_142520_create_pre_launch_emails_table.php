<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pre_launch_emails', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
