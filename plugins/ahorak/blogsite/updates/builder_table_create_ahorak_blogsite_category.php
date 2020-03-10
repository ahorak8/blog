<?php namespace Ahorak\BlogSite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAhorakBlogsiteCategory extends Migration
{
    public function up()
    {
        Schema::create('ahorak_blogsite_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category_name')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ahorak_blogsite_category');
    }
}
