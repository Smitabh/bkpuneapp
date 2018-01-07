<?php namespace Iocare\BkpuneWebservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCentersTable extends Migration
{

    public function up()
    {
        Schema::create('iocare_bkpunewebservice_centers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('phone_no');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('iocare_bkpunewebservice_centers');
    }

}
