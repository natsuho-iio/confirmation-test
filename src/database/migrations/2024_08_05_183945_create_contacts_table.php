<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->char('first_name', 255);
           $table->char('last_name', 255);
           $table->char('email', 255);
           $table->char('tell', 255);
           $table->char('address', 255);
           $table->char('building', 255);
           $table->text('detail');
           $table->timestamp('created_at')->useCurrent()->nullable();
           $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
