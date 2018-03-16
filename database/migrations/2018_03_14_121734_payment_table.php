<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('members', function (Blueprint $table) {
//            $table->dropColumn('payment');
//        });

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount', 8, 2)->default(0.00);
            $table->integer('member_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            //foreign keys
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
