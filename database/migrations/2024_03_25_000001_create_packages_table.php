<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('guide');
            $table->string('destination');
            $table->string('transportation');
            $table->decimal('price', 10, 2);
            $table->string('main_image');
            $table->json('gallery_images')->nullable();
            $table->string('duration')->default('3 Days');
            $table->string('type')->default('Regular');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('packages');
    }
} 