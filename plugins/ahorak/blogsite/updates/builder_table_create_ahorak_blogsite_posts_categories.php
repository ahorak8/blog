<?php namespace Ahorak\BlogSite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAhorakBlogsitePostsCategories extends Migration
{
    public function up()
    {
        Schema::create('ahorak_blogsite_posts_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['post_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ahorak_blogsite_posts_categories');
    }
}
