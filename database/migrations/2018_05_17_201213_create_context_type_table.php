<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/** 
 * @note Create the context_type table
 * @note the structure is linked to the Context_type model (app/Context_type.php)
 * @date 18-05-2018
 * @author José Torres 
 * @copyright Gecko sas
 * @package CreateContextTypeTable
 * @version Audara 1.0
 * 
*/

class CreateContextTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @note Create the context_type table
     */
    public function up()
    {
        Schema::create('context_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->enum('status', array('ENABLED', 'DISABLED'))->default('ENABLED');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @note Remove the context_type table
     */
    public function down()
    {
        Schema::dropIfExists('context_type');
    }
}
