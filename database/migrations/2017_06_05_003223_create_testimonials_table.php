<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('rating');
            $table->longText('description');
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('guest_id')->unsigned();
            
            $table->foreign('order_id'  , 'order_testi_fk')
                ->references('id')->on('orders')
                ->onDelete('cascade');
            $table->foreign('user_id'  , 'user_testi_fk')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('guest_id'  , 'guest_testi_fk')
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
        Schema::dropIfExists('testimonials');
    }
}
