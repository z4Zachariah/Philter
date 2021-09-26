<?php namespace Zach\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZachPhilterTag extends Migration
{
    public function up()
    {
        Schema::table('zach_philter_tag', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('zach_philter_tag', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
