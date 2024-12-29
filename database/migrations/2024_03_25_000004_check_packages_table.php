<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CheckPackagesTable extends Migration
{
    public function up()
    {

        if (Schema::hasTable('packages')) {

            Schema::table('packages', function (Blueprint $table) {
                if (!Schema::hasColumn('packages', 'description')) {
                    $table->text('description')->nullable();
                }
                if (!Schema::hasColumn('packages', 'price')) {
                    $table->decimal('price', 12, 2);
                }
                if (!Schema::hasColumn('packages', 'duration')) {
                    $table->integer('duration');
                }
                if (!Schema::hasColumn('packages', 'type')) {
                    $table->string('type');
                }
                if (!Schema::hasColumn('packages', 'image')) {
                    $table->string('image')->nullable();
                }
            });
        } else {

            Schema::create('packages', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description')->nullable();
                $table->decimal('price', 12, 2);
                $table->integer('duration');
                $table->string('type');
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('packages');
    }
} 