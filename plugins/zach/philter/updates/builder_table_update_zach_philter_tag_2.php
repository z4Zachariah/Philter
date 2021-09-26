<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZachPhilterTag2 extends Migration
{
    public function up()
    {
        Schema::table('zach_philter_tag', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('zach_philter_tag', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
