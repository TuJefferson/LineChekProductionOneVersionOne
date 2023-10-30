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
        Schema::create('lines_checks_table', function (Blueprint $table) {
            $table->bigIncrements('id');    
            $table->string('qa_name');
            $table->string('qa_last_name');
            $table->string('shift');
            $table->string('line_number');
            $table->string('date');                    
            $table->unsignedBigInteger('lines_checks_name_recipe_id');                   
            $table->unsignedBigInteger('lines_checks_ingredient_recipe_id');                    
            $table->string('available_ingredient');
            $table->string('temperature');
            $table->string('weight');
            $table->string('comment');
            $table->timestamps(); 
            
                     
            $table->foreign('lines_checks_name_recipe_id')->references('id')->on('recipes')->onDelete('cascade');
            $table->foreign('lines_checks_ingredient_recipe_id')->references('id')->on('ingredients_recipes')->onDelete('cascade');   
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lines_checks_table');
    }
};