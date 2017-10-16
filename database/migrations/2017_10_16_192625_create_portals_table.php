<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portals', function (Blueprint $table) {
            $table->increments('id');

            $table->text('version')->nullable();
            $table->text('link')->nullable();

            $table->integer('platform_id');
            $table->integer('product_id');

            $table->integer('status')->nullable();
            $table->integer('status_text')->nullable();
            $table->integer('status_images')->nullable();

            $table->integer('portal')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portals');
    }
}
