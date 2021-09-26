<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZachPhilterImageTag extends Migration
{
    public function up()
    {
        Schema::create('zach_philter_image_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('image_id');
            $table->integer('tag_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zach_philter_image_tag');
    }
}
