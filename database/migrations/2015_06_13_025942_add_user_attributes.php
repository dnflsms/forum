<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function ($table) {
        $table->integer('post_count')->default(0);
        $table->integer('reputation')->default(0);
        $table->integer('group_id')->default(1);
        $table->boolean('is_active')->default(False);
        $table->boolean('is_mod')->default(False);
        $table->boolean('is_admin')->default(False);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function ($table) {
        $table->dropColumn(['post_count', 'reputation', 'group_id', 'is_active', 'is_mod', 'is_admin']);
      });
    }
}
