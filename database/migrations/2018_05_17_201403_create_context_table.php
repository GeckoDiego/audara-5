<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the context table
 * @note the structure is linked to the Context model (app/Context.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateContextTable
 * @version Audara 1.0
 * 
*/

class CreateContextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the context table
     * @note the foreign keys:
     * @note context_type_id -> referenced the context_type table ->id
     */
    public function up()
    {
        Schema::create('context', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->text('description'); 
            $table->integer('context_type_id')->unsigned(); 
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->foreign('context_type_id')->references('id')->on('context_type');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the context table
     */
    public function down()
    {
        Schema::dropIfExists('context');
    }
}
