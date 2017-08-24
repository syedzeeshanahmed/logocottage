<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('name');
            $table->longText('description');
            $table->string('feeling')->nullable();
            $table->mediumText('comments')->nullable();
            $table->mediumText('features')->nullable();
            $table->string('caption')->nullable();
            
            /* web attributes */
            $table->string('purpose')->nullable();
            $table->string('audience')->nullable();
            $table->string('navigation')->nullable();
            $table->mediumText('preferences')->nullable();
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id'  , 'user_req_fk')
                ->references('id')->on('users')
                ->onDelete('cascade');
            
            $table->integer('guest_id')->unsigned();                
            $table->foreign('guest_id'  , 'guest_req_fk')
                ->references('id')->on('guests')
                ->onDelete('cascade');            
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}
