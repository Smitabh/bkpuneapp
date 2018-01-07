<?php namespace Iocare\BkpuneWebservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTypesTable extends Migration
{

    public function up()
    {
        Schema::create('iocare_bkpunewebservice_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('center_id');
            $table->string('type');
            $table->text('specs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('iocare_bkpunewebservice_types');
    }

}
