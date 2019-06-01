<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createatgtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         
   if (Schema::hasTable('atg_records')) {
    //
    

}
else{
 
    Schema::create('atg_records', function (Blueprint $table) {
    $table->char('name',100);
    $table->string('email');
    $table->integer('pin_code',6);
});}
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
