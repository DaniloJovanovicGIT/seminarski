<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cake_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('post_content');
            $table->foreignId('category_id');
            $table->foreignId('cake_id')->nullable(true);
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cake_posts');
    }
};
