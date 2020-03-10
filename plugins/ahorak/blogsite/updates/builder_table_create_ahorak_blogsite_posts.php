<?php namespace Ahorak\BlogSite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAhorakBlogsitePosts extends Migration
{
    public function up()
    {
        Schema::create('ahorak_blogsite_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('post_title');
            $table->integer('slug');
            $table->date('date_posted');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ahorak_blogsite_posts');
    }
}
