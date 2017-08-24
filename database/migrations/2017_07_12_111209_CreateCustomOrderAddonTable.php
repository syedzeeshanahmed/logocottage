<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomOrderAddonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_order_items_addons', function (Blueprint $table) {
            $table->increments('id');

             $table->integer('custom_order_item_id')->unsigned()->nullable();
            $table->foreign('custom_order_item_id'  , 'cusorderitemid_fk')
                ->references('id')->on('custom_order_items')
                ->onDelete('cascade');

            $table->integer('item_id')->unsigned()->nullable();              
            $table->foreign('item_id'  , 'cusitemid_fk')
                ->references('id')->on('items')
                ->onDelete('cascade');  

            $table->integer('addons_id')->unsigned()->nullable();              
            // $table->foreign('addons_id'  , 'cusaddonsid_fk')
            //     ->references('id')->on('addons')
            //     ->onDelete('cascade');   


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
        Schema::dropIfExists('custom_order_items_addons');
    }
}
