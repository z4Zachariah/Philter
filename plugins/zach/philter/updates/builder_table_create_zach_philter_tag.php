<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZachPhilterTag extends Migration
{
    public function up()
    {
        Schema::create('zach_philter_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('tag', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zach_philter_tag');
    }
}
