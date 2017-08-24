<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('interest');
            $table->string('page');
            $table->string('budget');
            $table->longText('description');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id'  , 'user_fk')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('guest_id')->unsigned()->nullable();              
            $table->foreign('guest_id'  , 'guest_fk')
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
        Schema::dropIfExists('quotes');
    }
}
