<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_requirements', function (Blueprint $table) {
            $table->increments('id');

            $table->string('package_name');
            $table->string('package_price');
            $table->longText('description');
            $table->mediumText('budget');
            $table->string('schedule');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id'  , 'general_usr_fk')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('guest_id')->unsigned()->nullable();              
            $table->foreign('guest_id'  , 'general_gst_fk')
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
        Schema::dropIfExists('general_requirements');
    }
}
