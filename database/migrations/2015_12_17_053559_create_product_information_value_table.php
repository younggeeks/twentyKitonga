<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInformationValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_information_value', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cost_of_machine");
            $table->string("monthly_operator_salary");
            $table->string("output_capacity");
            $table->integer("product_info_code_id")->unsigned();
            $table->integer("company_id")->unsigned();
            $table->foreign("product_info_code_id")->references("id")
                ->on("product_information_code")->onDelete("cascade");
            $table->foreign("company_id")->references("id")
                ->on("company_profile")->onDelete("cascade");
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
        Schema::drop('product_information_value');
    }
}
