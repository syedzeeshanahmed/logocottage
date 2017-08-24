<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id'  , 'customorder_usr_fk')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('guest_id')->unsigned()->nullable();              
            $table->foreign('guest_id'  , 'customorder_gst_fk')
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
        Schema::dropIfExists('custom_order');
    }
}
