<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZachPhilterImage extends Migration
{
    public function up()
    {
        Schema::create('zach_philter_image', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name', 191);
            $table->string('description', 191)->nullable();
            $table->integer('user_id');
            $table->string('filter', 191);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zach_philter_image');
    }
}
