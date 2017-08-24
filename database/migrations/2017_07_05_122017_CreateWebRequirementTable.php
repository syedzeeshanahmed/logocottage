<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('package_name');
            $table->string('package_price');
            $table->string('business_name');
            $table->longText('business_description');
            $table->longText('state');
            $table->longText('audience');
            $table->longText('navigation');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id'  , 'web_usr_fk')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('guest_id')->unsigned()->nullable();              
            $table->foreign('guest_id'  , 'web_gst_fk')
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
        Schema::dropIfExists('web_requirements');
    }
}
