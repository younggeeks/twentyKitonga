<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCompanyOverheadsAndMarginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("company_overheads_and_margins",function(Blueprint $table){
            $table->increments("id");
            $table->string("overhead_rate_for_company_estimator");
            $table->string("overhead_rate_for_public");
            $table->string("profit_margin_rate_for_company_estimator");
            $table->string("profit_margin_rate_for_public");
            $table->integer("company_id")->unsigned();
            $table->foreign("company_id")->references("id")->on("company_profile")->onDelete("cascade");
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
        Schema::drop('company_overheads_and_margins');
    }
}
