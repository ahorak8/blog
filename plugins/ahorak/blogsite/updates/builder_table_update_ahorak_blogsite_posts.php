<?php namespace Ahorak\BlogSite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAhorakBlogsitePosts extends Migration
{
    public function up()
    {
        Schema::table('ahorak_blogsite_posts', function($table)
        {
            $table->string('slug', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ahorak_blogsite_posts', function($table)
        {
            $table->integer('slug')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
