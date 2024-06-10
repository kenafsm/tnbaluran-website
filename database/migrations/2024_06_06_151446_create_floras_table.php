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
        Schema::create('floras', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('post_image');
            $table->string('slug')->unique();
            $table->string('nama_latin');
            $table->string('kepadatan');
            $table->string('sebaran');
            $table->string('status');
            $table->string('bentuk_daun');
            $table->text('morfologi');
            $table->text('anatomi');
            $table->text('kegunaan');
            $table->text('deskripsi');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('floras');
    }
};
