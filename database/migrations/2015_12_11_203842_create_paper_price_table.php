<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePaperPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create("paper_price",function(Blueprint $table){
            $table->increments("id");
             $table->string("price");
            $table->integer("company_id")->unsigned()->nullable()->default(null);
            $table->integer("shop_id")->unsigned()->nullable()->default(null);
             $table->foreign("company_id")->references("id")->on("company_profile")
                 ->onDelete("cascade");
            $table->integer("paper_id")->unsigned();
             $table->foreign("shop_id")->references("id")->on("shops")
                 ->onDelete("cascade");
             $table->foreign("paper_id")->references("id")->on("papers")->onDelete("cascade");
             $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paper_price');
    }
}
