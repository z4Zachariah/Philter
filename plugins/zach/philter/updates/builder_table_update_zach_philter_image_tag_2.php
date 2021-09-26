<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZachPhilterImageTag2 extends Migration
{
    public function up()
    {
        Schema::table('zach_philter_image_tag', function($table)
        {
            $table->integer('image_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('zach_philter_image_tag', function($table)
        {
            $table->integer('image_id')->unsigned(false)->change();
        });
    }
}
