<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 'name' => 'required|max:255',
        // 'acronym' => 'required',
        // 'image' => 'required|mimes:jpeg,png,jpg',
        // 'story' => 'required|string',
        // 'description' => 'required|string',
        // 'mission' => 'required|string',
        // 'vision' => 'required|string',
        // 'values' => 'required|string'

        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acronym');
            $table->string('logo')->nullable();
            $table->string('background')->nullable();
            $table->text('description');
            $table->text('story');
            $table->longText('mission');
            $table->longText('vision');
            $table->longText('values');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
