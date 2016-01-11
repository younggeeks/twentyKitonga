<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProductSpecificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("jobs",function(Blueprint $table){
            $table->increments("id");
            $table->string("type_of_product");
            $table->string("quantity");
            $table->string("print_sides");
            $table->string("number_of_sets");
            $table->string("number_of_sheets_per_set");
            $table->string("number_of_pages");
            $table->string("size");
            $table->string("size_x");
            $table->string("size_y");
            $table->string("text_paper");
            $table->string("cover_paper");
            $table->string("text_paper_type_of_color");
            $table->string("text_paper_number_of_color");
            $table->string("text_paper_colors");
            $table->string("cover_paper_type_of_color");
            $table->string("cover_paper_colors");
            $table->string("serial_numbering");
            $table->string("type_of_binding");
            $table->string("estimated_price");
            $table->integer("user_id")->unsigned()->nullable()->default(null);
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->integer("paper_price_id")->unsigned()->nullable()->default(null);
            $table->foreign("paper_price_id")->references("id")->on("paper_price")->onDelete("cascade");
            $table->integer("customer_id")->unsigned();
            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("cascade");
            $table->integer("company_id")->unsigned();
            $table->foreign("company_id")->references("id")->on("company_profile")->onDelete("cascade");
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_specification');
    }
}
