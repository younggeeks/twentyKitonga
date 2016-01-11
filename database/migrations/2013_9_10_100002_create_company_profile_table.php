<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("company_profile",function(Blueprint $table){
            $table->increments("id");
            $table->string("vrn");
            $table->string("tin");
            $table->string("box");
            $table->string("address");
            $table->string("phone");
            $table->string("name");
            $table->string("logo");
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


        Schema::drop('company_information');
    }
}
