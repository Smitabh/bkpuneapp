<?php namespace Iocare\BkpuneWebservice\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('iocare_bkpunewebservice_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('iocare_bkpunewebservice_articles');
    }

}
