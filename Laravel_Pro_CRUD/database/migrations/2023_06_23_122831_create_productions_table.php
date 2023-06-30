<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('project')->nullable();
            $table->string('pc_name')->nullable();
            $table->string('tl_name')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->integer('topper_count')->nullable();
            $table->integer('topper_quality')->nullable();
            $table->integer('overall_count')->nullable();
            $table->integer('overall_quality')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productions');
    }
}