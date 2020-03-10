<?php namespace Ahorak\BlogSite\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAhorakBlogsiteCategories extends Migration
{
    public function up()
    {
        Schema::rename('ahorak_blogsite_category', 'ahorak_blogsite_categories');
    }
    
    public function down()
    {
        Schema::rename('ahorak_blogsite_categories', 'ahorak_blogsite_category');
    }
}
