<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_productions', function (Blueprint $table) {
            $table->id();
            $table->string('project')->nullable();
            $table->string('pc_name')->nullable();
            $table->string('tl_name')->nullable();
            $table->string('coder_name')->nullable();
            $table->integer('coder_id')->nullable();
            $table->integer('count')->nullable();
            $table->integer('quality')->nullable();
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('individual_productions');
    }
}
