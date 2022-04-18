<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->id();
            $table->string('user_picture_offer')->nullable();
            $table->string('user_offer_name');
            $table->string('user_desc_offer');
            $table->string('user_price_per_offer');
            $table->string('user_number_shares_offer');
            $table->string('user_end_date_offer');
//            $table->string('picture_or_file_offer');
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
        Schema::dropIfExists('user_products');
    }
}
