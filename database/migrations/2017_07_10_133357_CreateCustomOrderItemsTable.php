<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->default(1);

             $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id'  , 'customorderid_fk')
                ->references('id')->on('custom_order')
                ->onDelete('cascade');
            $table->integer('item_id')->unsigned()->nullable();              
            $table->foreign('item_id'  , 'itemid_fk')
                ->references('id')->on('items')
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
        Schema::dropIfExists('custom_order_items');
    }
}
