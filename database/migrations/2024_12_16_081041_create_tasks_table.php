<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->string('title');
            $table->unsignedBigInteger('comments')->nullable();
            $table->string('badge_text')->nullable();
            $table->string('badge')->nullable();
            $table->date('due_date')->nullable();
            $table->enum('status', ['Urgent', 'High Priority', 'Normal Priority', 'Low Priority']);
            $table->string('badge_status')->nullable();
            $table->integer('position')->default(0); // Kolom urutan untuk task
            $table->foreignId('board_id')->constrained('boards')->cascadeOnDelete();
            $table->softDeletes();

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
        Schema::dropIfExists('tasks');
    }
};
