<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsMercadopagoMensalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensalidades', function (Blueprint $table) {
            $table->string('preference_id')->nullable();
            $table->string('init_point')->nullable();
            $table->string('status_uri')->nullable();
            $table->string('collection_id')->nullable();
            $table->string('collection_status')->nullable();
            $table->string('external_reference')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('merchant_order_id')->nullable();
            $table->string('processing_mode')->nullable();
            $table->string('merchant_account_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensalidades', function (Blueprint $table) {
            //
        });
    }
}
