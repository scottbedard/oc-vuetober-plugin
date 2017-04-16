<?php namespace Author\Plugin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateThingsTable extends Migration
{
    public function up()
    {
        Schema::create('author_plugin_things', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('example')->default('');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('author_plugin_things');
    }
}
