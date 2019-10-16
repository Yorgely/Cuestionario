<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('survey.database.tables.questions'), function (Blueprint $table) {
           
            $table->string('survey_id')->nullable();
            $table->string('section_id')->nullable();
            $table->integer('user_id');
            $table->string('content');
            $table->string('title');
            $table->string('question_type')->default('text');
            $table->string('option_name')->nullable();
            $table->json('rules')->nullable();
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
        Schema::dropIfExists(config('survey.database.tables.questions'));
    }
}
