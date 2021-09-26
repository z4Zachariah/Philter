<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZachPhilterImage2 extends Migration
{
    public function up()
    {
        Schema::table('zach_philter_image', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('zach_philter_image', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
