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
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable(false);
            $table->string('offer_tag')->nullable(true);
            $table->string('title')->nullable(false);
            $table->string('sub_title')->nullable(false);
            $table->string('short_description');
            $table->string('redirection_link');
            $table->boolean('status')->default(0);
            $table->integer('sort_order')->default(0)->comment('Sort order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider');
    }
};
